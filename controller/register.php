<?php
include_once("../model/db_connect.php");
if(isset($_POST['btn-save'])) {
	$user_name = $_POST['user_name'];
    $user_dealer = $_POST['user_dealer'];
    $user_link = $_POST['user_link'];
    $user_vat = $_POST['user_vat'];
	$user_email = $_POST['user_email'];
    $user_bank = $_POST['user_bank'];
    $user_garage = $_POST['user_garage'];
	$user_password = $_POST['user_pass'];
		
	$sql = "SELECT email FROM user WHERE email='$user_email'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);
    $created_at = date('Y-m-d H:i:s');
    $passHashed = password_hash($user_password, PASSWORD_DEFAULT);		
	if(empty($row['email'])){	
		$sql = "INSERT INTO user(`id`, `name`, `dealership`, `link`, `email`, `vat`, `garage`, `bank`, `password`, `created_at`) 
                        VALUES (NULL, '$user_name', '$user_dealer', '$user_link', '$user_email', '$user_vat', '$user_garage', '$user_bank',  '$passHashed', '$created_at')";
		mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);			
		echo "registered";
	} else {				
		echo "1";	 
	}
}
?>