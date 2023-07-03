<?php session_start();
    if(isset($_SESSION['user_session'])){
        $uid = $_SESSION['user_session'];
        include_once("../model/db_connect.php");
        $sql = "SELECT * FROM user WHERE id = $uid";
        $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
        $row = $resultset->fetch_assoc();
        $uname = $row['name'];
        $uemail = $row['email'];
    } else {
        echo '<style>.buy-now-area { display: none!important;}</style>';
        echo '<style>.product-bid-area { display: none!important;}</style>';
        echo '<style>.cart-link { display: none!important;}</style>';
        echo '<style>.offer-alert { display: block!important;}</style>';
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
    <link rel="stylesheet" href="./assets/css/product_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <script src="./assets/js/jquery-3.3.1.min.js"></script>
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
    <div class="rehero-section style-2">
        <div class="container">
            <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM stock WHERE id = $id";
                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                $carData = array();
                while($row = $resultset->fetch_assoc()) {
                    $carData = $row;
                    
                    echo "<section class='product-details padding-bottom'>
                        <div class='container'>
                            <div class='product-details-slider-top-wrapper'>
                                <div class='product-details-slider owl-theme owl-carousel' id='sync1'>
                                    <div class='slide-top-item'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['main_img'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-top-item' id='sub_lg_img1'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img1'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-top-item' id='sub_lg_img2'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img2'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-top-item' id='sub_lg_img3'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img3'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-top-item' id='sub_lg_img4'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img4'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-top-item' id='sub_lg_img5'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img5'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-top-item' id='sub_lg_img6'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img6'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-top-item' id='sub_lg_img7'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img7'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-top-item' id='sub_lg_img8'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img8'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-top-item' id='sub_lg_img9'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img9'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-top-item' id='sub_lg_img10'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img10'] ."' alt='product'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='product-details-slider-wrapper'>
                                <div class='product-bottom-slider owl-theme owl-carousel' id='sync2'>
                                    <div class='slide-bottom-item'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['main_img'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-bottom-item' id='sub_sm_img1'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img1'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-bottom-item' id='sub_sm_img2'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img2'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-bottom-item' id='sub_sm_img3'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img3'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-bottom-item' id='sub_sm_img4'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img4'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-bottom-item' id='sub_sm_img5'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img5'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-bottom-item' id='sub_sm_img6'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img6'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-bottom-item' id='sub_sm_img7'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img7'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-bottom-item' id='sub_sm_img8'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img8'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-bottom-item' id='sub_sm_img9'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img9'] ."' alt='product'>
                                        </div>
                                    </div>
                                    <div class='slide-bottom-item' id='sub_sm_img10'>
                                        <div class='slide-inner'>
                                            <img src='../autoAdmin/controller". $row['sub_img10'] ."' alt='product'>
                                        </div>
                                    </div>
                                </div>
                                <span class='det-prev det-nav'>
                                    <i class='fas fa-angle-left'></i>
                                </span>
                                <span class='det-next det-nav active'>
                                    <i class='fas fa-angle-right'></i>
                                </span>
                            </div>
                            <div class='row mt-40-60-80'>
                                <div class='col-lg-8'>
                                    <div class='product-details-content'>
                                        <div class='product-details-header'>
                                            <h2 class='title'>". $row['name'] ."</h2>
                                            <ul>
                                                <li>Listing ID: ". $row['id'] ."</li>
                                                <!-- <li>Item #: 7300-3356862</li> -->
                                            </ul>
                                        </div>
                                        <ul class='price-table mb-30'>
                                            <li class='header'>
                                                <h5 class='current'>Estimation Price</h5>
                                                <h3 class='price'>€". $row['esti_price'] ."</h3>
                                            </li>
                                            <li>
                                                <span class='details'>Buyer's Premium</span>
                                                <h5 class='info'>". $row['premium'] ."%</h5>
                                            </li>
                                            <!-- <li>
                                                <span class='details'>Bid Increment</span>
                                                <h5 class='info'>€50.00</h5>
                                            </li> -->
                                        </ul>
                                        <div class='product-bid-area'>
                                            <form class='product-bid-form'>
                                                <div class='search-icon'>
                                                    <img src='./assets/images/product/search-icon.png' alt='product'>
                                                </div>
                                                <input type='number' id='offer_value' placeholder='Enter you offer amount'>
                                                <button onclick='offerbtn_click()' class='custom-button'>Submit an offer</button>
                                            </form>
                                            <p id='value_alert'><i class='far fa-bell' style='padding-right: 10px;'></i>Please input your offer value.</p>
                                            <p id='equal_value_alert'><i class='far fa-bell' style='padding-right: 10px;'></i>You already offered with same price!</p>
                                            <p id='success_value_alert'><i class='far fa-bell' style='padding-right: 10px;'></i>Your offer successfully sent!</p>
                                        </div>
                                        <p class='offer-alert'><i class='far fa-bell' style='padding-right: 10px;'></i>Please login to submit an offer or buy now.</p>
                                        <p class='bought-alert'><i class='far fa-bell' style='padding-right: 10px;'></i>End of sale!</p>
                                        <div class='buy-now-area'>
                                            <a onclick='buybtn_click()' class='custom-button'>Buy Now: €". $row['buy_price'] ."</a>
                                            <p id='buy_alert'><i class='far fa-bell' style='padding-right: 10px;'></i>You already bought!</p>
                                            <p id='buy_success'><i class='far fa-bell' style='padding-right: 10px;'></i>Buy Now Success!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-lg-4'>
                                    <div class='product-sidebar-area'>
                                        <div class='product-single-sidebar mb-3'>
                                            <h6 class='title'>This Listing Ends in:</h6>
                                            <div class='countdown'>
                                                <div class='bid_counter_index'>". $row['timer'] ."</div>
                                            </div>
                                            <div class='side-counter-area'>
                                                <div class='side-counter-item'>
                                                    <div class='thumb'>
                                                        <img src='./assets/images/product/icon1.png' alt='product'>
                                                    </div>
                                                    <div class='content'>
                                                        <h3 class='count-title'><span class='counter'>". $row['offers'] ."</span></h3>
                                                        <p>Active Offers</p>
                                                    </div>
                                                </div>
                                                <div class='side-counter-item'>
                                                    <div class='thumb'>
                                                        <img src='./assets/images/product/icon2.png' alt='product'>
                                                    </div>
                                                    <div class='content'>
                                                        <h3 class='count-title'><span class='counter'>". $row['watching'] ."</span></h3>
                                                        <p>Watching</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a type='button' href='../autoAdmin/controller". $row['mechanical_pdf'] ."' class='cart-link' target='_blank'><i class='fa fa-file-pdf-o' style='font-size:24px;color:#4497F4;padding-right:10px;'></i>View Mechanical Report</a>
                                        <a href='../autoAdmin/controller". $row['condition_pdf'] ."' class='cart-link' target='_blank'><i class='fa fa-file-pdf-o' style='font-size:24px;color:#4497F4;padding-right:10px;'></i>View Motorcheck Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='product-tab-menu-area mb-40-60 mt-70-100'>
                            <div class='container'>
                                
                            </div>
                        </div>
                        <div class='container'>
                            <div class='tab-content'>
                                <div class='tab-pane fade show active' id='details'>
                                    <div class='tab-details-content'>
                                        <div class='header-area'>
                                            <h3 class='title'>". $row['name'] ."</h3>
                                            <div class='item'>
                                                <table class='product-info-table'>
                                                    <tbody>
                                                        <tr>
                                                            <th>Mileage</th>
                                                            <td>". $row['mileage'] ." miles</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Year</th>
                                                            <td>". $row['years'] ."</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Engine</th>
                                                            <td>". $row['engine'] ."</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Fuel</th>
                                                            <td>". $row['fuel'] ."</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Transmission</th>
                                                            <td>". $row['transmission'] ."</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Color</th>
                                                            <td>". $row['color'] ."</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Grade</th>
                                                            <td>". $row['grade'] ."</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Door</th>
                                                            <td>". $row['doors'] ."</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class='item comment'>
                                                <h5 class='subtitle comment-subtitle'>Vehicle Comment</h5>
                                                <p>". $row['comment'] ."</p>
                                            </div>
                                            <div class='item'>
                                                <h5 class='subtitle'>Sold As Seen </h5>
                                                <p>All our cars are “SOLD AS SEEN” which means that they are sold with all its faults and carries no guarantee whatsoever, and cannot be replaced under any circumstances. But don't let this put you off! All our cars come with a mechanical and conditional report, use these to inform yourself of what a car may need. </p>
                                            </div>
                                            <div class='item'>
                                                <h5 class='subtitle'>Submit An Offer</h5>
                                                <p>Submit an offer are timed sales and will display a countdown timer on the listing. You can place your maximum offer at any time before the timer has finished. Will inform the highest offer when the timer finishes. Alternatively you can Buy Now.</p>
                                            </div>
                                            <div class='item'>
                                                <h5 class='subtitle'>Buy Now</h5>
                                                <p>Buy vehicles instantly at a fixed price day or night. Once you have found the vehicle you would like to buy click on Buy Now. You will need to click on Buy Now again. The vehicle is now yours and be marked as sold on the stock page, it will show on your Dashboard under the Buy Now section. Shortly after purchasing you will receive an email with the invoice attached for payment.</p>
                                            </div>
                                            <div class='item'>
                                                <h5 class='subtitle'>Mechanical Reports </h5>
                                                <p>30+ point mechanical assessments are undertaken on all vehicles by trained inspectors at our remarketing centre. The report gives you a snapshot of a vehicle’s mechanical condition at the point in time when the assessment took place. The vehicles are left to idle for 5 minutes and taken for a 2km test drive to 3rd gear. </p>
                                                <ul style='padding-left: 25px;'>
                                                    <li>- When the inspectors look at the engine no engine covers are removed.</li>
                                                    <li>- The assessment is carried out at ground level, not on a ramp, so oil leaks or defects below the vehicle cannot be seen. </li>
                                                    <li>- The inspectors only connect an engine diagnostic code reader to a vehicle if the engine management light is illuminated. </li>
                                                </ul>
                                            </div>
                                            <div class='item'>
                                                <h5 class='subtitle'>Conditional Reports</h5>
                                                <p>Our condition grading allows you to easily identify a cars condition, as well as helping you understand how condition affects different cars.</p>
                                            </div>
                                            <div class='item'>
                                                <h5 class='subtitle'>Grade 1</h5>
                                                <p>The vehicle may have minor interior and exterior defects i.e. minor scratches or dents and minor replacement parts could also be required.</p>
                                            </div>
                                            <div class='item'>
                                                <h5 class='subtitle'>Grade 2</h5>
                                                <p>The vehicle may require repairs as Grade 1 plus up to 1 major or minor bodyshop repair. The replacement of more significant internal or external trim parts (excluding panels) may also be required</p>
                                            </div>
                                            <div class='item'>
                                                <h5 class='subtitle'>Grade 3</h5>
                                                <p>The vehicle may require repairs as Grade 1 & 2 plus may include up to 5 minor bodyshop repairs, 3 major bodyshop repairs or a combination of major and minor repairs. The vehicle may include a single replacement bumper.</p>
                                            </div>
                                            <div class='item'>
                                                <h5 class='subtitle'>Grade 4</h5>
                                                <p>The vehicle may require repairs as Grade 1, 2 & 3. It may have a combination of major and minor repairs and could include a non-structural replacement panel.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='tab-pane fade show' id='delevery'>
                                    <div class='shipping-wrapper'>
                                        <div class='item'>
                                            <h5 class='title'>shipping</h5>
                                            <div class='table-wrapper'>
                                                <table class='shipping-table'>
                                                    <thead>
                                                        <tr>
                                                            <th>Available delivery methods </th>
                                                            <th>Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Customer Pick-up (within 10 days)</td>
                                                            <td>€0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Standard Shipping (5-7 business days)</td>
                                                            <td>Not Applicable</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Expedited Shipping (2-4 business days)</td>
                                                            <td>Not Applicable</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class='item'>
                                            <h5 class='title'>Notes</h5>
                                            <p>Please carefully review our shipping and returns policy before committing to a bid.
                                            From time to time, and at its sole discretion, Autoguru may change the prevailing fee structure for shipping and handling.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class='tab-pane fade show' id='history'>
                                    <div class='history-wrapper'>
                                        <div class='item'>
                                            <h5 class='title'>Bid History</h5>
                                            <div class='history-table-area'>
                                                <table class='history-table'>
                                                    <thead>
                                                        <tr>
                                                            <th>Bidder</th>
                                                            <th>date</th>
                                                            <th>time</th>
                                                            <th>unit price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td data-history='bidder'>
                                                                <div class='user-info'>
                                                                    <div class='thumb'>
                                                                        <img src='./assets/images/history/01.png' alt='history'>
                                                                    </div>
                                                                    <div class='content'>
                                                                        Moses Watts
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td data-history='date'>06/16/2021</td>
                                                            <td data-history='time'>02:45:25 PM</td>
                                                            <td data-history='unit price'>€900.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td data-history='bidder'>
                                                                <div class='user-info'>
                                                                    <div class='thumb'>
                                                                        <img src='./assets/images/history/02.png' alt='history'>
                                                                    </div>
                                                                    <div class='content'>
                                                                        Pat Powell
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td data-history='date'>06/16/2021</td>
                                                            <td data-history='time'>02:45:25 PM</td>
                                                            <td data-history='unit price'>€900.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td data-history='bidder'>
                                                                <div class='user-info'>
                                                                    <div class='thumb'>
                                                                        <img src='./assets/images/history/03.png' alt='history'>
                                                                    </div>
                                                                    <div class='content'>
                                                                        Jack Rodgers
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td data-history='date'>06/16/2021</td>
                                                            <td data-history='time'>02:45:25 PM</td>
                                                            <td data-history='unit price'>€900.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td data-history='bidder'>
                                                                <div class='user-info'>
                                                                    <div class='thumb'>
                                                                        <img src='./assets/images/history/04.png' alt='history'>
                                                                    </div>
                                                                    <div class='content'>
                                                                        Arlene Paul
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td data-history='date'>06/16/2021</td>
                                                            <td data-history='time'>02:45:25 PM</td>
                                                            <td data-history='unit price'>€900.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td data-history='bidder'>
                                                                <div class='user-info'>
                                                                    <div class='thumb'>
                                                                        <img src='./assets/images/history/05.png' alt='history'>
                                                                    </div>
                                                                    <div class='content'>
                                                                        Marcia Clarke
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td data-history='date'>06/16/2021</td>
                                                            <td data-history='time'>02:45:25 PM</td>
                                                            <td data-history='unit price'>€900.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class='text-center mb-3 mt-4'>
                                                    <a href='#0' class='button-3'>Load More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class='tab-pane fade show' id='questions'>
                                        <h5 class='faq-head-title'>Frequently Asked Questions</h5>
                                        <!-- <div class='faq-wrapper'>
                                            <div class='faq-item'>
                                                <div class='faq-title'>
                                                    <img src='./assets/css/img/faq.png' alt='css'><span class='title'>How to start bidding?</span><span class='right-icon'></span>
                                                </div>
                                                <div class='faq-content'>
                                                    <p>All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.</p>
                                                </div>
                                            </div>
                                            <div class='faq-item'>
                                                <div class='faq-title'>
                                                    <img src='./assets/css/img/faq.png' alt='css'><span class='title'>Security Deposit / Bidding Power </span><span class='right-icon'></span>
                                                </div>
                                                <div class='faq-content'>
                                                    <p>All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.</p>
                                                </div>
                                            </div>
                                            <div class='faq-item'>
                                                <div class='faq-title'>
                                                    <img src='./assets/css/img/faq.png' alt='css'><span class='title'>Delivery time to the destination port </span><span class='right-icon'></span>
                                                </div>
                                                <div class='faq-content'>
                                                    <p>All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.</p>
                                                </div>
                                            </div>
                                            <div class='faq-item'>
                                                <div class='faq-title'>
                                                    <img src='./assets/css/img/faq.png' alt='css'><span class='title'>How to register to bid in an auction?</span><span class='right-icon'></span>
                                                </div>
                                                <div class='faq-content'>
                                                    <p>All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.</p>
                                                </div>
                                            </div>
                                            <div class='faq-item open active'>
                                                <div class='faq-title'>
                                                    <img src='./assets/css/img/faq.png' alt='css'><span class='title'>How will I know if my bid was successful?</span><span class='right-icon'></span>
                                                </div>
                                                <div class='faq-content'>
                                                    <p>All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.</p>
                                                </div>
                                            </div>
                                            <div class='faq-item'>
                                                <div class='faq-title'>
                                                    <img src='./assets/css/img/faq.png' alt='css'><span class='title'>What happens if I bid on the wrong lot?</span><span class='right-icon'></span>
                                                </div>
                                                <div class='faq-content'>
                                                    <p>All successful bidders can confirm their winning bid by checking the “Sbidu”. In addition, all successful bidders will receive an email notifying them of their winning bid after the auction closes.</p>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>";
                    
                    if(empty($row['sub_img1'])){
                        echo '<script>
                            $( "#sub_lg_img1" ).remove();
                            $( "#sub_sm_img1" ).remove();
                        </script>';
                    }
                    if(empty($row['sub_img2'])){
                        echo '<script>
                            $( "#sub_lg_img2" ).remove();
                            $( "#sub_sm_img2" ).remove();
                        </script>';
                    }
                    if(empty($row['sub_img3'])){
                        echo '<script>
                            $( "#sub_lg_img3" ).remove();
                            $( "#sub_sm_img3" ).remove();
                        </script>';
                    }
                    if(empty($row['sub_img4'])){
                        echo '<script>
                            $( "#sub_lg_img4" ).remove();
                            $( "#sub_sm_img4" ).remove();
                        </script>';
                    }
                    if(empty($row['sub_img5'])){
                        echo '<script>
                            $( "#sub_lg_img5" ).remove();
                            $( "#sub_sm_img5" ).remove();
                        </script>';
                    }
                    if(empty($row['sub_img6'])){
                        echo '<script>
                            $( "#sub_lg_img6" ).remove();
                            $( "#sub_sm_img6" ).remove();
                        </script>';
                    }
                    if(empty($row['sub_img7'])){
                        echo '<script>
                            $( "#sub_lg_img7" ).remove();
                            $( "#sub_sm_img7" ).remove();
                        </script>';
                    }
                    if(empty($row['sub_img8'])){
                        echo '<script>
                            $( "#sub_lg_img8" ).remove();
                            $( "#sub_sm_img8" ).remove();
                        </script>';
                    }
                    if(empty($row['sub_img9'])){
                        echo '<script>
                            $( "#sub_lg_img9" ).remove();
                            $( "#sub_sm_img9" ).remove();
                        </script>';
                    }
                    if(empty($row['sub_img10'])){
                        echo '<script>
                            $( "#sub_lg_img10" ).remove();
                            $( "#sub_sm_img10" ).remove();
                        </script>';
                    }

                    if($row['buy_status'] == 'bought'||$row['list_status'] == 'inactive'){
                        echo '<style>.buy-now-area { display: none!important;}</style>';
                        echo '<style>.product-bid-area { display: none!important;}</style>';
                        echo '<style>.cart-link { display: none!important;}</style>';
                        echo '<style>.bought-alert { display: block!important;}</style>';
                    }
                }
            ?>
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="./assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->


    <!--============= Product Details Section Starts Here =============-->
    
    <!--============= Product Details Section Ends Here =============-->


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
    <script src="./assets/js/main.js"></script>
    <script>
            function offerbtn_click() {
                event.preventDefault();
                var uname ='<?php echo $uname; ?>';
                var uemail ='<?php echo $uemail; ?>';
                var cid ='<?php echo $carData['id']; ?>';
                var cname ='<?php echo $carData['name']; ?>';
                var cesti ='<?php echo $carData['esti_price']; ?>';
                var timer ='<?php echo $carData['timer']; ?>';
                var offer = document.getElementById('offer_value').value;
                if(!offer) {
                    document.getElementById('value_alert').style.display = 'block';
                } else {
                    $.post ("../controller/offer.php", 
                        {
                            uname: uname,
                            uemail: uemail,
                            cid: cid,
                            cname: cname,
                            cesti: cesti,
                            timer: timer,
                            offer: offer
                        }, 
                        function(data, status){
                            if(data == "equal"){
                                document.getElementById('value_alert').style.display = 'none';
                                document.getElementById('success_value_alert').style.display = 'none';
                                document.getElementById('equal_value_alert').style.display = 'block';
                            } else if(data == "success") {
                                document.getElementById('value_alert').style.display = 'none';
                                document.getElementById('equal_value_alert').style.display = 'none';
                                // setTimeout(document.getElementById('success_value_alert').style.display = 'block', 3000);
                                document.getElementById('success_value_alert').style.display = 'block';
                                // location.reload();
                            }
                            
                        });
                }
            }
            function buybtn_click() {
                event.preventDefault();
                var uname ='<?php echo $uname; ?>';
                var uemail ='<?php echo $uemail; ?>';
                var cid ='<?php echo $carData['id']; ?>';
                var cname ='<?php echo $carData['name']; ?>';
                var cbuy ='<?php echo $carData['buy_price']; ?>';
                var timer ='<?php echo $carData['timer']; ?>';
                $.post ("../controller/buy_now.php", 
                        {
                            uname: uname,
                            uemail: uemail,
                            cid: cid,
                            cname: cname,
                            timer: timer,
                            cbuy: cbuy
                        }, 
                        function(data, status){
                            if(data == "success") {
                                document.getElementById('buy_alert').style.display = 'none';
                                document.getElementById('buy_success').style.display = 'block';
                                // location.reload();
                            } else if(data == "equal"){
                                document.getElementById('buy_success').style.display = 'none';
                                document.getElementById('buy_alert').style.display = 'block';
                            } 
                        });
            }
    </script>
</body>

</html>