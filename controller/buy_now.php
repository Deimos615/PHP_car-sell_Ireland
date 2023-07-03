<?php 
    $uname = $_REQUEST['uname'];
    $uemail = $_REQUEST['uemail'];
    $cid = $_REQUEST['cid'];
    $cname = $_REQUEST['cname'];
    $cbuy = $_REQUEST['cbuy'];
    $timer = $_REQUEST['timer'];
    $datetime = date('Y-m-d H:i:s');

    include_once("../model/db_connect.php");

    $sqlQuery = "SELECT * FROM buy WHERE uemail = '" . $uemail . "'";
    $resultset = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn)."qqq".$sqlQuery);			
    while($row = $resultset->fetch_assoc()) {
        if($cname == $row['cname']){
            echo "equal";
            die();
        }
    }
    

    $sql1 = "INSERT INTO buy(`cname`, `cid`, `uname`, `uemail`, `buy_price`, `expires`, `bought_at`) 
                        VALUES ('$cname', '$cid', '$uname', '$uemail', '$cbuy', '$timer', '$datetime') ";
    $sql2 = "UPDATE stock SET buy_status='bought' WHERE name='". $cname ."' ";
    mysqli_query($conn, $sql1) or die("database error:". mysqli_error($conn)."qqq".$sql1);			
    mysqli_query($conn, $sql2) or die("database error:". mysqli_error($conn)."qqq".$sql2);			
    echo "success";
?>