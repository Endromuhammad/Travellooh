<?php 

/**
* 
*/
class user_db extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}
	public function registersubmit($data)
	{
		$this->db->insert('t_user', $data);
	}
}
 ?>