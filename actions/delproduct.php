<?php
//making action  aware of controller
require("../controllers/product_controller.php");

//collect form data
<<<<<<< Updated upstream
if(isset($_POST['delete'])) {
	$cid=$_POST['pid'];
	if(del_product_ctr($cid)==true){
=======
if (isset($_POST['delete'])) {
	$id=$_POST['id'];
	
	
	if(delete_product_ctr($id)==true){
	
>>>>>>> Stashed changes
		header('Location:../Admin/viewprod.php');
	}
}



?>
