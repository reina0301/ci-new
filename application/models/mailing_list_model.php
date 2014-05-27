<?php
//mailing_list_model.php

class Mailing_list_model extends CI_Model
{
	public function __construct()
	{//creates an active connection to DB
		$this->load->database();
	}
	
	public function get_mailing_list()
	{//will show all data in table named mail_list
		//$query = $this->db->get('mailing_list');
		//return $query->result_array();
		return $this->db->get('mailing_list');
	}
}
?>