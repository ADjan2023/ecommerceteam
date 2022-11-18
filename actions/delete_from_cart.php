<?php
include("../controllers/cart_controller.php");



if(isset($_POST['delete'])){
	$cid=$_POST['cid'];
	$pid=$_POST['pid'];
	if(delete_from_cart_ctr($cid,$pid)==TRUE){
			header('Location:../view/cart');
		}
		else{
	header('Location:../view/cart');
}

}
else{
	header('Location:../view/index.php');
}





?>