<?php
//making action  aware of controller
include("../controllers/product_controller.php");

//collect form data
if (isset($_POST['edit'])) {
	$id=$_POST['id'];
	$name=$_POST['sname'];
	$price=$_POST['price'];
	$category=$_POST['cid'];
	

	if(edit_product_ctr($id,$name,$price,$category)==true){
	
		header('Location:../Admin/viewprod.php');
	}
}



?>
