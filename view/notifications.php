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
                    <div class="dash-bid-item dashboard-widget mb-30">
                        <div class="header">
                            <h4 class="title mw-100">My Alerts</h4>
                        </div>
                        <ul class="button-area nav nav-tabs">
                            <li>
                                <a href="#alerts" data-toggle="tab" class="custom-button active">Alerts</a>
                            </li>
                            <li>
                                <a href="#newsletters" data-toggle="tab" class="custom-button">Newsletters</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dashboard-widget tab-content">
                        <div class="alert-widget tab-pane show fade active" id="alerts">
                            <ul>
                                <li>
                                    <input type="checkbox" id="check1" checked>
                                    <label for="check1">
                                        <h6 class="title">Bid Notifications</h6>
                                        <p>Receive an email notifying you if someone else bids on an item on which you have already placed a bid.</p>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="check2">
                                    <label for="check2">
                                        <h6 class="title">Live Auction Reminder</h6>
                                        <p>Get a reminder that a live auction you've registered for is about
                                            to begin.</p>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="check3" checked>
                                    <label for="check3">
                                        <h6 class="title">Saved Items Going Live</h6>
                                        <p>Get a reminder that items you've saved are going live in an auction.</p>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="check4">
                                    <label for="check4">
                                        <h6 class="title">Bids Ending Soon</h6>
                                        <p>Get a reminder when items you've bid on are going live in the next
                                            couple days</p>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="check5" checked>
                                    <label for="check5">
                                        <h6 class="title">Rate Your Experience</h6>
                                        <p>Receive an email notifying you if someone else bids on an item on which you have already placed a bid.</p>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="alert-widget tab-pane show fade" id="newsletters">
                            <ul>
                                <li>
                                    <input type="checkbox" id="check6">
                                    <label for="check6">
                                        <h6 class="title">Auction News</h6>
                                        <p>A roundup of the trending news and latest stories in the auction world</p>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="check7" checked>
                                    <label for="check7">
                                        <h6 class="title">Auction Calendar</h6>
                                        <p>A look at upcoming auctions, personalized just for you</p>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="check8">
                                    <label for="check8">
                                        <h6 class="title">Auction Reports</h6>
                                        <p>An in-depth look at the results from top-performing auctions Once
                                            per month Auction Reports</p>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" id="check9" checked>
                                    <label for="check9">
                                        <h6 class="title">Weekly Email</h6>
                                        <p>Preview the upcoming week's auctions and see the latest auction news
                                            from around the globe</p>
                                    </label>
                                </li>
                            </ul>
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