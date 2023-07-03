<?php
include_once("../model/db_connect.php");
if(isset($_POST['pwd_btn'])) {
	$c_password = $_POST['c_password'];
    $n_password = $_POST['n_password'];
    $re_password = $_POST['re_password'];
    $email = $_POST['uemail'];

    $sql = "SELECT * FROM user WHERE email='$email'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);

    if(password_verify($c_password, $row['password'])){
        $updated_at = date('Y-m-d H:i:s');
        $passHashed = password_hash($n_password, PASSWORD_DEFAULT);
        $sql = "UPDATE user 
                SET password='$passHashed'
                WHERE email = '". $email ."' ";
        mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);			
        echo "updated";
    } else {
        echo "wrong-pass";
    }
}
?>