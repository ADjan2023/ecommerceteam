<?php
//making action  aware of controller
include("../controllers/advert_controller.php");

//collect form data
if (isset($_POST['id'])) {
	$id=$_POST['id'];
	$status=$_POST['ss'];
	$fstatus;
	if($status=='Yes'){
$fstatus='No';
	}
	else{
	$fstatus='Yes';	
	}
	if(update_advert_ctr($id,$fstatus)==True){
		header('Location:../Admin/advertisment.php');
	}
	
}



?>
