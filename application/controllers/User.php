<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->library('template');
	}

	public function index()
	{
		$query['user']=$this->db->get('user');
		die($query);
		$this->template->admthemes('user/index',$query);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */