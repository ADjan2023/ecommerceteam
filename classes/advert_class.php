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

class advert_class extends db_connection
{
	//--INSERT--//
	public function add_advert($name,$email,$logo,$description)
	{
		$sql="INSERT INTO `advertisement`(`company_name`, `company_info`, `company_image`, `company_email`) VALUES ('$name','$description','$logo','$email')";
		return $this->db_query($sql);
	}

	//--SELECT--//
	public function select_all_adverts()
	{
		$sql="SELECT * FROM `advertisement`";
		return $this->db_fetch_all($sql);
	}

	public function show_all_adverts()
	{
		$sql="SELECT * FROM `advertisement` where `Approved`='Yes' LIMIT 4";
		return $this->db_fetch_all($sql);
	}


	
	//--UPDATE--//
		public function update_advert($id,$status)
	{
		$sql="UPDATE `advertisement` set `Approved`='$status' where `company_id`='$id'";
		return $this->db_query($sql);
	}



	//--DELETE--//
	public function delete_advert($id)
	{
		$sql="DELETE FROM `advertisement` where `company_id`='$id'";
		return $this->db_query($sql);
	}

}

?>