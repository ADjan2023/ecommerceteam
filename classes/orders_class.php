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

	public function sales_count()
	{
		$sql="SELECT SUM(`amt`) as `sales` FROM `payment`  ";
		return $this->db_fetch_one($sql);
	}

	public function orders_count()
	{
		$sql="SELECT count(*) as `order` FROM `orders`  ";
		return $this->db_fetch_one($sql);
	}
	public function clients_count()
	{
		$sql="SELECT count(*) as `clients` FROM `customer`  ";
		return $this->db_fetch_one($sql);
	}
	
	//--UPDATE--//
public function complete_order($oid)
	{
		$sql="UPDATE `orders` SET `complete`='Yes' WHERE `order_id`='$oid'";
		return $this->db_query($sql);
	}

public function view_subs()
	{
		$sql="SELECT customer.customer_name,customer.customer_email, customer.customer_contact, customer.Hostel_name,sub_order.sub_name,orders.order_date,orders.order_id,subscription.pickups FROM orders,customer,sub_order,subscription WHERE orders.order_id=sub_order.order_id and orders.customer_id=customer.customer_id and orders.order_status='Success' and orders.complete='No' and sub_order.sub_name LIKE subscription.subscription_name ";
		return $this->db_fetch_all($sql);
	}
	public function view_custsubs($id)
	{
		$sql="SELECT customer.customer_name,customer.customer_email, customer.customer_contact, customer.Hostel_name,sub_order.sub_name,orders.order_date,orders.order_id,subscription.pickups,orders.order_status, orders.invoice_no FROM orders,customer,sub_order,subscription WHERE orders.order_id=sub_order.order_id and orders.customer_id=customer.customer_id  and sub_order.sub_name LIKE subscription.subscription_name and orders.customer_id='$id' ";
		return $this->db_fetch_all($sql);
	}

	public function count_custsubs($id)
	{
		$sql="SELECT count(customer.customer_name) as `subs`,customer.customer_email, customer.customer_contact, customer.Hostel_name,sub_order.sub_name,orders.order_date,orders.order_id,subscription.pickups,orders.order_status, orders.invoice_no FROM orders,customer,sub_order,subscription WHERE orders.order_id=sub_order.order_id and orders.customer_id=customer.customer_id and sub_order.sub_name LIKE subscription.subscription_name and orders.customer_id='$id' ";
		return $this->db_fetch_one($sql);
	}


public function view_custorders($id)
	{
		$sql="SELECT customer.customer_name, customer.customer_email, customer.Hostel_name, customer.customer_contact, orders.order_id, orders.order_date,orders.Deliv,orderdetails.product_id, orders.order_status, onewash.wash_name, orders.invoice_no FROM orders,customer,onewash,orderdetails WHERE orders.customer_id=customer.customer_id and orders.order_id=orderdetails.order_id and orderdetails.product_id=onewash.wash_id and orders.customer_id='$id'";
		return $this->db_fetch_all($sql);
	}

public function count_custorders($id)
	{
		$sql="SELECT count(customer.customer_name) as orders, customer.customer_email, customer.Hostel_name, customer.customer_contact, orders.order_id, orders.order_date,orders.Deliv,orderdetails.product_id, orders.order_status, onewash.wash_name, orders.invoice_no FROM orders,customer,onewash,orderdetails WHERE orders.customer_id=customer.customer_id and orders.order_id=orderdetails.order_id and orderdetails.product_id=onewash.wash_id and orders.customer_id='$id'";
		return $this->db_fetch_one($sql);
	}

	//--DELETE--//
	


}

?>