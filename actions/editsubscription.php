<?php
//making action  aware of controller
include("../controllers/subscription_controller.php");

//collect form data
if (isset($_POST['edit'])) {
	$id=$_POST['sid'];
	$name=$_POST['sname'];
	$price=$_POST['price'];
	$bags=$_POST['bagno'];
	$description =$_POST['desc'];
	$pickup=$_POST['pickup'];
	$link=$_POST['link'];

	if(edit_subscription_ctr($id,$name,$price,$bags,$description,$pickup,$link)==TRUE){
		header('Location:../Admin/viewsubs.php');
	}
	else{
		echo "cannot edit";
	}
		
	
}



?>
