<?php
//making action  aware of controller
include("../controllers/subscription_controller.php");

//collect form data
if (isset($_POST['delete'])) {
	$id=$_POST['sid'];
	

	delete_subscription_ctr($id);
	
		header('Location:../Admin/viewsubs.php');
	
}



?>
