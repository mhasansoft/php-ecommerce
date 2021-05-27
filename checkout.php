<?php
    session_start();


    require "db.php";
    // echo '<pre>';
    // var_dump($_SESSION);
    // var_dump($_POST);    

    $admin_id = $_SESSION['uid'];

    $count = count($_POST['product_id'])-1;
    $trx_id = substr(strtoupper(sha1(md5(time().rand(10001, 99999)))), 0,8);

    for($i = 0; $i <= $count; $i++){
        $product_id = $_POST['product_id'][$i];
        $product_qty = $_POST['qty'][$i];
        $query = mysqli_query($con, "INSERT into orders ( `user_id`, `product_id`, `qty`, `trx_id`) 
        values ('$admin_id', '$product_id', '$product_qty', '$trx_id')");
    }
    
    mysqli_query($con, "DELETE FROM `cart` WHERE user_id='$admin_id'");

    header('location:customer_order.php');


   
?>