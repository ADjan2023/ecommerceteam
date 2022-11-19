<?php
//connect to the user account class
require("../classes/orders_class.php");

//sanitize data



function view_orders_ctr(){
	$vieworders=new orders_class();
	return $vieworders->view_orders();
}




//--UPDATE--//
function complete_order_ctr($oid){
	$completeorder=new orders_class();
	return $completeorder->complete_order($oid);
}


//--DELETE--//

?>