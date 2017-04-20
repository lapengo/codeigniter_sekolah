<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	public function index()
	{
		$isi['titleme']='SMK N 1 Mopuya';
		$isi['hightitle']='SMK N 1 Mopuya';
		$isi['subtitle']='Form Data';
		$isi['content']='apa';
		$this->load->view('layout/default',$isi);
	}

}

/* End of file Templatetest.php */
/* Location: ./application/controllers/Templatetest.php */