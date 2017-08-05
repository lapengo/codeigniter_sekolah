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


		// ===================================================================
			// memeriksa masukan link dari email
			// apakah email beserta token pada link sesuai dengan
			// email dan token yang ada di database
			// jika sesuai maka sistem merubah status login dari pandding menjadi aktif
		// ===================================================================

		public function verify($email2, $mytoket)
		{
			$email = base64_decode($email2);
			$token = base64_decode($mytoket);

			$user = $this->user->where('email', $email)->get();

			if (!$user) {
				// die('Mail is not exists');
	            $this->session->set_flashdata('error', '<strong>EMail</strong> is not exists.');
	        }
			else if ($user->token !== $token) {
				// die('Toket is not match');
	            $this->session->set_flashdata('error', '<strong>Token</strong> is not match.');
	        }
	        else if ($user->token == "invalite") {
				// die('Toket is not match');
	            $this->session->set_flashdata('error', 'Your Token is expire');
	        }
	        else{
				$a= $this->user->where('iduser', $user->iduser)->update(array('status'=>'active', 'token'=>'invalite'));
			}
			redirect('login');

		}

	public function Loginadm()
	{
		if (!$_POST) {
				$input = (object) $this->auth->getDefaultValues();
		} else {
				$input = (object) $this->input->post(null, true);
				$a= $this->security->xss_clean($input);
				var_dump($a);
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
