<?php 
    $cid = $_REQUEST['cid'];    
    $uname = $_REQUEST['uname'];
    $uemail = $_REQUEST['uemail'];
    $cname = $_REQUEST['cname'];
    $cesti = $_REQUEST['cesti'];
    $timer = $_REQUEST['timer'];
    $offer = $_REQUEST['offer'];
    $datetime = date('Y-m-d H:i:s');

    include_once("../model/db_connect.php");

    $sqlQuery = "SELECT offer FROM offer WHERE uemail = '" . $uemail . "'";
    $resultset = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn)."qqq".$sqlQuery);			
    while($row = $resultset->fetch_assoc()) {
        if($offer == $row['offer']){
            echo "equal";
            // echo '<script>alert("You already offered with some value!")</script>';  //not showing an alert box.
            die();
        }
    }
    

    $sql = "INSERT INTO offer(`cname`, `cid`, `uname`, `uemail`, `esti_price`, `offer`, `expires`, `offered_at`, `winning`) 
                        VALUES ('$cname', '$cid', '$uname', '$uemail', '$cesti', '$offer','$timer', '$datetime', 'lose')";
    mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn)."qqq".$sql);			
    echo "success";
?>