<?php 
 require '../../model/db_connect.php';

    $carname = $_REQUEST['carname'];
    $esti_price = $_REQUEST['esti_price'];
    $buy_price = $_REQUEST['buy_price'];
    $timer = $_REQUEST['timer'];
    $premium = $_REQUEST['premium'];
    $offers = $_REQUEST['offers'];
    $watching = $_REQUEST['watching'];
    $grade = $_REQUEST['grade'];
    $years = $_REQUEST['years'];
    $color = $_REQUEST['color'];
    $doors = $_REQUEST['doors'];
    $fuel = $_REQUEST['fuel'];
    $transmission = $_REQUEST['transmission'];
    $engine = $_REQUEST['engine'];
    $mileage = $_REQUEST['mileage'];
    $car_comment = $_REQUEST['car_comment'];
    $main_img = "";
    $sub_img1 = "";
    $sub_img2 = "";
    $sub_img3 = "";
    $sub_img4 = "";
    $sub_img5 = "";
    $sub_img6 = "";
    $sub_img7 = "";
    $sub_img8 = "";
    $sub_img8 = "";
    $sub_img9 = "";
    $sub_img10 = "";
    $mechanical_pdf = "";
    $condition_pdf = "";
    
    // $sqlQuery = "SELECT name FROM stock";
    // $resultset = mysqli_query($conn, $sqlQuery) or exit("database error:". mysqli_error($conn));
    // while($row = $resultset->fetch_assoc()) {
    //     if($row['name'] == $carname) {
    //         echo "<script>alert('The car have already uploaded or used the same car name'); window.location.href='../view/new_car.php'</script>";
    //         exit();
    //     }
    // }

    // Uploading main image
    if (is_uploaded_file($_FILES['main_img']['tmp_name'])) 
    { 
        //First, Validate the file name
        if(empty($_FILES['main_img']['name']))
        {
            echo "<script type='text/javascript'>alert('File name is empty!'); history.back();</script>";
            exit;
        }

        $upload_file_mainImg = $_FILES['main_img']['name'];
        $extension = substr($upload_file_mainImg, strlen($upload_file_mainImg) - 4, 4);
        
        //replace any non-alpha-numeric cracters in th file name
        $upload_file_mainImg = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_mainImg);

        //set a limit to the file upload size
        if ($_FILES['main_img']['size'] > 10000000) 
        {
            echo "<script type='text/javascript'>alert('The main-image is too big!'); history.back();</script>";
            exit;        
        }

        //Save the file
        $file_name = md5($upload_file_mainImg.rand()).$extension;
        $dest=__DIR__.'/uploads/'.$file_name;
        if (move_uploaded_file($_FILES['main_img']['tmp_name'], $dest)) 
        {
            $main_img = '/uploads/'.$file_name;
        }
    }

    //Uploading sub-image(1)
    if (is_uploaded_file($_FILES['sub_img1']['tmp_name'])) 
    { 
        //First, Validate the file name
        if(empty($_FILES['sub_img1']['name']))
        {
            echo "<script type='text/javascript'>alert('File name is empty!'); history.back();</script>";
            exit;
        }

        $upload_file_subImg1 = $_FILES['sub_img1']['name'];
        $extension = substr($upload_file_subImg1, strlen($upload_file_subImg1) - 4, 4);

        //replace any non-alpha-numeric cracters in th file name
        $upload_file_subImg1 = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_subImg1);

        //set a limit to the file upload size
        if ($_FILES['sub_img1']['size'] > 10000000) 
        {
            echo "<script type='text/javascript'>alert('The first sub-image is too big!'); history.back();</script>";
            exit;        
        }

        //Save the file
        $file_name = md5($upload_file_subImg1.rand()).$extension;
        $dest=__DIR__.'/uploads/'.$file_name;
        if (move_uploaded_file($_FILES['sub_img1']['tmp_name'], $dest)) 
        {
            $sub_img1 = '/uploads/'.$file_name;
        }
    }

    //uploading sub-image(2)
    if (is_uploaded_file($_FILES['sub_img2']['tmp_name'])) 
    { 
        //First, Validate the file name
        if(empty($_FILES['sub_img2']['name']))
        {
            echo "<script type='text/javascript'>alert('File name is empty!'); history.back();</script>";
            exit;
        }

        $upload_file_subImg2 = $_FILES['sub_img2']['name'];
        $extension = substr($upload_file_subImg2, strlen($upload_file_subImg2) - 4, 4);

        //replace any non-alpha-numeric cracters in th file name
        $upload_file_subImg2 = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_subImg2);

        //set a limit to the file upload size
        if ($_FILES['sub_img2']['size'] > 10000000) 
        {
            echo "<script type='text/javascript'>alert('The second sub-image is too big!'); history.back();</script>";
            exit;        
        }

        //Save the file
        $file_name = md5($upload_file_subImg2.rand()).$extension;
        $dest=__DIR__.'/uploads/'.$file_name;
        if (move_uploaded_file($_FILES['sub_img2']['tmp_name'], $dest)) 
        {
            $sub_img2 = '/uploads/'.$file_name;
        }
    }

    //uploading sub-image(3)
    if (is_uploaded_file($_FILES['sub_img3']['tmp_name'])) 
    { 
        //First, Validate the file name
        if(empty($_FILES['sub_img3']['name']))
        {
            echo "<script type='text/javascript'>alert('File name is empty!'); history.back();</script>";
            exit;
        }

        $upload_file_subImg3 = $_FILES['sub_img3']['name'];
        $extension = substr($upload_file_subImg2, strlen($upload_file_subImg3) - 4, 4);

        //replace any non-alpha-numeric cracters in th file name
        $upload_file_subImg3 = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_subImg3);

        //set a limit to the file upload size
        if ($_FILES['sub_img3']['size'] > 10000000) 
        {
            echo "<script type='text/javascript'>alert('The third sub-image is too big!'); history.back();</script>";
            exit;        
        }

        //Save the file
        $file_name = md5($upload_file_subImg3.rand()).$extension;
        $dest=__DIR__.'/uploads/'.$file_name;
        if (move_uploaded_file($_FILES['sub_img3']['tmp_name'], $dest)) 
        {
            $sub_img3 = '/uploads/'.$file_name;
        }
    }

    //uploading sub-image(4)
    if (is_uploaded_file($_FILES['sub_img4']['tmp_name'])) 
    { 
        //First, Validate the file name
        if(empty($_FILES['sub_img4']['name']))
        {
            echo "<script type='text/javascript'>alert('File name is empty!'); history.back();</script>";
            exit;
        }

        $upload_file_subImg4 = $_FILES['sub_img4']['name'];
        $extension = substr($upload_file_subImg4, strlen($upload_file_subImg4) - 4, 4);

        //replace any non-alpha-numeric cracters in th file name
        $upload_file_subImg4 = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_subImg4);

        //set a limit to the file upload size
        if ($_FILES['sub_img4']['size'] > 10000000) 
        {
            echo "<script type='text/javascript'>alert('The fourth sub-image is too big!'); history.back();</script>";
            exit;        
        }

        //Save the file
        $file_name = md5($upload_file_subImg4.rand()).$extension;
        $dest=__DIR__.'/uploads/'.$file_name;
        if (move_uploaded_file($_FILES['sub_img4']['tmp_name'], $dest)) 
        {
            $sub_img4 = '/uploads/'.$file_name;
        }
    }

    //uploading sub-image(5)
    if (is_uploaded_file($_FILES['sub_img5']['tmp_name'])) 
    { 
        //First, Validate the file name
        if(empty($_FILES['sub_img5']['name']))
        {
            echo "<script type='text/javascript'>alert('File name is empty!'); history.back();</script>";
            exit;
        }

        $upload_file_subImg5 = $_FILES['sub_img5']['name'];
        $extension = substr($upload_file_subImg5, strlen($upload_file_subImg5) - 4, 4);

        //replace any non-alpha-numeric cracters in th file name
        $upload_file_subImg5 = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_subImg5);

        //set a limit to the file upload size
        if ($_FILES['sub_img5']['size'] > 10000000) 
        {
            echo "<script type='text/javascript'>alert('The fifth sub-image is too big!'); history.back();</script>";
            exit;        
        }

        //Save the file
        $file_name = md5($upload_file_subImg5.rand()).$extension;
        $dest=__DIR__.'/uploads/'.$file_name;
        if (move_uploaded_file($_FILES['sub_img5']['tmp_name'], $dest)) 
        {
            $sub_img5 = '/uploads/'.$file_name;
        }
    }

    //uploading sub-image(6)
    if (is_uploaded_file($_FILES['sub_img6']['tmp_name'])) 
    { 
        //First, Validate the file name
        if(empty($_FILES['sub_img6']['name']))
        {
            echo "<script type='text/javascript'>alert('File name is empty!'); history.back();</script>";
            exit;
        }

        $upload_file_subImg6 = $_FILES['sub_img6']['name'];
        $extension = substr($upload_file_subImg6, strlen($upload_file_subImg6) - 4, 4);

        //replace any non-alpha-numeric cracters in th file name
        $upload_file_subImg6 = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_subImg6);

        //set a limit to the file upload size
        if ($_FILES['sub_img6']['size'] > 10000000) 
        {
            echo "<script type='text/javascript'>alert('The sixth sub-image is too big!'); history.back();</script>";
            exit;        
        }

        //Save the file
        $file_name = md5($upload_file_subImg6.rand()).$extension;
        $dest=__DIR__.'/uploads/'.$file_name;
        if (move_uploaded_file($_FILES['sub_img6']['tmp_name'], $dest)) 
        {
            $sub_img6 = '/uploads/'.$file_name;
        }
    }

    //uploading sub-image(7)
    if (is_uploaded_file($_FILES['sub_img7']['tmp_name'])) 
    { 
        //First, Validate the file name
        if(empty($_FILES['sub_img7']['name']))
        {
            echo "<script type='text/javascript'>alert('File name is empty!'); history.back();</script>";
            exit;
        }

        $upload_file_subImg7 = $_FILES['sub_img7']['name'];
        $extension = substr($upload_file_subImg7, strlen($upload_file_subImg7) - 4, 4);

        //replace any non-alpha-numeric cracters in th file name
        $upload_file_subImg7 = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_subImg7);

        //set a limit to the file upload size
        if ($_FILES['sub_img7']['size'] > 10000000) 
        {
            echo "<script type='text/javascript'>alert('The seventh sub-image is too big!'); history.back();</script>";
            exit;        
        }

        //Save the file
        $file_name = md5($upload_file_subImg7.rand()).$extension;
        $dest=__DIR__.'/uploads/'.$file_name;
        if (move_uploaded_file($_FILES['sub_img7']['tmp_name'], $dest)) 
        {
            $sub_img7 = '/uploads/'.$file_name;
        }
    }

    //uploading sub-image(8)
    if (is_uploaded_file($_FILES['sub_img8']['tmp_name'])) 
    { 
        //First, Validate the file name
        if(empty($_FILES['sub_img8']['name']))
        {
            echo "<script type='text/javascript'>alert('File name is empty!'); history.back();</script>";
            exit;
        }

        $upload_file_subImg8 = $_FILES['sub_img8']['name'];
        $extension = substr($upload_file_subImg8, strlen($upload_file_subImg8) - 4, 4);

        //replace any non-alpha-numeric cracters in th file name
        $upload_file_subImg8 = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_subImg8);

        //set a limit to the file upload size
        if ($_FILES['sub_img8']['size'] > 10000000) 
        {
            echo "<script type='text/javascript'>alert('The eighth sub-image is too big!'); history.back();</script>";
            exit;        
        }

        //Save the file
        $file_name = md5($upload_file_subImg8.rand()).$extension;
        $dest=__DIR__.'/uploads/'.$file_name;
        if (move_uploaded_file($_FILES['sub_img8']['tmp_name'], $dest)) 
        {
            $sub_img8 = '/uploads/'.$file_name;
        }
    }

    //uploading sub-image(9)
    if (is_uploaded_file($_FILES['sub_img9']['tmp_name'])) 
    { 
        //First, Validate the file name
        if(empty($_FILES['sub_img9']['name']))
        {
            echo "<script type='text/javascript'>alert('File name is empty!'); history.back();</script>";
            exit;
        }

        $upload_file_subImg9 = $_FILES['sub_img9']['name'];
        $extension = substr($upload_file_subImg9, strlen($upload_file_subImg9) - 4, 4);

        //replace any non-alpha-numeric cracters in th file name
        $upload_file_subImg9 = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_subImg9);

        //set a limit to the file upload size
        if ($_FILES['sub_img9']['size'] > 10000000) 
        {
            echo "<script type='text/javascript'>alert('The ninth sub-image is too big!'); history.back();</script>";
            exit;        
        }

        //Save the file
        $file_name = md5($upload_file_subImg9.rand()).$extension;
        $dest=__DIR__.'/uploads/'.$file_name;
        if (move_uploaded_file($_FILES['sub_img9']['tmp_name'], $dest)) 
        {
            $sub_img9 = '/uploads/'.$file_name;
        }
    }

    //uploading sub-image(10)
    if (is_uploaded_file($_FILES['sub_img10']['tmp_name'])) 
    { 
        //First, Validate the file name
        if(empty($_FILES['sub_img10']['name']))
        {
            echo "<script type='text/javascript'>alert('File name is empty!'); history.back();</script>";
            exit;
        }

        $upload_file_subImg10 = $_FILES['sub_img10']['name'];
        $extension = substr($upload_file_subImg10, strlen($upload_file_subImg10) - 4, 4);

        //replace any non-alpha-numeric cracters in th file name
        $upload_file_subImg10 = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_subImg10);

        //set a limit to the file upload size
        if ($_FILES['sub_img10']['size'] > 10000000) 
        {
            echo "<script type='text/javascript'>alert('The tenth sub-image is too big!'); history.back();</script>";
            exit;        
        }

        //Save the file
        $file_name = md5($upload_file_subImg10.rand()).$extension;
        $dest=__DIR__.'/uploads/'.$file_name;
        if (move_uploaded_file($_FILES['sub_img10']['tmp_name'], $dest)) 
        {
            $sub_img10 = '/uploads/'.$file_name;
        }
    }

    //uploading mechanical report document, pdf file
    if (is_uploaded_file($_FILES['mechanical_pdf']['tmp_name'])) 
    { 
        //First, Validate the file name
        if(empty($_FILES['mechanical_pdf']['name']))
        {
            echo "<script type='text/javascript'>alert('File name is empty!'); history.back();</script>";
            exit;
        }

        $upload_file_mechanic = $_FILES['mechanical_pdf']['name'];
        $extension = substr($upload_file_mechanic, strlen($upload_file_mechanic) - 4, 4);

        //replace any non-alpha-numeric cracters in th file name
        $upload_file_mechanic = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_mechanic);

        //set a limit to the file upload size
        if ($_FILES['mechanical_pdf']['size'] > 50000000) 
        {
            echo "<script type='text/javascript'>alert('The mechanical report file is too big!'); history.back();</script>";
            exit;        
        }

        //Save the file
        $file_name = md5($upload_file_mechanic.rand()).$extension;
        $dest=__DIR__.'/reports/'.$file_name;
        if (move_uploaded_file($_FILES['mechanical_pdf']['tmp_name'], $dest)) 
        {
            $mechanical_pdf = '/reports/'.$file_name;
        }
    }

    //uploading condition report document, pdf file
    if (is_uploaded_file($_FILES['condition_pdf']['tmp_name'])) 
    { 
        //First, Validate the file name
        if(empty($_FILES['condition_pdf']['name']))
        {
            echo "<script type='text/javascript'>alert('File name is empty!'); history.back();</script>";
            exit;
        }

        $upload_file_condition = $_FILES['condition_pdf']['name'];
        $extension = substr($upload_file_condition, strlen($upload_file_condition) - 4, 4);

        //replace any non-alpha-numeric cracters in th file name
        $upload_file_condition = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_condition);

        //set a limit to the file upload size
        if ($_FILES['condition_pdf']['size'] > 50000000) 
        {
            echo "<script type='text/javascript'>alert('The condition report file is too big!'); history.back();</script>";
            exit;        
        }

        //Save the file
        $file_name = md5($upload_file_condition.rand()).$extension;
        $dest=__DIR__.'/reports/'.$file_name;
        if (move_uploaded_file($_FILES['condition_pdf']['tmp_name'], $dest)) 
        {
            $condition_pdf = '/reports/'.$file_name;
        }
    }

    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO stock ( name, esti_price, buy_price, timer, premium, offers, watching, grade, years, color, doors, fuel, transmission, engine, mileage, main_img, sub_img1, sub_img2, sub_img3, sub_img4, sub_img5, sub_img6, sub_img7, sub_img8, sub_img9, sub_img10, mechanical_pdf, condition_pdf, uploaded_at, list_status, comment ) 
                        VALUES('$carname', '$esti_price', '$buy_price', '$timer', '$premium', '$offers', '$watching', '$grade', '$years', '$color', '$doors', '$fuel', '$transmission', '$engine', '$mileage','$main_img', '$sub_img1', '$sub_img2', '$sub_img3', '$sub_img4', '$sub_img5', '$sub_img6', '$sub_img7', '$sub_img8', '$sub_img9', '$sub_img10', '$mechanical_pdf','$condition_pdf', '$date', 'active', '$car_comment' )";
    
    
    if ($conn->query($sql)) {
        ob_start();
        echo "<script>alert('Success!'); window.location.href='../view/car_manage.php'</script>";
    } else {
        echo "failure";
    }
    
    

