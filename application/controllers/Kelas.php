<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends MY_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
	}

	public function index(){				
		$data['title'] = "Tampil Data Administrator";
		$this->template->admthemes('kelas/index',$data);
	}

	public function create()
	{
		$data['title'] = "Tambah Data Kelas";
		$data['action'] = "kelas/insert";
		$this->template->admthemes('kelas/formCreate',$data);
	}

}

 ?>