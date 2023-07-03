<?php session_start();
    if(!isset($_SESSION['user_session'])){
        header("Location: index.php");
    }
?>
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
    <div class="hero-section style-2 pb-lg-400">
        <div class="container">
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="./assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Dashboard Section Starts Here =============-->
    <section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
        <div class="container">
            <div class="row justify-content-center">

                <?php include './inc/widget.php'; ?>

                <div class="col-lg-8">
                    <div class="dashboard-widget mb-40">
                        <div class="dashboard-title mb-30">
                            <h5 class="title">My Activity</h5>
                        </div>
                        <div class="row justify-content-center mb-30-none">
                            <?php 
                                // Get number of user offers
                                $sql_offer = "SELECT * FROM offer WHERE uemail = '". $row['email'] ."' ";
                                $result_offer = mysqli_query($conn, $sql_offer) or die("database error:". mysqli_error($conn));
                                $offer_count = mysqli_num_rows( $result_offer );

                                // Get number of user buys
                                $sql_buy = "SELECT * FROM buy WHERE uemail = '". $row['email'] ."' ";
                                $result_buy = mysqli_query($conn, $sql_buy) or die("database error:". mysqli_error($conn));
                                $buy_count = mysqli_num_rows( $result_buy );

                                // Get number of user winning offers
                                $sql_win = "SELECT *
                                            FROM offer
                                            WHERE winning = 'win' AND uemail='". $row['email'] ."' ";
                                $result_win = mysqli_query($conn, $sql_win) or die("database error:". mysqli_error($conn));
                                $win_count = mysqli_num_rows( $result_win );
                            ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="dashboard-item">
                                    <div class="thumb">
                                        <img src="./assets/images/dashboard/01.png" alt="dashboard">
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><span class="counter"><?php echo $offer_count; ?></span></h2>
                                        <h6 class="info">Active Offers</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="dashboard-item">
                                    <div class="thumb">
                                        <img src="./assets/images/dashboard/02.png" alt="dashboard">
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><span class="counter"><?php echo $win_count; ?></span></h2>
                                        <h6 class="info">Winning Offers</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="dashboard-item">
                                    <div class="thumb">
                                        <img src="./assets/images/dashboard/03.png" alt="dashboard">
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><span class="counter"><?php echo $buy_count; ?></span></h2>
                                        <h6 class="info">Buy Now</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard-widget">
                        <h5 class="title mb-10">My History</h5>
                        <div class="dashboard-purchasing-tabs">
                            <ul class="nav-tabs nav">
                                <li>
                                    <a href="#current" class="active" data-toggle="tab">Offers</a>
                                </li>
                                <li>
                                    <a href="#pending" data-toggle="tab">Winning Offers</a>
                                </li>
                                <li>
                                    <a href="#history" data-toggle="tab">Buy Now</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active fade" id="current">
                                    <table class="purchasing-table">
                                        <thead>
                                            <th>Item</th>
                                            <th>Offer Price</th>
                                            <th>Estimation Bid</th>
                                            <th>Offered At</th>
                                            <th>Expires</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $uemail = $row['email'];
                                                $sql = "SELECT * FROM offer WHERE uemail = '". $uemail ."' ";
                                                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                                                while($row = $resultset->fetch_assoc()) {
                                                    echo "<tr>
                                                        <td data-purchase='item'>". $row['cname'] ."</td>
                                                        <td data-purchase='bid price'>€". $row['offer'] ."</td>
                                                        <td data-purchase='highest bid'>€". $row['esti_price'] ."</td>
                                                        <td data-purchase='lowest bid'>". $row['offered_at'] ."</td>
                                                        <td data-purchase='expires'>". $row['expires'] ."</td>
                                                    </tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane show fade" id="pending">
                                    <table class="purchasing-table">
                                        <thead>
                                            <th>Item</th>
                                            <th>Winning Offer</th>
                                            <th>Estimation Price</th>
                                            <th>Offered At</th>
                                            <th>Expires</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                // finding the highest offer price as the winning offer
                                                // $sql = "SELECT a.*
                                                //         FROM offer a
                                                //         INNER JOIN (
                                                //             SELECT MAX(c.offer) as offer
                                                //             FROM offer c
                                                //             GROUP BY c.cname
                                                //         ) b ON a.offer = b.offer where a.uemail='". $uemail ."' ";

                                                // finding offer that admin selected as the winning offer
                                                $sql = "SELECT *
                                                        FROM offer
                                                        WHERE winning = 'win' AND uemail='". $uemail ."' ";
                                                
                                                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                                                while($row = $resultset->fetch_assoc()) {
                                                    if( $uemail == $row['uemail']) {
                                                        echo "<tr>
                                                            <td data-purchase='item'>". $row['cname'] ."</td>
                                                            <td data-purchase='bid price'>€". $row['offer'] ."</td>
                                                            <td data-purchase='highest bid'>€". $row['esti_price'] ."</td>
                                                            <td data-purchase='lowest bid'>". $row['offered_at'] ."</td>
                                                            <td data-purchase='expires'>". $row['expires'] ."</td>
                                                        </tr>";
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane show fade" id="history">
                                    <table class="purchasing-table">
                                        <thead>
                                            <th>Item</th>
                                            <th>Buy Price</th>
                                            <th>Bought At</th>
                                            <th>Expires</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sql = "SELECT * FROM buy WHERE uemail = '". $uemail ."' ";
                                                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                                                while($row = $resultset->fetch_assoc()) {
                                                    echo "<tr>
                                                        <td data-purchase='item'>". $row['cname'] ."</td>
                                                        <td data-purchase='highest bid'>€". $row['buy_price'] ."</td>
                                                        <td data-purchase='lowest bid'>". $row['bought_at'] ."</td>
                                                        <td data-purchase='expires'>". $row['expires'] ."</td>
                                                    </tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
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
</body>

</html>