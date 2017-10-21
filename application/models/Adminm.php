<?php
class Adminm extends CI_Model{
	function login_authen($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('admin');
	}

	function getDataUser() {
		$query = $this->db->get('user');
		return $query->result_array();
	}
	
}


?>