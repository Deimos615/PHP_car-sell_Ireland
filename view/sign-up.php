<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Autoguru</title>

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/nice-select.css">
    <link rel="stylesheet" href="./assets/css/owl.min.css">
    <link rel="stylesheet" href="./assets/css/magnific-popup.css">
    <link rel="stylesheet" href="./assets/css/flaticon.css">
    <!-- <link rel="stylesheet" href="./assets/fontawesome-free-5.15.4-web/css/fontawesome.min.css"> -->
    <link rel="stylesheet" href="./assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/custom.css">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
</head>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <div class="overlayer" id="overlayer">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->


    <!--============= Header Section Starts Here =============-->
    <?php include './inc/header.php';?>
    <!--============= Header Section Ends Here =============-->

    <!--============= Cart Section Starts Here =============-->
    
    <!--============= Cart Section Ends Here =============-->


    <!--============= Hero Section Starts Here =============-->
    <div class="hero-section">
        <div class="container">
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="./assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Account Section Starts Here =============-->
    <section class="account-section padding-bottom">
        <div class="container">
            <div class="account-wrapper mt--100 mt-lg--440">
                <div class="left-side register_container">
                    <div class="section-header">
                        <h2 class="title">Register</h2>
                        <p>We're happy you're here!</p>
                    </div>
                    <form class="login-form form-signin" method="post" id="register-form">
                        <div id="error">
                        </div>
                        <div class="form-group mb-30">
                            <label for="user_name"><i class="far fa-user"></i></label>
                            <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Name">
                        </div>
                        <div class="form-group mb-30">
                            <label for="user_email"><i class="far fa-user-circle"></i></label>
                            <input type="text" class="form-control" id="user_dealer" name="user_dealer" placeholder="Dealership Name">
                        </div>
                        <div class="form-group mb-30">
                            <label for="user_link"><i class="far fa fa-link"></i></label>
                            <input type="text" class="form-control" id="user_link" name="user_link" placeholder="Website Link">
                        </div>
                        <div class="form-group mb-30">
                            <label for="user_email"><i class="far fa-envelope"></i></label>
                            <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email Address">
                        </div>
                        <div class="form-group mb-30">
                            <label for="user_vat"><i class="far fa fa-credit-card"></i></label>
                            <input type="text" class="form-control" id="user_vat" name="user_vat" placeholder="Vat registered">
                        </div>
                        <div class="form-group mb-30">
                            <label for="user_garage"><i class="far fa fa-car"></i></label>
                            <input type="text" class="form-control" id="user_garage" name="user_garage" placeholder="Garage Code">
                        </div>
                        <div class="form-group mb-30">
                            <label for="user_bank"><i class="far fa fa-university"></i></label>
                            <input type="text" class="form-control" id="user_bank" name="user_bank" placeholder="What Bank Used">
                        </div>
                        <div class="form-group mb-30">
                            <label for="login-pass user_pass"><i class="fas fa-lock"></i></label>
                            <input type="password" class="form-control user_pass" id="login-pass" name="user_pass" placeholder="Password">
                            <span class="pass-type"><i class="fas fa-eye"></i></span>
                        </div>
                        <div class="form-group mb-30">
                            <label for="user_repass"><i class="fas fa-lock"></i></label>
                            <input type="password" class="form-control user_pass" id="login-repass" name="user_repass" placeholder="Confirm Password">
                            <span class="pass-type pass-retype"><i class="fas fa-eye"></i></span>
                        </div>
                        <div class="form-group mb-0" style="text-align: center;">
                            <button type="submit" class="custom-button" name="btn-save" id="btn-submit">
                                <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
                            </button>
                        </div>
                    </form>
                </div>
                <div class="right-side cl-white">
                    <div class="section-header mb-0">
                        <h3 class="title mt-0">ALREADY HAVE AN ACCOUNT?</h3>
                        <p>Log in and go to your Dashboard.</p>
                        <a href="sign-in.php" class="custom-button transparent">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Account Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    <?php include './inc/footer.php'; ?>
    <!--============= Footer Section Ends Here =============-->



    <script src="./assets/js/jquery-3.3.1.min.js"></script>
    <script src="./assets/js/modernizr-3.6.0.min.js"></script>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/isotope.pkgd.min.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/waypoints.js"></script>
    <script src="./assets/js/nice-select.js"></script>
    <script src="./assets/js/counterup.min.js"></script>
    <script src="./assets/js/owl.min.js"></script>
    <script src="./assets/js/magnific-popup.min.js"></script>
    <script src="./assets/js/yscountdown.min.js"></script>
    <script src="./assets/js/jquery-ui.min.js"></script>
    <script src="./assets/js/validation.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/register.js"></script>
</body>

</html>