<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('template');
  }

  function index()
  {
    $data['title'] = "Data Siswa";
		$data['siswa'] = $this->siswa->getAll();
		$this->template->admthemes('siswa/index',$data);
  }

}
