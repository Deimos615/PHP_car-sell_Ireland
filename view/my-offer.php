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
    <link rel="stylesheet" href="./assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">

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
    <div class="hero-section style-2">
        <div class="container">
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="./assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Dashboard Section Starts Here =============-->
    <section class="dashboard-section padding-bottom mt--240 mt-lg--440 pos-rel">
        <div class="container">
            <div class="row justify-content-center">

                <?php include './inc/widget.php'; ?>
                
                <div class="col-lg-8">
                    <div class="dash-bid-item dashboard-widget mb-40-60">
                        <div class="header">
                            <h4 class="title">My Offers</h4>
                        </div>
                        <ul class="button-area nav nav-tabs">
                            <li>
                                <a href="#upcoming" data-toggle="tab" class="custom-button active">Upcoming</a>
                            </li>
                            <li>
                                <a href="#past" data-toggle="tab" class="custom-button">Past</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="upcoming">
                            <div class="row mb-30-none justify-content-center">
                                <?php
                                    $uemail = $row['email'];

                                    $sql = "SELECT offer.esti_price, offer.offer, offer.cname, offer.expires, stock.main_img, stock.id FROM offer
                                            LEFT JOIN stock ON offer.cid = stock.id
                                            -- UNION ALL
                                            -- SELECT O.esti_price, O.offer, O.cname, O.expires, S.main_img FROM offer O
                                            -- RIGHT JOIN stock S ON offer.cname = stock.name
                                            WHERE offer.uemail = '". $uemail ."' AND offer.expires > CURRENT_TIMESTAMP ";
                                    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));

                                    while($row = $resultset->fetch_assoc()) {
                                    echo "<div class='col-sm-10 col-md-6'>
                                        <div class='auction-item-2'>
                                            <div class='auction-thumb'>
                                                <a href='./product-details.php'><img src='../autoAdmin/controller". $row['main_img'] ."' alt='car'></a>
                                            </div>
                                            <div class='auction-content'>
                                                <h6 class='title'>
                                                    <a href='#0'>". $row['cname'] ."</a>
                                                </h6>
                                                <div class='bid-area'>
                                                    <div class='bid-amount'>
                                                        <div class='icon'>
                                                            <i class='flaticon-auction'></i>
                                                        </div>
                                                        <div class='amount-content'>
                                                            <div class='current'>Estimation</div>
                                                            <div class='amount'>€". $row['esti_price'] ."</div>
                                                        </div>
                                                    </div>
                                                    <div class='bid-amount'>
                                                        <div class='icon'>
                                                            <img src='./assets/images/money-bag.png' class='money-bag' style='width:100%'></img>
                                                        </div>
                                                        <div class='amount-content'>
                                                            <div class='current'>Your offer</div>
                                                            <div class='amount'>€". $row['offer'] ."</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='countdown-area d-flex justify-content-center'>
                                                    <div class='countdown' style='font-size: 28px;'>
                                                        <div class='bid_counter_index'>". $row['expires'] ."</div>
                                                    </div>
                                                </div>
                                                <div class='text-center'>
                                                    <a onclick='detailbtn_click(".$row['id'].")' class='custom-button' style='color: white; cursor: pointer;'>View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="past">
                            <div class="row justify-content-center mb-30-none">
                                <?php

                                    $sql = "SELECT offer.esti_price, offer.offer, offer.cname, offer.expires, stock.main_img FROM offer
                                            LEFT JOIN stock ON offer.cid = stock.id
                                            -- UNION ALL
                                            -- SELECT O.esti_price, O.offer, O.cname, O.expires, S.main_img FROM offer O
                                            -- RIGHT JOIN stock S ON offer.cname = stock.name
                                            WHERE offer.uemail = '". $uemail ."' AND offer.expires < CURRENT_TIMESTAMP ";
                                    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));

                                    while($row = $resultset->fetch_assoc()) {
                                    echo "<div class='col-sm-10 col-md-6'>
                                        <div class='auction-item-2'>
                                            <div class='auction-thumb'>
                                                <a href='./product-details.php'><img src='../autoAdmin/controller". $row['main_img'] ."' alt='car'></a>
                                            </div>
                                            <div class='auction-content'>
                                                <h6 class='title'>
                                                    <a href='#0'>". $row['cname'] ."</a>
                                                </h6>
                                                <div class='bid-area'>
                                                    <div class='bid-amount'>
                                                        <div class='icon'>
                                                            <i class='flaticon-auction'></i>
                                                        </div>
                                                        <div class='amount-content'>
                                                            <div class='current'>Estimation</div>
                                                            <div class='amount'>€". $row['esti_price'] ."</div>
                                                        </div>
                                                    </div>
                                                    <div class='bid-amount'>
                                                        <div class='icon'>
                                                            <img src='./assets/images/money-bag.png' class='money-bag' style='width:100%'></img>
                                                        </div>
                                                        <div class='amount-content'>
                                                            <div class='current'>Your offer</div>
                                                            <div class='amount'>€". $row['offer'] ."</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='countdown-area d-flex justify-content-center'>
                                                    <div class='countdown' style='font-size: 28px;'>
                                                        <div class='bid_counter_index'>". $row['expires'] ."</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Dashboard Section Ends Here =============-->


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
    <script src="assets/js/yscountdown.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <script>   
        function detailbtn_click (e) {
            window.location.href = "product-details.php?id=" + e;
        }  
    </script>
</body>

</html>