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

class subscription_class extends db_connection
{
	//--INSERT--//
	public function add_subscription($name,$price,$bagno,$description,$pickup,$link)
	{
		$sql="INSERT INTO `subscription`( `subscription_name`, `subscription_price`, `bag_number`, `Description`,`pickups`,`paystack_link`) VALUES ('$name','$price','$bagno','$description','$pickup','$link')";
		return $this->db_query($sql);
	}

	//--SELECT--//
	public function view_subscription()
	{
		$sql="SELECT * FROM `subscription`";
		return $this->db_fetch_all($sql);
	}

	
	//--UPDATE--//
		public function edit_subscription($id,$name,$price,$bagno,$description,$pickup,$link)
	{
		$sql="UPDATE `subscription` SET `subscription_name`='$name',`subscription_price`='$price',`bag_number`='$bagno',`Description`='$description', `pickups`='$pickup', `paystack_link`='$link' WHERE `subscription_id`='$id'";
		return $this->db_query($sql);
	}



	//--DELETE--//
	
	public function delete_subscription($id)
	{
		$sql="DELETE FROM `subscription` WHERE `subscription_id`='$id'";
		return $this->db_query($sql);
	}


}

?>