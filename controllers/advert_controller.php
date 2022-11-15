<?php
//connect to the user account class
require("../classes/advert_class.php");

//sanitize data


//--INSERT--//
function add_advert_ctr($name,$email,$logo,$description){
	$addadvert=new advert_class();
	return $addadvert->add_advert($name,$email,$logo,$description);
}

//--SELECT--//
function select_all_adverts_ctr(){
	$seeadvert=new advert_class();
	return $seeadvert->select_all_adverts();
}


//--UPDATE--//
function update_advert_ctr($id,$status){
	$updateadvert=new advert_class();
	return $updateadvert->update_advert($id,$status);
}


//--DELETE--//
function delete_advert_ctr($id){
	$deleteadvert=new advert_class();
	return $deleteadvert->delete_advert($id);
}


?>