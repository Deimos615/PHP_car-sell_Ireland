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
    <link rel="stylesheet" href="./assets/css/product_custom.css">
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
    <div class="hero-section stock-hero-section style-2">
        <div class="container">
        </div>
        <div class="bg_img hero-bg bottom_center" data-background="./assets/images/banner/hero-bg.png"></div>
    </div>
    <!--============= Hero Section Ends Here =============-->

    <!--============= Product Auction Section Starts Here =============-->
    <div class="product-auction padding-bottom">
        <div class="container">
            <!-- <div class="product-header mb-40">
                <div class="product-header-item">
                    <div class="item">Sort By : </div>
                    <select name="sort-by" class="select-bar">
                        <option value="all">All</option>
                        <option value="name">Name</option>
                        <option value="date">Date</option>
                        <option value="type">Type</option>
                        <option value="car">Car</option>
                    </select>
                </div>
                <div class="product-header-item">
                    <div class="item">Show : </div>
                    <select name="sort-by" class="select-bar">
                        <option value="09">09</option>
                        <option value="21">21</option>
                        <option value="30">30</option>
                        <option value="39">39</option>
                        <option value="60">60</option>
                    </select>
                </div>
                <form class="product-search ml-auto">
                    <input type="text" placeholder="Item Name">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div> -->
            <div class="row mb-30-none justify-content-center">
                <?php
                    include_once("../model/db_connect.php");
                    // variable to store number of rows per page
                    $limit = 9;    

                    // update the active page number
                    if (isset($_GET["page"])) {    
                        $page_number  = $_GET["page"];    
                    }    
                    else {    
                        $page_number=1;    
                    }     

                    // get the initial page number
                    $initial_page = ($page_number-1) * $limit;       

                    // get data of selected rows per page 
                    $sql = "SELECT id, name, buy_price, main_img, timer, buy_status FROM stock  WHERE live_status IS NULL AND list_status='active' LIMIT $initial_page, $limit ";
                    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                    while($row = $resultset->fetch_assoc()) {
                        echo "<div class='col-sm-10 col-md-6 col-lg-4'>
                            <div class='auction-item-2'>
                                <div class='auction-thumb'>
                                    <img class='sold-img' id='sold_img" .$row['id'] . "' src='./assets/images/custom/sold.png' style='display:none' alt='sold image'>
                                    <img src='../autoAdmin/controller". $row['main_img'] ."' alt='car'>
                                </div>
                                <div class='auction-content'>
                                    <h6 class='title'>
                                        <a href='#0'>". $row['name'] ."</a>
                                    </h6>
                                    <div class='bid-area'>
                                        <div class='bid-amount'>
                                            <div class='countdown'>
                                                <div class='bid_counter_index'>". $row['timer'] ."</div>
                                            </div>
                                        </div>
                                        <div class='bid-amount'>
                                            <div class='icon'>
                                                <img src='./assets/images/money-bag.png' class='money-bag' style='width:100%'></img>
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
                        if($row['buy_status'] == 'bought') {
                            echo "<script>
                                    document.getElementById('sold_img". $row['id']. "').style.display = 'block';
                                    document.getElementById('amount". $row['id'] ."').style.display = 'none';
                                </script>";
                        }
                    } 
                        
                ?>
            </div>
            <div class="items">    
                <?php  
                    $getQuery = "SELECT COUNT(*) FROM stock WHERE live_status IS NULL AND list_status='active' ";     
                    $result = mysqli_query($conn, $getQuery);     
                    $row = mysqli_fetch_row($result);     
                    $total_rows = $row[0];              
                    echo "</br>";            

                    // get the required number of pages
                    $total_pages = ceil($total_rows / $limit);     
                    $pageURL = "";             

                    if($page_number>=2){   
                        echo "<a href='product.php?page=".($page_number-1)."'><i class='flaticon-left-arrow'></i></a>";   
                    }                          

                    for ($i=1; $i<=$total_pages; $i++) {   
                    if ($i == $page_number) {   
                        $pageURL .= "<a class = 'active' href='product.php?page="  
                                                            .$i."'>".$i." </a>";   
                    }               
                    else  {   
                        $pageURL .= "<a href='product.php?page=".$i."'>   
                                                            ".$i." </a>";     
                    }   
                    };     
                    echo $pageURL;    
                    if($page_number<$total_pages){   
                        echo "<a href='product.php?page=".($page_number+1)."'><i class='flaticon-right-arrow'></i></a>";   
                    }     
                ?>    
            </div>
            <div class="inline">   
                <input id="page" class="page-input" type="number" min="1" max="<?php echo $total_pages?>"   
                placeholder="<?php echo $page_number."/".$total_pages; ?>" required>   
                <button class="page-go-btn" onClick="go2Page();">Go</button>   
            </div>      
        </div>
    </div>
    <!--============= Product Auction Section Ends Here =============-->


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
        function go2Page()   
        {   
            var page = document.getElementById("page").value;   
            page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
            window.location.href = 'product.php?page='+page;   
        } 
        function detailbtn_click (e) {
            window.location.href = "product-details.php?id=" + e;
        }  
    </script>  
</body>

</html>