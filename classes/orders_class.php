<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class orders_class extends db_connection
{
	//--INSERT--//

	//--SELECT--//
	public function view_orders()
	{
		$sql="SELECT customer.customer_name, customer.customer_email, customer.Hostel_name, customer.customer_contact, orders.order_id, orders.order_date,orders.Deliv,orderdetails.product_id, orders.order_status, onewash.wash_name FROM orders,customer,onewash,orderdetails WHERE orders.customer_id=customer.customer_id and orders.order_id=orderdetails.order_id and orderdetails.product_id=onewash.wash_id and orders.complete='No' and orders.order_status='Success'";
		return $this->db_fetch_all($sql);
	}

	
	//--UPDATE--//
public function complete_order($oid)
	{
		$sql="UPDATE `orders` SET `complete`='Yes' WHERE `order_id`='$oid'";
		return $this->db_query($sql);
	}



	//--DELETE--//
	


}

?>