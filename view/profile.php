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
    <link rel="stylesheet" href="./assets/css/custom.css">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

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
                    <div class="row">
                        <div class="col-12">
                            <div class="dash-pro-item mb-30 dashboard-widget">
                                <!-- <div id="error">
                                </div>
                                <div id="success">
                                </div> -->
                                <div class="header">
                                    <h4 class="title">Personal Details</h4>
                                    <span class="edit" data-toggle="modal" data-target="#detailModal"><i class="flaticon-edit"></i> Edit</span>
                                </div>
                                <?php
                                    $sql = "SELECT * FROM user WHERE email = '". $row['email'] ."' ";
                                    $result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                                    $row = mysqli_fetch_assoc($result);
                                    echo "<ul class='dash-pro-body'>
                                        <li class='d-flex justify-content-around'>
                                            <div class='col-5 info-name'>Name</div>
                                            <div class='col-7 info-value'>". $row['name'] ."</div>
                                        </li>
                                        <li class='d-flex justify-content-around'>
                                            <div class='col-5 info-name'>Dealership Name</div>
                                            <div class='col-7 info-value'>". $row['dealership'] ."</div>
                                        </li>
                                        <li class='d-flex justify-content-around'>
                                            <div class='col-5 info-name'>Website Link</div>
                                            <div class='col-7 info-value'>". $row['link'] ."</div>
                                        </li>
                                        <li class='d-flex justify-content-around'>
                                            <div class='col-5 info-name'>Email</div>
                                            <div class='col-7 info-value'>". $row['email'] ."</div>
                                        </li>
                                        <li class='d-flex justify-content-around'>
                                            <div class='col-5 info-name'>Vat Registered</div>
                                            <div class='col-7 info-value'>". $row['vat'] ."</div>
                                        </li>
                                        <li class='d-flex justify-content-around'>
                                            <div class='col-5 info-name'>Garage Code</div>
                                            <div class='col-7 info-value'>". $row['garage'] ."</div>
                                        </li>
                                        <li class='d-flex justify-content-around'>
                                            <div class='col-5 info-name'>What Bank Used</div>
                                            <div class='col-7 info-value'>". $row['bank'] ."</div>
                                        </li>
                                    </ul>";
                                ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="dash-pro-item mb-30 dashboard-widget">
                                <div class="header">
                                    <h4 class="title">Password</h4>
                                    <span class="edit" data-toggle="modal" data-target="#pwdModal"><i class="flaticon-edit"></i> Edit</span>
                                </div>
                                <ul class='dash-pro-body'>
                                    <li class='d-flex justify-content-around'>
                                        <div class='col-5 info-name'>Password</div>
                                        <div class='col-7 info-value'>xxxxxxxxxxxxxxxx</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- The Detail Modal -->
                <div class="modal fade profile-form" id="detailModal">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">User Profile Update</h4>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form id="profile_form">
                                    <div class="modal-form form-group">
                                        <label class="col-4 m-label" for="uname">Name</label>
                                        <input type="text" class="col-8 form-control" name="uname" id="uname" placeholder="Name" value="<?php echo $row['name']; ?>">
                                    </div>
                                    <div class="modal-form form-group">
                                        <label class="col-4 m-label" for="dealership">Dealership Name</label>
                                        <input type="text" class="col-8 form-control" name="dealership" id="dealership" placeholder="Dealership Name" value="<?php echo $row['dealership']; ?>">
                                    </div>
                                    <div class="modal-form form-group">
                                        <label class="col-4 m-label" for="link">Website Link</label>
                                        <input type="text" class="col-8 form-control" name="link" id="link" placeholder="Website Link" value="<?php echo $row['link']; ?>">
                                    </div>
                                    <div class="modal-form form-group" style="display:none">
                                        <label class="col-4 m-label" for="uemail">Email</label>
                                        <input type="email" class="col-8 form-control" name="uemail" id="uemail" placeholder="Email" value="<?php echo $row['email']; ?>">
                                    </div>
                                    <div class="modal-form form-group">
                                        <label class="col-4 m-label" for="vat">Vat Registered</label>
                                        <input type="text" class="col-8 form-control" name="vat" id="vat" placeholder="Vat Registered" value="<?php echo $row['vat']; ?>">
                                    </div>
                                    <div class="modal-form form-group">
                                        <label class="col-4 m-label" for="garage">Garage Code</label>
                                        <input type="text" class="col-8 form-control" name="garage" id="garage" placeholder="Garage Code" value="<?php echo $row['garage']; ?>">
                                    </div>
                                    <div class="modal-form form-group">
                                        <label class="col-4 m-label" for="bank">What Bank Used</label>
                                        <input type="text" class="col-8 form-control" name="bank" id="bank" placeholder="What Bank Used" value="<?php echo $row['bank']; ?>">
                                    </div>
                                    <div id="error">
                                    </div>
                                    <div id="success">
                                    </div>
                                    <div class="m-btns">
                                        <button type="submit" name="profile_btn" class="col-5 btn btn-primary">Update</button>
                                        <button type="button" class="col-5 btn btn-danger" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- The Password Modal -->
                <div class="modal fade" id="pwdModal">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">User Password Update</h4>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form id="pwd_form">
                                    <div class="modal-form form-group">
                                        <label class="col-4 m-label" for="password">Current Password</label>
                                        <input type="password" class="col-8 form-control" name="c_password" id="c_password" placeholder="Password">
                                    </div>
                                    <div class="modal-form form-group">
                                        <label class="col-4 m-label" for="password">New Password</label>
                                        <input type="password" class="col-8 form-control" name="n_password" id="n_password" placeholder="New Password">
                                    </div>
                                    <div class="modal-form form-group">
                                        <label class="col-4 m-label" for="password">Confirm Password</label>
                                        <input type="password" class="col-8 form-control" name="re_password" id="re_password" placeholder="Confirm Password">
                                    </div>
                                    <div class="modal-form form-group" style="display:none">
                                        <label class="col-4 m-label" for="uemail">Email</label>
                                        <input type="email" class="col-8 form-control" name="uemail" id="uemail" placeholder="Email" value="<?php echo $row['email']; ?>">
                                    </div>
                                    <div id="p_error">
                                    </div>
                                    <div id="p_success">
                                    </div>
                                    <div class="m-btns">
                                        <button type="submit" name="pwd_btn" class="col-5 btn btn-primary">Update</button>
                                        <button type="button" class="col-5 btn btn-danger" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
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
    <script src="./assets/js/validation.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/profile_detail.js"></script>
    <script src="./assets/js/profile_pwd.js"></script>
</body>

</html>