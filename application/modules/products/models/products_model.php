<?php
/**
* 
*/
class Products_model extends MY_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function add_product()
	{
		$sql = "";

		$insert = $this->db->query($sql);
	}

	function get_all_products()
	{
		$sql = "";

		$result = $this->db->query($sql);

		return $result->result_array();
	}

	function get_product($id)
	{
		$sql = "";

		$result = $this->db->query($sql);

		return $result->result_array();
	}
}

?>