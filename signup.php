<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bhu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
</head>

<body style="background-color: white;">
    <div class="navs">
        <nav class="navbar navbar-expand-lg navbar-primary bg-primary " style="background-color:white; ">
            <div class="container-fluid color">

                <div class="navs">
                    <nav class="navbar bg-primary fixed-top ">
                        <div class="container-fluid">
                            <a class="navbar-brand" style="color: black; font-weight:900;" href="./onepage/index.html">Wikibhu</a>
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
                                            <a class="nav-link active" aria-current="page" href="./index.html"><i class="uil uil-home"></i>Home</a>
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
                                                <li><a class="dropdown-item" href="../project3/OnePage/index.html">Logout</a></li>
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
                    <!-- Section: Design Block -->
                    <section class="background-radial-gradient overflow-hidden" style="margin-left: auto; margin-right:auto;">
                        <style>
                            .background-radial-gradient {
                                background-color: hsl(218, 41%, 15%);
                                background-image: radial-gradient(650px circle at 0% 0%, hsl(218, 41%, 35%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100%), radial-gradient(1250px circle at 100% 100%, hsl(218, 41%, 45%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100%);
                            }
                            
                            #radius-shape-1 {
                                height: 220px;
                                width: 220px;
                                top: -60px;
                                left: -130px;
                                background: radial-gradient(#44006b, #ad1fff);
                                overflow: hidden;
                            }
                            
                            #radius-shape-2 {
                                border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                                bottom: -60px;
                                right: -110px;
                                width: 300px;
                                height: 300px;
                                background: radial-gradient(#44006b, #ad1fff);
                                overflow: hidden;
                            }
                            
                            .bg-glass {
                                background-color: hsla(0, 0%, 100%, 0.9) !important;
                                backdrop-filter: saturate(200%) blur(25px);
                            }
                        </style>

                        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                            <div class="row gx-lg-5 align-items-center mb-5">
                                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                                        PRACTICE QUESTIONS<br />
                                        <span style="color: hsl(218, 81%, 75%)">For Test and Exams</span>
                                    </h1>
                                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                                        Tutorial Questions for different departments at any level for preparation for test asnd exams. NOTE THAT :- This are tutorial questions and not answers to any given exams.

                                    </p>
                                </div>

                                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                                    <div class="login">
                                        <div class="card bg-glass">
                                            <div class="card-body px-4 py-5 px-md-5">
                                                <form action="signup.php" method="post">
                                                    <?php include('errors.php'); ?>
                                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                                    <div class="row">
                                                        <div class="col-md-6 mb-4">
                                                            <div class="form-outline">
                                                                <input type="text" id="form3Example1" class="form-control" name="Firstname" value="<?php echo $Firstname; ?>" required />
                                                                <label class="form-label" for="form3Example1">First name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-4">
                                                            <div class="form-outline">
                                                                <input type="text" id="form3Example2" class="form-control" name="Lastname" value="<?php echo $Lastname; ?>" required />
                                                                <label class="form-label" for="form3Example2">Last name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-4">
                                                            <div class="form-outline">
                                                                <input type="number" id="form3Example1" class="form-control" name="Level" value="<?php echo $Level; ?>" required />
                                                                <label class="form-label" for="form3Example1">level</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-4">
                                                            <div class="form-outline">
                                                                <input type="text" id="form3Example1" class="form-control" name="Department" value="<?php echo $Department; ?>" required />
                                                                <label class="form-label" for="form3Example1">Department</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Email input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="email" id="form3Example3" class="form-control" name="email" required value="<?php echo $email; ?>" />
                                                        <label class="form-label" for="form3Example3">Email address</label>
                                                    </div>

                                                    <!-- Password input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="password" id="form3Example4" class="form-control" name="password_1" required id="id_password" />
                                                        <label class="form-label" for="form3Example4">Password</label>
                                                        
                                                    </div>
                                                   

                                                    <div class="form-outline mb-4">
                                                        <input type="password" id="form3Example4" class="form-control" name="password_2"required />
                                                        <label class="form-label" for="form3Example4">Retype Password</label>
                                                    </div>

                                                    <!-- Checkbox -->
                                                    <div class="form-check d-flex  mb-4">
                                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked required />
                                                        <label class="form-check-label" for="form2Example33">
                    Accepted any terms and conditions
                  </label>
                                                    </div>

                                                    <!-- Submit button -->
                                                    <button type="submit" class="btn btn-primary btn-block mb-4" name="reg_user">
                  Sign up
                </button>

                                                    <p style="text-align: center;">Already have an account? <a href="./login.php" class="link-info">Login</a></p>

                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </section>
                <!-- Section: Design Block -->

</body>

</html>