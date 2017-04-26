<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
	}

	public function index()
	{
		// $isi= array(
		// 			  title => "Contoh penggunaan template pada Codeigniter",
		//               cucumberhead => "Home",
		//             );
		$this->template->admthemes('apa');
	}

}

/* End of file Templatetest.php */
/* Location: ./application/controllers/Templatetest.php */