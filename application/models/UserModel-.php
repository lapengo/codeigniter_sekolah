<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
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
