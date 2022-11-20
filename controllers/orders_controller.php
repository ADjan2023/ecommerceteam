<?php
//connect to the user account class
require("../classes/orders_class.php");

//sanitize data



function view_orders_ctr(){
	$vieworders=new orders_class();
	return $vieworders->view_orders();
}

function view_subs_ctr(){
	$viewsubs=new orders_class();
	return $viewsubs->view_subs();
}

function sales_count_ctr(){
	$countsales=new orders_class();
	return $countsales->sales_count();
}

function orders_count_ctr(){
	$orderssales=new orders_class();
	return $orderssales->orders_count();
}

function clients_count_ctr(){
	$clients=new orders_class();
	return $clients->clients_count();
}

function view_custsubs_ctr($id){
	$viewsubs=new orders_class();
	return $viewsubs->view_custsubs($id);
}

function count_custsubs_ctr($id){
	$viewsubs=new orders_class();
	return $viewsubs->count_custsubs($id);
}

function count_custorders_ctr($id){
	$viewsubs=new orders_class();
	return $viewsubs->count_custorders($id);
}


function view_custorders_ctr($id){
	$viewsubs=new orders_class();
	return $viewsubs->view_custorders($id);
}

//--UPDATE--//
function complete_order_ctr($oid){
	$completeorder=new orders_class();
	return $completeorder->complete_order($oid);
}


//--DELETE--//

?>