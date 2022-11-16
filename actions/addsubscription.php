<?php
//making action  aware of controller
include("../controllers/subscription_controller.php");

//collect form data
if (isset($_POST['add'])) {
	$name=$_POST['sname'];
	$price=$_POST['price'];
	$bags=$_POST['bagno'];
	$description =$_POST['desc'];
	$pickup=$_POST['pickup'];
	$link=$_POST['link'];

	if(add_subscription_ctr($name,$price,$bags,$description,$pickup,$link)==True){
	
		header('Location:../Admin/viewsubs.php');
	} else{
		echo 'cannot add';
	}
	
}



?>
