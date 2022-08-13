<?php include_once ("server.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Your Password In Php</title>
    <link rel="stylesheet" href="css/forgot.css">
</head>

<body>
    <div id="container">
        <h2>Email Check</h2>
        <p>It's quick and easy.</p>
        <div id="line"></div>
        <form action="forgot.php" method="POST" autocomplete="off">
            <?php
            if ($errors > 0) {
                foreach ($errors as $displayErrors) {
            ?>
                    <div id="alert"><?php echo $displayErrors; ?></div>
            <?php
                }
            }
            ?>
            
                <?php include('errors.php'); ?>
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Forgot password</h5>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Input Email</label>
                  </div>

                  
            <input type="submit" name="forgot_password" value="Check">
        </form>
    </div>
</body>

</html>