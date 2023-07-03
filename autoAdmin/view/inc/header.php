<?php session_start(); ?>
<!DOCTYPE html><html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="shortcut icon" href="../assets/images/icon.png" type="image/x-icon">
        <?php
            // Check if the user is logged in, if not then redirect him to login page
            if(!isset($_SESSION["adminname"])){
                echo "<script>window.location.href='../../index.php';</script>";
                exit;
            }

            /* ------------------------------------------------------- Logout module */
            if(isset($_GET['logout']) && $_SESSION['adminname'] != ''){
                unset($_SESSION['adminname']);
                session_destroy();
                echo "<script>window.location.href='../../index.php';</script>";
            }
        ?>
<!-- jQuery -->
