<?php
require("../controllers/cart_controller.php");
session_start();
	
		$cid=$_SESSION['id'];
	$invoice=mt_rand();
	$date=date("Y/m/d");
	$status="pending";
	$deliv="delivery";
	if(create_order_ctr($cid,$invoice,$date,$status,$deliv)==TRUE){
	$oid=show_order_ctr($cid,$invoice);
		sub_details_ctr($oid['order_id'],$_SESSION['plan']);

	$status="Success";
	
		$result=get_order_ctr($invoice,$_SESSION['id']);
		if(update_order_ctr($result['order_id'],$status)==true){
			save_payment_ctr($_SESSION['amount'],$_SESSION['id'],$oid['order_id'],"GHC",$date);
		header('Location:../view/cart/complete.php');
		}
		
	}


else{
	echo "caanot add";
	//header('Location:../view');
}


?>