<?php
include("../controllers/cart_controller.php");

session_start();

if(isset($_POST['cid'])){
	$cid=$_SESSION['id'];
	$invoice=mt_rand();
	$date=date("Y/m/d");
	$status="pending";
	$amount=$_POST['amount'];
	$deliv=$_POST['deliv'];
	if(create_order_ctr($cid,$invoice,$date,$status,$deliv)==TRUE){
	$result=show_cart_ctr($cid,0);
	$oid=show_order_ctr($cid,$invoice);
	print_r($oid);
	$i=0;
	while($i<count($result)){
		order_details($oid['order_id'],$result[$i]['p_id'],$result[$i]['qty']);
		$i++;
	}
	$status="Success";
	if(clear_cart_ctr($_POST['cid'])==true){
		$result=get_order_ctr($invoice,$_SESSION['id']);
		if(update_order_ctr($result['order_id'],$status)==true){
			save_payment_ctr($amount,$_POST['cid'],$oid['order_id'],"GHC",$date);
		header('Location:../view/cart/complete.php');
		}
		
	}

}
else{
	header('Location:../view');
}
}
else{
	header('Location:../view');
}


?>
