<?php
session_start();
include("../controllers/cart_controller.php");
 $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    if(!empty($_SESSION['id'])){
    if(isset($_POST['add'])){
    $pid=$_POST['pid'];
    if(add_to_cart_ctr($pid,$ip,$_SESSION['id'],1)==TRUE){
            header('Location:../view/cart');
        }



else{
    header('Location:../login/login.php');
}

}

}
else{
    header('Location:../login/login.php');
}



?>