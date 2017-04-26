<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function GetUser(){
		$query = $this->db->get('user');
		$quer = $this->db->order_by('nameUser', 'desc');
		return $query->result_array();
	}

}

/* End of file UserModel.php */
/* Location: ./application/models/UserModel.php */