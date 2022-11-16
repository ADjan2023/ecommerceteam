<?php
//connect to the user account class
require("../classes/subscription_class.php");

//sanitize data


//--INSERT--//
function add_subscription_ctr($name,$price,$bagno,$description,$pickup){
	$addsubscription=new subscription_class();
	return $addsubscription->add_subscription($name,$price,$bagno,$description,$pickup);


}


//--SELECT--//
function view_subscription_ctr(){
	$viewsubscription=new subscription_class();
	return $viewsubscription->view_subscription();

}

function view_categories_ctr(){
	$viewcategories=new subscription_class();
	return $viewcategories->view_categories();


}

//--UPDATE--//
function edit_subscription_ctr($id,$name,$price,$bagno,$description,$pickup,$link){
	$updatesubscription=new subscription_class();
	return $updatesubscription->edit_subscription($id,$name,$price,$bagno,$description,$pickup,$link);


}

//--DELETE--//
function delete_subscription_ctr($id){
	$deletesubscription=new subscription_class();
	return $deletesubscription->delete_subscription($id);


}
?>