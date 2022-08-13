<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
</head>

<body style="background-color: white;">
    <div class="navs">
        <nav class="navbar navbar-expand-lg navbar-light bg-light " style="background-color:white; ">
            <div class="container-fluid color">

                <div class="navs">
                    <nav class="navbar bg-primary fixed-top ">
                        <div class="container-fluid">
                            <a class="navbar-brand" style="color: black; font-weight:900;" href="#">Practice Questions</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="./onepage/index.html"><i class="uil uil-home"></i>Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="uil uil-book-alt"></i>Take a test</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="./login.php"><i class="uil uil-book-alt"></i>Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="./signup.php"><i class="uil uil-book-alt"></i>Signup</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Menu
                              </a>
                                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                                <li><a class="dropdown-item" href="#"><i class="uil uil-setting"></i>Account settings</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="uil uil-bell"></i>Notifications</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="./bhu.html">Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <form class="d-flex" role="search">
                                   
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </nav>
    <div id="container">
        <h2>Email</h2>
        <p>It's quick and easy.</p>
        <div id="line"></div>
        <form action="verifyEmail.php" method="POST" autocomplete="off">
            <?php
            if(isset($_SESSION['message'])){
                ?>
                <div id="alert"><?php echo $_SESSION['message']; ?></div>
                <?php
            }
            ?>

            <?php
            if($errors > 0){
                foreach($errors AS $displayErrors){
                ?>
                <div id="alert"><?php echo $displayErrors; ?></div>
                <?php
                }
            }
            ?>      
            
                <?php include('errors.php'); ?>
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Forgot password</h5>

                  <div class="form-outline mb-4">
                    <input type="number" id="form2Example17" class="form-control form-control-lg" name="OTPverify" placeholder="Verification Code" required/>
                    <label class="form-label" for="form2Example17">Input Email</label>
                  </div>

                  <input type="submit" name="verifyEmail" value="Verify">
                
        </form>
    </div>
</body>
</html>