<?php
session_start();
include_once("../model/db_connect.php");
if(isset($_POST['login_button'])) {
	$user_email = trim($_POST['user_email']);
	$user_password = trim($_POST['user_pass']);
	
	$sql = "SELECT id, name, password, email, waiting, status FROM user WHERE email='$user_email'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);	
	
	
	if(password_verify($user_password, $row['password'])){
		if( $row['waiting'] == null ) {
			echo "waiting";
		}
		else if( $row['status'] == 'inactive' ) {
			echo "inactive";
		}
		else {
			echo "ok";
			$_SESSION['user_session'] = $row['id'];
		}
	} 
	else {				
		echo "Email or password does not exist"; // wrong details 
	}		
}
?>