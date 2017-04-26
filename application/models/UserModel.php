<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function GetUser(){
		// $query = $this->db->select('*')
	 //            ->from('user')
	 //            ->order_by('iduser','asc')
	 //            ->get();
		// return $query->result();

		$query=$this->db->get('user');
		return $query->result();
	}

}

/* End of file UserModel.php */
/* Location: ./application/models/UserModel.php */