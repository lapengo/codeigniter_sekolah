<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	// var $table="user";
	// var $select_column = array(
	// 							"iduser", "idlevel", "email", "nameUser", "userDescription", "joinDate","loginDate"
	// 						  );
	// var $order_column = array(
	// 							null, "idlevel", "email", "nameUser", null, "joinDate","loginDate"
	// 						  );

	// public function make_query(){
	// 	$this->db->select($this->select_column);
	// 	$this->db->from($this->table);
	// 	if (isset($_POST["search"]["value"])) {
	// 		$this->db->like("idlevel", $_POST["search"]["value"]);
	// 		$this->db->or_like("email", $_POST["search"]["value"]);
	// 		$this->db->or_like("nameUser", $_POST["search"]["value"]);
	// 		$this->db->or_like("joinDate", $_POST["search"]["value"]);
	// 		$this->db->or_like("loginDate", $_POST["search"]["value"]);
	// 	} 
	// 	if (isset($_POST["order"])) {
	// 		$this->db->order_by(
	// 								$this->order_column[$_POST['order']['0']['column']], 
	// 								$_POST['order']['0']['dir']
	// 						   );
	// 	}else{
	// 			$this->db->order_by('id', 'desc');
	// 	}
		
	// }

	// public function make_datatables(){
	// 	$this->make_query();
	// 	if ($_POST['length'] != -1) {
	// 		$this->db->limit($_POST['length'], $_POST['start']);
	// 	}
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }

	// public function get_filtered_data(){
	// 	$this->make_query();
	// 	$query = $this->db->get();
	// 	return $query->num_rows();
	// }

	// public function get_all_data(){
	// 	$this->db->select('*');
	// 	$this->db->from($this->table);
	// 	return $this->db->count_all_results();
	// }


	/*untuk menampilkan data user di tabel user dengan join ke table level menggunakan function getuser*/	
	public function GetUser(){
		$query = $this->db->select('*') //menampilkan semua fields
	            ->from('user') // menentukan dari table apa
	            ->join('level', 'level.idlevel = user.idlevel') // untuk join
	            ->order_by('iduser','asc') //mengurutkan user berdasarkan id user asc
	            ->get(); // mengeksekusi query dari database
		return $query->result(); // menampung nilai dari tabel
	}

}

/* End of file UserModel.php */
/* Location: ./application/models/UserModel.php */