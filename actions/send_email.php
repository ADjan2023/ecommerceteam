<?php
if(isset($_POST["Message"])) {
	$email=$_POST['email'];
	$msg=$_POST['msg'];
if(mail($email, "Your laundry is ready!!",
$msg, "From: ayeyidjan@gmail.com")==true){
	echo "success";
}
else{
	echo "fail";
}

}
?>