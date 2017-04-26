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

	// public function fetch_user(){
	// 	$fetch_data= $this->userModel->make_datatables();
	// 	$data = array();
	// 	foreach ($fetch_data as $row) {
	// 		$sub_array = array();
	// 		$sub_array[] = $row->name;
	// 		$sub_array[] = $row->nameUser;
	// 		$sub_array[] = $row->email;
	// 		$sub_array[] = $row->userDescription;
	// 		$sub_array[] = $row->joinDate;

	// 		$data[] = $sub_array;

	// 		$output = array(
	// 						  "draw"			=> intval($_POST["draw"]),
	// 						  "recordsTotal"	=> $this->userModel->get_all_data(),
	// 						  "recordsFiltered" => $this->userModel->get_filtered_data(),
	// 						  "data"			=> $data
	// 					   );
	// 		echo json_encode($output);
	// 	}
	// }

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */