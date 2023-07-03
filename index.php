<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Autoguru</title>

    <link rel="stylesheet" href="./view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./view/assets/css/all.min.css">
    <link rel="stylesheet" href="./view/assets/css/animate.css">
    <link rel="stylesheet" href="./view/assets/css/nice-select.css">
    <link rel="stylesheet" href="./view/assets/css/owl.min.css">
    <link rel="stylesheet" href="./view/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="./view/assets/css/flaticon.css">
    <link rel="stylesheet" href="./view/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="./view/assets/css/main.css">
    <link rel="stylesheet" href="./view/assets/css/custom.css">

    <link rel="shortcut icon" href="./view/assets/images/favicon.png" type="image/x-icon">
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
    <header>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="./index.php">
                            <img src="./view/assets/images/logo/logo2.png" alt="logo">
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="./view/product.php">Stock</a>
                        </li>
                        <li>
                            <a href="./view/faqs.php">faqs</a>
                        </li>
                        <li>
                            <a href="#">
                                <?php 
                                    include_once("./model/db_connect.php");
                                    if(isset($_SESSION['user_session'])){
                                        $sql = "SELECT * FROM user WHERE id='".$_SESSION['user_session']."'";
                                        $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                                        $row = mysqli_fetch_assoc($resultset);
                                    }

                                    if(!isset($_SESSION['user_session'])){
                                        echo "My account";
                                        echo '<style>#h_dashboard { display:none;}</style>';
                                        echo '<style>#h_logout { display:none;}</style>';
                                    } else {
                                        echo $row['name']; 
                                        echo '<style>#h_register { display:none;}</style>';
                                        echo '<style>#h_login { display:none;}</style>';
                                    }
                                ?>
                            </a>
                            <ul class="submenu">
                                <li id="h_dashboard">
                                    <a href="./view/dashboard.php">Dashboard</a>
                                </li>
                                <li id="h_register">
                                    <a href="./view/sign-up.php">Register</a>
                                </li>
                                <li id="h_login">
                                    <a href="./view/sign-in.php">Login</a>
                                </li>
                                <li id="h_logout">
                                    <a href="./controller/logout.php">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="search-bar d-md-none">
                        <a href="#0"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--============= Header Section Ends Here =============-->

    <!--============= Cart Section Starts Here =============-->
    
    <!--============= Cart Section Ends Here =============-->


    <!--============= Banner Section Starts Here =============-->
    <section class="banner-section bg_img" data-background="./view/assets/images/banner/banner-bg-1.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner-content cl-white">
                        <h2 class="title"><span class="d-xl-block">Motor Trade Only</span> Marketplace</h2>
                        <p>
                            AG Trade centre allows motordealers to replenish stock on demand. 
                        </p>
                        <a href="./view/product.php" class="custom-button yellow btn-large">View Stock</a>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-6">
                    <div class="banner-thumb-2">
                        <img src="./view/assets/images/banner/banner-1.png" alt="banner">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape d-none d-lg-block">
            <img src="./view/assets/css/img/banner-shape.png" alt="css">
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->


    <div class="browse-section ash-bg">
        <!--============= Hightlight Slider Section Starts Here =============-->

        <!--============= Hightlight Slider Section Ends Here =============-->
        
        <!--============= Car Auction Section Starts Here =============-->
        <section class="car-auction-section padding-bottom padding-top pos-rel oh">
            <div class="car-bg"><img src="./view/assets/images/auction/car/car-bg.png" alt="car"></div>
            <div class="container">
                <div class="section-header-3">
                    <div class="left">
                        <div class="thumb">
                            <img src="./view/assets/images/header-icons/car-1.png" alt="header-icons">
                        </div>
                        <div class="title-area">
                            <h2 class="title">Featured Vehicles</h2>
                        </div>
                    </div>
                    <a href="./view/product.php" class="normal-button">View All</a>
                </div>
                <div class="row justify-content-center mb-30-none">
                    <?php
                        include_once("./model/db_connect.php");
                        $sql = "SELECT id, name, buy_price, main_img, timer, buy_status FROM stock WHERE live_status IS NULL AND list_status='active' AND feature='yes' ";
                        $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                        $cnt = 0;
                        while($row = $resultset->fetch_assoc()) {
                            if($cnt == 3)
                                break;
                            echo "<div class='col-sm-10 col-md-6 col-lg-4'>
                                <div class='auction-item-2'>
                                    <div class='auction-thumb'>
                                        <img class='sold-img' id='sold_img". $row['id'] ."' src='./view/assets/images/custom/sold.png' style='display:none' alt='sold image'>
                                        <img src='./autoAdmin/controller". $row['main_img'] ."' alt='car'>
                                    </div>
                                    <div class='auction-content'>
                                        <h6 class='title'>
                                            <a href='./view/product-details.php'>". $row['name'] ."</a>
                                        </h6>
                                        <div class='bid-area'>
                                            <div class='bid-amount'>
                                                <div class='countdown'>
                                                    <div class='bid_counter_index'>". $row['timer'] ."</div>
                                                </div>
                                            </div>
                                            <div class='bid-amount'>
                                                <div class='icon'>
                                                    <img src='./view/assets/images/money-bag.png' class='money-bag' style='width:100%'></img>
                                                </div>
                                                <div class='amount-content'>
                                                    <div class='current'>Buy Now</div>
                                                    <div class='amount' id='amount". $row['id'] ."'>€". $row['buy_price'] ."</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='text-center'>
                                            <a onclick='detailbtn_click(".$row["id"].")' class='custom-button' style='color: white; cursor: pointer;'>
                                                <button type='text' class='detailbtn-input' style='display: none;'>". $row['id'] ."</button>
                                                View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                            $cnt ++;
                            if($row['buy_status'] == 'bought') {
                                echo "<script>
                                        document.getElementById('sold_img". $row['id'] ."').style.display = 'block';
                                        document.getElementById('amount". $row['id'] ."').style.display = 'none';
                                    </script>";
                            }
                        } 
                        
                    ?>
                </div>
            </div>
        </section>
        <!--============= Car Auction Section Ends Here =============-->
    </div>

    <!--============= Jewelry Auction Section Starts Here =============-->
    <section class="jewelry-auction-section padding-bottom padding-top pos-rel">
        <div class="jewelry-bg d-none d-xl-block"><img src="./view/assets/images/auction/jewelry/jwelry-bg.png" alt="jewelry"></div>
        <div class="container">
            <div class="section-header-3 d-flex justify-content-between flex-wrap-reverse">
                <div class="col-md-6 col-sm-12">
                    <div class="thumb">
                        <img src="./view/assets/images/header-icons/coin-1.png" alt="header-icons">
                    </div>
                    <div class="title-area">
                        <h2 class="title mb-3">Buy with confidence</h2>
                        <p>Dealers have been using our reports on thousands of vehicles to gather further insights. </p>
                        <p>All vehicles listed be that from fleets, franchised dealers or privates are test driven, inspected and graded before being accepted into the sales channel. To insure further insight all vehicles undergo a further inspection and condition report before going live on our site. Our goal is to allow buyers to accurately price any repairs or prep needed resulting in a profitable experience for both sides. 
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <img style="width:100%;" src="./view/assets/images/auction/description.png">
                </div>
            </div>
        </div>
    </section>
    <!--============= Jewelry Auction Section Ends Here =============-->

    <!--============= How Section Starts Here =============-->
    <section class="how-section padding-top">
        <div class="container">
            <div class="how-wrapper section-bg">
                <div class="section-header text-lg-left d-flex flex-wrap-reverse">
                    <div class="col-md-8 col-sm-12">
                        <h2 class="title" style="padding-top: 20px;">Buy with confidence</h2>
                        <p>All our cars come with an assessment report allowing you to budget for any repairs prior to retailing</p> 
                        <h2 class="title" style="padding-top: 20px;">Buying options to suit you </h2>
                        <p>Buy a vehicle immediately with a simple click of the “Buy it now” button or place an offer with the highest realistic offer at the end of the timer winning the vehicle</p> 
                        <h2 class="title" style="padding-top: 20px;">Delivery</h2>
                        <p>After vehicle payments have cleared delivery will be arranged to your business location.</p> 
                    </div>
                    <div class="col-md-4 col-sm-12" style="margin: auto;">
                        <img style="width:90%;" src="./view/assets/images/Tow Truck.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= How Section Ends Here =============-->

    <!--============= Call In Section Starts Here =============-->
    <section class="call-in-section padding-top pt-max-xl-0">
        <div class="container">
            <div class="call-wrapper cl-white bg_img" data-background="./view/assets/images/call-in/call-bg.png">
                <div class="section-header">
                    <h3 class="title">Take us for a test drive</h3>
                    <p>Curious about what you see? Then why not sign up now</p>
                </div>
                <a href="./view/sign-up.php" class="custom-button white">Sign Up</a>
            </div>
        </div>
    </section>
    <!--============= Call In Section Ends Here =============-->

    <!--============= Client Section Starts Here =============-->
    
    <!--============= Client Section Ends Here =============-->


    <!--============= Footer Section Starts Here =============-->
    <footer class="bg_img padding-top oh" data-background="./view/assets/images/footer/footer-bg.jpg">
        <div class="footer-top-shape">
            <img src="./view/assets/css/img/footer-top-shape.png" alt="css">
        </div>
        <div class="anime-wrapper">
            <div class="anime-1 plus-anime">
                <img src="./view/assets/images/footer/p1.png" alt="footer">
            </div>
            <div class="anime-2 plus-anime">
                <img src="./view/assets/images/footer/p2.png" alt="footer">
            </div>
            <div class="anime-3 plus-anime">
                <img src="./view/assets/images/footer/p3.png" alt="footer">
            </div>
            <div class="anime-5 zigzag">
                <img src="./view/assets/images/footer/c2.png" alt="footer">
            </div>
            <div class="anime-6 zigzag">
                <img src="./view/assets/images/footer/c3.png" alt="footer">
            </div>
            <div class="anime-7 zigzag">
                <img src="./view/assets/images/footer/c4.png" alt="footer">
            </div>
        </div>
        <div class="footer-top padding-bottom padding-top">
            <div class="container footer-section">
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget widget-links">
                        <h5 class="title">Category</h5>
                        <ul class="links-list">
                            <li>
                                <a href="./view/product.php">Stock</a>
                            </li>
                            <li>
                                <a href="./view/about.php">About US</a>
                            </li>
                            <li>
                                <a href="./view/contact.php">Contact Us</a>
                            </li>
                            <li>
                                <a href="./view/faqs.php">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-widget widget-follow">
                        <h5 class="title">Address</h5>
                        <ul class="links-list">
                            <li>
                                <a>Ladytown Business Park,</a>
                            </li>
                            <li>
                                <a>Naas,</a>
                            </li>
                            <li>
                                <a>Co. Kildare</a>
                            </li>
                            <li>
                                <a>Ireland</a>
                            </li>
                        </ul>
                        <ul class="social-icons">
                            <li>
                                <a href="https://www.facebook.com/" class="active"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright-area">
                    <div class="footer-bottom-wrapper">
                        <div class="logo">
                            <a href="#"><img src="./view/assets/images/logo/logo2.png" alt="logo"></a>
                        </div>
                        <div class="copyright"><p>&copy; Copyright 2022 | <a>Auto</a> By <a>Guru</a></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--============= Footer Section Ends Here =============-->



    <script src="./view/assets/js/jquery-3.3.1.min.js"></script>
    <script src="./view/assets/js/modernizr-3.6.0.min.js"></script>
    <script src="./view/assets/js/plugins.js"></script>
    <script src="./view/assets/js/bootstrap.min.js"></script>
    <script src="./view/assets/js/isotope.pkgd.min.js"></script>
    <script src="./view/assets/js/wow.min.js"></script>
    <script src="./view/assets/js/waypoints.js"></script>
    <script src="./view/assets/js/nice-select.js"></script>
    <script src="./view/assets/js/counterup.min.js"></script>
    <script src="./view/assets/js/owl.min.js"></script>
    <script src="./view/assets/js/magnific-popup.min.js"></script>
    <script src="./view/assets/js/yscountdown.min.js"></script>
    <script src="./view/assets/js/jquery-ui.min.js"></script>
    <script src="./view/assets/js/main.js"></script>
    <script>
        function detailbtn_click (e) {
            window.location.href = "./view/product-details.php?id=" + e;
        }
    </script>
</body>

</html>