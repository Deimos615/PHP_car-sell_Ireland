<?php 
include('inc/header.php');
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/new_car.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <title>Admin Panel</title>
<?php include('inc/container.php');?>
<!-- </head>

<body id="body">
    <div class="container"> -->
        <div class="row" style="margin-bottom: 30px">
            <div class="col-12 justify-content-center text-center">
                <!-- REGISTER AREA  -->
                <form action="../controller/new_car_upload.php" method="post" class="form" id="register-form" enctype="multipart/form-data">
                    
                    <input type="hidden" name="status" id="status" value="register">
                    <h2 style="font-weight: 800; text-decoration: underline; color: tomato;">New Car Upload</h2>
                    <div class="errorLogs"></div>
                    <div class="form-group d-flex flex-wrap">
                        <label class="form-group col-md-3 col-sm-12">
                            <p class="upload-title">- Main Image <i class="fa fa-image"></i></p>
                            <input type="file" name="main_img" id="main_img" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" onchange="previewFile1()" required>
                            <img class="main-img" width="100%" alt="Image preview..." style="font-weight: 400; color: grey;">
                        </label>
                        <div class="form-group col-md-9 col-sm-12 d-flex">
                            <div class="col-lg-6">
                                <input type="text" name="carname" id="carname" class="form-control" placeholder="Car Name" required>
                                <input type="number" name="esti_price" id="esti_price" class="form-control" placeholder="Estimated Price" required>
                                <input type="number" name="buy_price" id="buy_price" class="form-control" placeholder="Buy Now Price" required>
                                <input type="text" name="timer" id="timer" class="form-control" placeholder="Countdown Timer: Type: 2022-06-30" required>                        
                                <input type="number" name="premium" id="premium" class="form-control" placeholder="Premium" required>
                                <div class="input-group">
                                    <input type="number" name="offers" id="offers" class="form-control" placeholder="Active Offers" required>
                                    <input type="number" name="watching" id="watching" class="form-control" placeholder="Watching" required>
                                </div>
                                <select name="grade" id="grade" class="form-control" required>
                                    <option value="" disabled selected>Select the grade</option>
                                    <option value="Grade 1">Grade 1</option>
                                    <option value="Grade 2">Grade 2</option>
                                    <option value="Grade 3">Grade 3</option>
                                    <option value="Grade 4">Grade 4</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <input type="number" name="years" id="years" class="form-control" placeholder="Year" required>
                                <input type="text" name="color" id="color" class="form-control" placeholder="Color" required>
                                <input type="number" name="doors" id="doors" class="form-control" placeholder="Doors" required>
                                <input type="text" name="fuel" id="fuel" class="form-control" placeholder="Fuel" required>                        
                                <input type="text" name="transmission" id="transmission" class="form-control" placeholder="Transmission" required>
                                <input type="text" name="engine" id="engine" class="form-control" placeholder="Engine" required>
                                <input type="number" name="mileage" id="mileage" class="form-control" placeholder="Mileage" required>
                            </div>
                        </div>
                        <p class="col-lg-12 upload-title">- Report PDF</p>
                        <div class="form-group col-12 d-flex justify-content-between">
                            <div class="col-lg-6 pdf-label">
                                - Mechanical Report
                                <input type="file" name="mechanical_pdf" id="mechanical_pdf" class="form-control" accept="doc,docx,pdf" required>
                            </div>
                            <div class="col-lg-6 pdf-label">
                                - Condition Report
                                <input type="file" name="condition_pdf" id="condition_pdf" class="form-control" accept="doc,docx,pdf" required>
                            </div>
                        </div>
                        <p class="col-lg-12 upload-title" style="margin-top: 10px;">- Sub Images</p>
                        <div class="form-group col-md-12 sub-img-row">
                            <label class="form-group col-md-2 col-sm-12 col-xs-12 preview-label">
                                <i class="fa fa-image"></i>Sub Image1<input type="file" name="sub_img1" id="sub_img1" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" onchange="previewFile2()">
                                <img class="sub-img1" width="100%" alt="Image preview...">
                            </label>
                            <label class="from-group col-md-2 col-sm-12 col-xs-12 preview-label">
                                <i class="fa fa-image"></i>Sub Image2 <input type="file" name="sub_img2" id="sub_img2" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" onchange="previewFile3()">
                                <img class="sub-img2" width="100%" alt="Image preview...">
                            </label>
                            <label class="form-group col-md-2 col-sm-12 preview-label">
                                <i class="fa fa-image"></i>Sub Image3<input type="file" name="sub_img3" id="sub_img3" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" onchange="previewFile4()">
                                <img class="sub-img3" width="100%" alt="Image preview...">
                            </label>
                            <label class="from-group col-md-2 col-sm-12 preview-label">
                                <i class="fa fa-image"></i>Sub Image4<input type="file" name="sub_img4" id="sub_img4" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" onchange="previewFile5()">
                                <img class="sub-img4" width="100%" alt="Image preview...">
                            </label>
                            <label class="form-group col-md-2 col-sm-12 col-xs-12 preview-label">
                                <i class="fa fa-image"></i>Sub Image5<input type="file" name="sub_img5" id="sub_img5" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" onchange="previewFile6()">
                                <img class="sub-img5" width="100%" alt="Image preview...">
                            </label>
                        </div>
                        <div class="form-group col-md-12 sub-img-row">
                            <label class="from-group col-md-2 col-sm-12 preview-label preview-label">
                                <i class="fa fa-image"></i>Sub Image6<input type="file" name="sub_img6" id="sub_img6" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" onchange="previewFile7()">
                                <img class="sub-img6" width="100%" alt="Image preview...">
                            </label>
                            <label class="form-group col-md-2 col-sm-12 col-xs-12 preview-label">
                                <i class="fa fa-image"></i>Sub Image7<input type="file" name="sub_img7" id="sub_img7" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" onchange="previewFile8()">
                                <img class="sub-img7" width="100%" alt="Image preview...">
                            </label>
                            <label class="from-group col-md-2 col-sm-12 preview-label">
                                <i class="fa fa-image"></i>Sub Image8<input type="file" name="sub_img8" id="sub_img8" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" onchange="previewFile9()">
                                <img class="sub-img8" width="100%" alt="Image preview...">
                            </label>
                            <label class="form-group col-md-2 col-sm-12 col-xs-12 preview-label">
                                <i class="fa fa-image"></i>Sub Image9<input type="file" name="sub_img9" id="sub_img9" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" onchange="previewFile10()">
                                <img class="sub-img9" width="100%" alt="Image preview...">
                            </label>
                            <label class="from-group col-md-2 col-sm-12 preview-label">
                                <i class="fa fa-image"></i>Sub Image10<input type="file" name="sub_img10" id="sub_img10" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" onchange="previewFile11()">
                                <img class="sub-img10" width="100%" alt="Image preview...">
                            </label>
                        </div>    
                        <p class="col-lg-12 upload-title" style="margin-top: 10px;">- Vehicle Comment</p>
                        <textarea id="car_comment" name="car_comment" rows="4" required></textarea>
                    </div>
                    <div id="error"></div>           
                    <button type="submit" class="register btn-block btn btn-primary" style="width: 350px; margin: 0 auto;" id="register">Submit</button>
                    
                </form>
            </div>
            </row>
        </div>
    </div>

    <script src="../../view/assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/car_preview.js"></script>
    <script src="../../view/assets/js/validation.min.js"></script>
    <!-- <script src="../assets/js/new_car_validation.js"></script> -->
    <!-- <script src="../assets/js/new_car_upload.js"></script> -->
</body>

</html>