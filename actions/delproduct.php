<?php
//making action  aware of controller
include("../controllers/product_controller.php");

//collect form data
if (isset($_POST['delete'])) {
	$id=$_POST['id'];
	
	

	if(delete_product_ctr($id)==true){
	
		header('Location:../Admin/viewprod.php');
	}p
}



?>
