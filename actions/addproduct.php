<?php
//making action  aware of controller
include("../controllers/product_controller.php");

//collect form data
if (isset($_POST['add'])) {
	$name=$_POST['sname'];
	$price=$_POST['price'];
	$category=$_POST['cid'];
	

	add_product_ctr($name,$price,$category);
	
		header('Location:../Admin/viewprod.php');
	
}



?>
