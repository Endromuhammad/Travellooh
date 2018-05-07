<?php
/**
* 
*/
class User extends CI_controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->helper('url');
		$this->load->model('user_db');
	}
	
	public function form()
	{
		$this->load->view("form_v");
	}
	public function index()
	{
		$this->load->view("welcome_message");
	}
	public function Add()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$fullname = $this->input->post("fullname");

		$data = array(
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => 1
		);
		$this->user_db->registersubmit($data);
		$this->load->view('form_v');
	}
}