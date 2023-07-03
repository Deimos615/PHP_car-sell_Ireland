<?php
include_once("../model/db_connect.php");
if(isset($_POST['profile_btn'])) {
	$user_name = $_POST['uname'];
    $user_dealer = $_POST['dealership'];
    $user_link = $_POST['link'];
    $user_vat = $_POST['vat'];
	$user_email = $_POST['uemail'];
    $user_bank = $_POST['bank'];
    $user_garage = $_POST['garage'];
	$c_password = $_POST['c_password'];
    $n_password = $_POST['n_password'];
    $re_password = $_POST['re_password'];
	
    $sql = "SELECT * FROM user WHERE email='$user_email'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);	

    if($n_password != '' && $c_password != '') {
        if(password_verify($c_password, $row['password'])){
            $updated_at = date('Y-m-d H:i:s');
            $passHashed = password_hash($n_password, PASSWORD_DEFAULT);
            $sql = "UPDATE user 
                    SET name='$user_name', dealership='$user_dealer', link='$user_link', vat='$user_vat',
                                    email='$user_email', bank='$user_bank', garage='$user_garage', password='passHashed'
                    WHERE email = '". $user_email ."' ";
            mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);			
            echo "updated-PWD";
        } else {
            echo "wrong-pass";
        }
    } else if($n_password != '' && $c_password == '') {
        echo "noCPWD";
    } else if($n_password == '' && $c_password != '') {
        echo "noNPWD";
    } else if($n_password == '' && $c_password == '') {
        $updated_at = date('Y-m-d H:i:s');
        $sql = "UPDATE user 
                SET name='$user_name', dealership='$user_dealer', link='$user_link', vat='$user_vat',
                                email='$user_email', bank='$user_bank', garage='$user_garage'
                WHERE email = '". $user_email ."' ";
        mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);			
        echo "updated-noPWD";
    }
}
?>