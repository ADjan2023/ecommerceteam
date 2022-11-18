<?php
include("../controllers/cart_controller.php");


session_start();
if(isset($_POST['quantity'])){
	$qty=$_POST['quantity'];
	$pid=$_POST['pid'];
$cid=$_SESSION['id'];
	if(update_quantity_cart_ctr($cid,$pid,$qty)==TRUE){
			header('Location:../view/cart');
		}

}




?>