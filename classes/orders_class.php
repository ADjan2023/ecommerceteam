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
		$sql="SELECT customer.customer_name, customer.customer_email, customer.Hostel_name, customer.customer_contact, orders.order_date,orders.Deliv,orderdetails.product_id, onewash.wash_name FROM orders,customer,onewash,orderdetails WHERE orders.customer_id=customer.customer_id and orderdetails.product_id=onewash.wash_id and orders.order_status='Success' and orders.order_id=orderdetails.order_id";
		return $this->db_fetch_all($sql);
	}

	
	//--UPDATE--//



	//--DELETE--//
	


}

?>