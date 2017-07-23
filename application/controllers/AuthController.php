<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Authcontroller extends MY_Controller
{	
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
	}

	public function Loginadm()
	{
		$data['action'] = "cekloginadm";
		$this->load->view('auth/index',$data);
	}

	public function cekloginadm($username, $password)
	{
		echo "$username";
		echo "$password";
	}

}

 ?>