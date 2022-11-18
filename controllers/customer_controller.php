<?php
//connect to the user account class
require("../classes/customer_class.php");

//sanitize data


//--Register--//
function add_customer_ctr($name,$email,$password, $contact, $role,$hostel){
	$addcontact=new customer_class();
	return $addcontact->add_customer($name,$email,$password,$contact,$role,$hostel);
}


//--Verify Login--//
function verify_customer_ctr($email){
	$verify=new customer_class();
	return $verify->verify_customer($email);
}

//--UPDATE--//

//--DELETE--//

?>