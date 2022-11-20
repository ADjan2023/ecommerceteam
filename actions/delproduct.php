<?php
//making action  aware of controller
require("../controllers/product_controller.php");

//collect form data
if(isset($_POST['delete'])) {
	$cid=$_POST['pid'];
	if(del_product_ctr($cid)==true){
		header('Location:../Admin/viewprod.php');
	}
}



?>
