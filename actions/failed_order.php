<?php
include("../controllers/cart_controller.php");

session_start();

if(isset($_POST['cid'])){
	$cid=$_SESSION['id'];
	$invoice=mt_rand();
	$date=date("Y/m/d");
	$status="pending";
	$deliv=$_POST['deliv'];
	if(create_order_ctr($cid,$invoice,$date,$status,$deliv)==TRUE){
	$result=show_cart_ctr($cid,0);
	$oid=show_order_ctr($cid,$invoice);
	$i=0;
	while($i<count($result)){
		order_details($oid['order_id'],$result[$i]['p_id'],$result[$i]['qty']);
		$i++;
	}
	$status="Failed";

		$result=get_order_ctr($invoice,$_SESSION['id']);
		if(update_order_ctr($result['order_id'],$status)==true){
		header('Location:../view/cart/fail.php');
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