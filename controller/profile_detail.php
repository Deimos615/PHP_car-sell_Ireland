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

    $updated_at = date('Y-m-d H:i:s');
    $sql = "UPDATE user 
            SET name='$user_name', dealership='$user_dealer', link='$user_link', vat='$user_vat',
                            email='$user_email', bank='$user_bank', garage='$user_garage'
            WHERE email = '". $user_email ."' ";
    mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);			
    echo "updated";
}
?>