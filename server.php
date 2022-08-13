<?php
session_start();

// initializing variables
$Firstname = "";
$Lastname = "";
$Level = "";
$Department = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('us-cdbr-east-06.cleardb.net', 'bafe26669f7a64', 'e22c538e', 'heroku_2c1b833fcb428fb');
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $Firstname = mysqli_real_escape_string($db, $_POST['Firstname']);
  $Lastname = mysqli_real_escape_string($db, $_POST['Lastname']);
  $Level = mysqli_real_escape_string($db, $_POST['Level']);
  $Department = mysqli_real_escape_string($db, $_POST['Department']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array

  if (empty($Firstname)) { array_push($errors, "Firstname is required"); }
  if (empty($Lastname)) { array_push($errors, "Lastname  is required"); }
  if (empty($Level)) { array_push($errors, "Level  is required"); }
  if (empty($Department)) { array_push($errors, "Department is required"); }
  if (empty($email)) { array_push($errors, "email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
   // check password length if password is less then 8 character so
        if (strlen(trim($_POST['password_1'])) < 8) {
            $errors['password_1'] = 'Use 8 or more characters with a mix of letters, numbers & symbols';
       
        }
        if (strlen(trim($_POST['password_2'])) < 8) {
         
      }
        // generate a random Code
        $code = rand(999999, 111111);
        // set Status
        $status = "Not Verified";


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE  email='$email'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  
  if ($user) { 
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
}

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (email, password, Firstname, Lastname, Level, Department ) 
  			  VALUES( '$email', '$password', '$Firstname', '$Lastname', '$Level', '$Department')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['email'] = $email;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong email/password combination...Story no clear!!");
        }
    }
  }

    // if forgot button will clicked
    if (isset($_POST['forgot_password'])) {
      $email = $_POST['email'];
      $_SESSION['email'] = $email;

      $emailCheckQuery = "SELECT * FROM users WHERE email = '$email'";
      $emailCheckResult = mysqli_query($db, $emailCheckQuery);

      // if query run
      if ($emailCheckResult) {
          // if email matched
          if (mysqli_num_rows($emailCheckResult) > 0) {
              $code = rand(999999, 111111);
              $updateQuery = "UPDATE users SET code = $code WHERE email = '$email'";
              $updateResult = mysqli_query($db, $updateQuery);
              if ($updateResult) {
                  $subject = 'Forgotten Password Verification Code';
                  $message = "Do not Disclose OTP To Verify your Account, Input OTP for Confirmation $code";
                  $sender = 'From: raymondogunrinde@gmail.com';

                  if (mail($email, $subject, $message, $sender)) {
                      $message = "We've sent a verification code to your Email <br> $email"; 

                      $_SESSION['message'] = $message;
                      header('location: verifyEmail.php');
                  } else {
                      $errors['otp_errors'] = 'Failed while sending code!';
                  }
              } else {
                  $errors['db_errors'] = "Failed while inserting data into database!";
              }
          }else{
              $errors['invalidEmail'] = "Invalid Email Address";
          }
      }else {
          $errors['db_error'] = "Failed while checking email from database!";
      }
  }
if(isset($_POST['verifyEmail'])){
  $_SESSION['message'] = "";
  $OTPverify = mysqli_real_escape_string($db, $_POST['OTPverify']);
  $verifyQuery = "SELECT * FROM users WHERE code = $OTPverify";
  $runVerifyQuery = mysqli_query($db, $verifyQuery);
  if($runVerifyQuery){
      if(mysqli_num_rows($runVerifyQuery) > 0){
          $newQuery = "UPDATE users SET code = 0";
          $run = mysqli_query($db,$newQuery);
          header("location: newPassword.php");
      }else{
          $errors['verification_error'] = "Invalid Verification Code";
      }
  }else{
      $errors['db_error'] = "Failed while checking Verification Code from database!";
  }
}

// change Password
if(isset($_POST['changePassword'])){
  $password = md5($_POST['password_1']);
  $confirmPassword = md5($_POST['password_2']);
  
  if (strlen($_POST['password_1']) < 8) {
      $errors['password_error'] = 'Use 8 or more characters with a mix of letters, numbers & symbols';
  } else {
      // if password not matched so
      if ($_POST['password_1'] != $_POST['password_2']) {
        array_push($errors, "The two passwords do not match");
      } 
      if (strlen(trim($_POST['password_1'])) < 8) {
        $errors['password_1'] = 'Use 8 or more characters with a mix of letters, numbers & symbols';
   
    }
    if (strlen(trim($_POST['password_2'])) < 8) {
     
  }
      else {
          $email = $_SESSION['email'];
          $updatePassword = "UPDATE users SET password = '$password' WHERE email = '$email'";
          $updatePass = mysqli_query($db, $updatePassword) or die("Query Failed");
          $code = 0;
          
          session_destroy();
          header('location: login.php');
      }
  }
}
  
  ?>
  
