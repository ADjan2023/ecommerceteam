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

class product_class extends db_connection
{
	//--INSERT--//
	public function add_product($name,$price,$category)
	{
		$sql="INSERT INTO `onewash`(`wash_name`, `wash_price`, `category`) VALUES ('$name','$price','$category')";
		return $this->db_query($sql);
	}

	//--SELECT--//
	public function view_products()
	{
		$sql="SELECT * FROM `onewash`";
		return $this->db_fetch_all($sql);
	}

		public function view_delicate_products()
	{
		$sql="SELECT * FROM `onewash` where `category`=1";
		return $this->db_fetch_all($sql);
	}
		public function view_bed_products()
	{
		$sql="SELECT * FROM `onewash` where `category`=2";
		return $this->db_fetch_all($sql);
	}

	public function view_categories()
	{
		$sql="SELECT * FROM `categories`";
		return $this->db_fetch_all($sql);
	}

	public function view_one_category($id)
	{
		$sql="SELECT * FROM `categories` where `cat_id`='$id'";
		return $this->db_fetch_one($sql);
	}

	
	//--UPDATE--//
		public function edit_product($id,$name,$price,$cid)
	{
		$sql="UPDATE `onewash` SET `wash_name`='$name',`wash_price`='$price',`category`='$cid' WHERE `wash_id`='$id'";
		return $this->db_query($sql);
	}

	public function cart_count($cid,$ip)
	{
		$sql="SELECT SUM(`qty`) as `cart_num` FROM `cart` WHERE `c_id`='$cid' ";
		return $this->db_fetch_one($sql);
	}

	//--DELETE--//
	
	public function delete_product($pid)
	{
		$sql="DELETE FROM onewash WHERE wash_id='$pid'";
		return $this->db_query($sql);
	}

	


}

?>