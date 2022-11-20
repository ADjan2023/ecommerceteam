<?php
//making action  aware of controller
include("../controllers/customer_controller.php");


//collect form data
$name=$_POST['full_name'];
$email=$_POST['email'];
$unencryptpass=$_POST['password'];
$confirmpass=$_POST['cpassword'];
$password=password_hash($unencryptpass, PASSWORD_DEFAULT); 
$contact=$_POST['contact'];
$hostel=$_POST['hostel'];
$role=2;
if(isset($_POST['submit'])){
	if ( $unencryptpass==$confirmpass) {

		if(add_customer_ctr($name,$email,$password,$contact,$role,$hostel)==TRUE){
			header('Location:../login/login.php');
		}
		else{
			session_start();
			$_SESSION['error'] = 'User credential failed, try again!';		
			header('Location:../login/register.php');
		}	
	}
	else{
		session_start();
		$_SESSION['error'] = "Passwords don't match";		
		header('Location:../login/register.php');
	}
}
else {
	
	header('Location:../login/register.php');
}
?>