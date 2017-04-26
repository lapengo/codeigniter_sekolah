<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->library('template');
		$this->load->model('userModel');
	}

	public function index()
	{
		$data['dataall']=$this->userModel->get_all();
		$this->template->admthemes('user/index',$data);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */