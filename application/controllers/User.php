<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// ===================================================================
	# Index user
	# Form Create
	# Function Insert User
	# send email verification
	# verify (verifikasi link dari email)
	# Function Delete
// ===================================================================

class User extends MY_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
	}

	public function index()
	{
		$data['title'] = "Tampil Data Administrator";
		$data['user'] = $this->user->join('level', 'level.idlevel = user.idlevel')->getAll();
		$this->template->admthemes('user/index',$data);
	}

	public function create()
	{
		$data['title'] = "Tambah Data Admin";
		$data['action'] = "admins";
		$this->template->admthemes('user/formCreate',$data);
	}

	public function insert()
	{

		if (!$_POST) {
            $input = (object) $this->user->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }


		$this->load->helper('string');
		$_SESSION['token'] = random_string('alnum',16);

		$date1= date("Y-m-d H:i:s");


        $input->joinDate   = $date1;
        $input->token = $_SESSION['token'];
        $input->pws = md5($input->pws);

	// ===================================================================
		// cek validasi data form
	// ===================================================================
		if($this->user->validate()){
			if ($this->user->insert($input)) {
            	$this->session->set_flashdata('success', 'Data user berhasil disimpan.');
            	$this->send_email_verification($this->input->post('email'), $_SESSION['token']);
				redirect('dataadmin');
        	}else {
            	$this->session->set_flashdata('error', 'Data user gagal disimpan.');
        	} 
		}else{
			$this->create();
		}
	}

// ===================================================================
	// metode pengiriman email jika data yang 
	// di masukkan semuanya telah sukses 
	// lihat pada cek validasi untuk penggunaan function ini
// ===================================================================

	public function send_email_verification($email, $token)
	{
		$this->load->library('email');
		
		$email2 = base64_encode($email);
		$mytoket = base64_encode($token);

		$this->email->from('ariflapengo@gmail.com', 'Arif Babastudio');
		$this->email->to($email);
		// $this->email->cc('another@example.com');
		// $this->email->bcc('and@another.com');
		
		$this->email->subject('Register Website Company Profile - Local');
		$this->email->message("
				Klik disini untuk konfirmasi pendaftaran
				<a href='" . base_url() . "verify/$email2/$mytoket'>konfirmasi Email</a>
			");
		$this->email->set_mailtype('html');
		$this->email->send();
		
		// echo $this->email->print_debugger();
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
		redirect('dataadmin');

	}

	public function delete($id1 = null)
	{
		$id= base64_decode($id1);

		$user = $this->user->where('iduser', $id)->get();
        if (!$user) {
            $this->session->set_flashdata('warning', 'Data user tidak ada.');
            redirect('dataadmin');
        }

        if ($this->user->where('iduser', $id)->delete()) {
			$this->session->set_flashdata('success', '<strong>Success</strong>, Data user berhasil dihapus.');
		} else {
            $this->session->set_flashdata('error', '<strong>Error</strong>, Data user gagal dihapus.');
        }

		redirect('dataadmin');
	}

	public function update($idend, $statusa)
	{
		$id= base64_decode($idend);
		$status= base64_decode($statusa);

		$user = $this->user->where('iduser', $id)->get();

		if (!$user) {
			$this->session->set_flashdata('warning', 'Data user tidak ada.');
            redirect('dataadmin');
		}else{
			if ($status == 'blockir') {
				$this->user->where('iduser', $user->iduser)->update(array('status'=>'active'));
				$this->session->set_flashdata('success', '<strong>Success</strong>, User status Aktif.');
				redirect('dataadmin');
			}else{
				$this->user->where('iduser', $user->iduser)->update(array('status'=>'blockir'));
				$this->session->set_flashdata('warning', '<strong>Success</strong>, User telah Terblokir.');
				redirect('dataadmin');
			}
		}
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */