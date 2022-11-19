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

class cart_class extends db_connection
{

	public function add_to_cart($id,$ip,$cid,$quantity)
	{
		$sql="INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `qty`) select '$id','$ip','$cid','$quantity' from dual WHERE NOT EXISTS(Select * from cart where `p_id`='$id' and `ip_add`='$ip' and `c_id`='$cid')";
		$this->db_query($sql);
		
		if (mysqli_affected_rows($this->db)==0){
			$sql1="UPDATE `cart` set `qty`=`qty`+'$quantity' where `p_id`='$id' and `ip_add`='$ip' and `c_id`='$cid'";
			return $this->db_query($sql1);
		} else{
			return $this->db_query($sql);
		}
		
	}

public function show_cart($cid,$ip)
	{
		$sql="SELECT * from `cart` where `c_id`='$cid' ";
		return $this->db_fetch_all($sql);
	}
public function show_order($cid,$invoice)
	{
		$sql="SELECT * from `orders` where `customer_id`='$cid' and `invoice_no`='$invoice' ";
		return $this->db_fetch_one($sql);
	}

public function select_one_product($id)
	{
		$sql="SELECT * FROM `onewash` WHERE `wash_id`='$id'";
		return $this->db_fetch_one($sql);
	}

public function delete_from_cart($cid,$pid)
	{
		$sql="DELETE FROM `cart` WHERE `c_id`='$cid' and `p_id`='$pid'";
		return $this->db_query($sql);
	}
public function update_quantity_cart($cid,$pid,$quantity)
	{
		$sql="UPDATE `cart` SET `qty`='$quantity' WHERE `c_id`='$cid' and `p_id`='$pid'";
		return $this->db_query($sql);
	}
	
	public function create_order($cid,$invoice,$date,$status,$deliv)
	{
		$sql="INSERT INTO `orders`(`customer_id`, `invoice_no`, `order_date`, `order_status`,`Deliv`) VALUES ('$cid','$invoice','$date','$status','$deliv')";
		return $this->db_query($sql);
	}
	public function order_details($oid,$pid,$qty)
	{
		$sql="INSERT INTO `orderdetails`(`order_id`, `product_id`, `qty`) VALUES ('$oid','$pid','$qty')";
		return $this->db_query($sql);
	}

	public function clear_cart($cid)
	{
		$sql="DELETE FROM `cart` WHERE `c_id`='$cid'";
		return $this->db_query($sql);
	}
	public function update_order($oid,$status)
	{
		$sql="UPDATE `orders` SET `order_status`='$status' WHERE `order_id`='$oid' ";
		return $this->db_query($sql);
	}
	public function get_order($invoice,$cid)
	{
		$sql="SELECT * from `orders` where `invoice_no`='$invoice'and `customer_id`='$cid' ";
		return $this->db_fetch_one($sql);
	}
	public function save_payment($amount,$cid,$oid,$currency,$date)
	{
		$sql="INSERT INTO `payment`( `amt`, `customer_id`, `order_id`, `currency`, `payment_date`) VALUES ('$amount','$cid','$oid','$currency','$date') ";
		return $this->db_query($sql);
	}
	public function view_orders($cid)
	{
		$sql="SELECT * from `orders` where  `customer_id`='$cid' ";
		return $this->db_fetch_all($sql);
	}
	public function view_order($oid)
	{
		$sql="SELECT products.product_title,products.product_price,orderdetails.qty,orderdetails.product_id from products,orderdetails where orderdetails.order_id='$oid' and orderdetails.product_id= products.product_id";
		return $this->db_fetch_all($sql);
	}
	public function sub_details($oid,$name)
	{
		$sql="INSERT INTO `sub_order`(`order_id`, `sub_name`) VALUES ('$oid','$name')";
		return $this->db_query($sql);
	}

	public function cart_count()
	{
		$sql="SELECT SUM(`qty`) as `count` FROM `cart`  ";
		return $this->db_fetch_one($sql);
	}

}

?>