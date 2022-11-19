<?php
//connect to the user account class
require("../classes/cart_class.php");

//sanitize data


//--Add to cart--//
function add_to_cart_ctr($id,$ip,$cid,$quantity){
	$addcart=new cart_class();
	return $addcart->add_to_cart($id,$ip,$cid,$quantity);
}

function create_order_ctr($cid,$invoice,$date,$status,$deliv){
	$addorder=new cart_class();
	return $addorder->create_order($cid,$invoice,$date,$status,$deliv);
}

function order_details($oid,$pid,$qty){
	$addorderdetails=new cart_class();
	return $addorderdetails->order_details($oid,$pid,$qty);
}

function sub_details_ctr($oid,$name){
	$addsubdetails=new cart_class();
	return $addsubdetails->sub_details($oid,$name);
}

function save_payment_ctr($amount,$cid,$oid,$currency,$date){
	$savepayment=new cart_class();
	return $savepayment->save_payment($amount,$cid,$oid,$currency,$date);
}


//--Show Cart--//
function show_cart_ctr($cid,$ip){
	$showcart=new cart_class();
	return $showcart->show_cart($cid,$ip);
}

function show_order_ctr($cid,$invoice){
	$seeorder=new cart_class();
	return $seeorder->show_order($cid,$invoice);
}

function select_one_prod_ctr($id){
	$oneproduct=new cart_class();
	return $oneproduct->select_one_product($id);
}

function get_order_ctr($invoice,$cid){
	$getorder=new cart_class();
	return $getorder->get_order($invoice,$cid);
}
function view_orders_ctr($cid){
	$vieworders=new cart_class();
	return $vieworders->view_orders($cid);
}
function view_order_ctr($oid){
	$vieworder=new cart_class();
	return $vieworder->view_order($oid);
}



//--UPDATE--//
function update_quantity_cart_ctr($cid,$pid,$quantity){
	$updateqtycart=new cart_class();
	return $updateqtycart->update_quantity_cart($cid,$pid,$quantity);
}
function update_order_ctr($oid,$status){
	$updateorder=new cart_class();
	return $updateorder->update_order($oid,$status);
}

//--DELETE--//
function delete_from_cart_ctr($cid,$pid){
	$delfromcart=new cart_class();
	return $delfromcart->delete_from_cart($cid,$pid);
}
function clear_cart_ctr($cid){
	$clearcart=new cart_class();
	return $clearcart->clear_cart($cid);
}


?>