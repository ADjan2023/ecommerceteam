<?php
//making action  aware of controller
include("../controllers/customer_controller.php");
include("../error/errordisplay");

//collect form data

$email=$_POST['email'];
$unencryptpass=$_POST['password'];


if(isset($_POST['submit'])){
	if(verify_customer_ctr($email)!=false){
		$result=verify_customer_ctr($email);
		$encryptpass= $result['customer_pass'];
		if(password_verify($unencryptpass, $encryptpass) and $result['user_role']==1){
			session_start();
			$_SESSION['id'] = $result['customer_id'];
			$_SESSION['name'] = $result['customer_name'];
			$_SESSION['email'] = $result['customer_email'];
			$_SESSION['role'] = $result['user_role'];
			header('Location:../Admin');
		}
		else if(password_verify($unencryptpass, $encryptpass) and $result['user_role']==2){
			session_start();
			$_SESSION['id'] = $result['customer_id'];
			$_SESSION['name'] = $result['customer_name'];
			$_SESSION['email'] = $result['customer_email'];
            $_SESSION['contact'] = $result['customer_contact'];
            $_SESSION['hostel'] = $result['Hostel_name'];
			header('Location:../view/index.php');
		}
		else{
			session_start();
			$_SESSION['error'] = 'Invalid login details!';		
			header('Location:../login/login.php');
		}		
	}
	else{
		session_start();
		$_SESSION['error'] = 'Invalid login details!';		
		header('Location:../login/login.php');
	}	
}


else {
	
	header('Location:../login/login.php');
}
?>