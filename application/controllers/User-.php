<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('userModel');
		$this->load->library('template');
	}

	public function index()
	{
		$data['title'] = "Manajemen User";
		$data['user'] = $this->userModel->GetUser();
		$this->template->admthemes('user/index',$data);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
