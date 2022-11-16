<?php
include("../controllers/advert_controller.php");



if(isset($_POST['cname']) and isset($_POST['cemail']) and isset($_POST['desc'])){
	$allowTypes = array('jpg','png','jpeg','gif'); 
	$name=$_POST['cname'];
	$email=$_POST['cemail'];
	$description=$_POST['desc'];

	//image upload
	$output_dir = "../images/adverts/";/* Path for file upload */
	$RandomNum   = time();
	$ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
	$ImageType      = $_FILES['image']['type'][0];
	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
	$ImageExt=str_replace('.','',$ImageExt);
	$ImageName=preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
	$NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
	$ret[$NewImageName]= $output_dir.$NewImageName;
	




move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$NewImageName );
	if(add_advert_ctr($name,$email,$NewImageName,$description)==TRUE){
		header('Location:../Advertisement/addadvert.php');
		echo "<script>alert('Advert submitted successfully')</script>";
	}
	else{
		header('Location:../Advertisement/addadvert.php');
		echo "<script>alert('Advert not submitted')</script>";
	}

}
else{
	header('Location:../Advertisement/addadvert.php');
}



?>