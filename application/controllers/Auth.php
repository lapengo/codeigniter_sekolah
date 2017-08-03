<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class Auth extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
	}

	public function Loginadm()
	{
		if (!$_POST) {
				$input = (object) $this->auth->getDefaultValues();
		} else {
				$input = (object) $this->input->post(null, true);
		}

		if (!$this->auth->validate()) {
				$data['action'] = "login";
				$this->load->view('auth/index',$data);
				return;
		}

		if ($this->auth->login($input)) {
				redirect(base_url());
		} else {
				$this->session->set_flashdata('error', 'Username atau password salah, atau akun anda sedang diblokir.');
		}

		redirect('login');
	}

	public function cekloginadm($username, $password)
	{
		echo "$username";
		echo "$password";
	}

}

 ?>
