<?php
class Adminm extends CI_Model{
	function login_authen($username, $password){
		//$this->db->select('*'); query builder
		//$sql ="select * from admin where username= '$username' and password = '$password'";
		//$query = $this->db->query($sql);
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('admin');
	}

	function getDataUser() {
		$query = $this->db->get('user');
		return $query->result_array();
	}

	function authen_user($username){
		$sql = "select authentication from admin where username='$username'";
		$query = $this->db->query($sql);

		if($query->num_rows()==1){
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	public function update($username){
		$this->db->set('authentication',0);
		$this->db->where('username',$username);
		$this->db->update('user');

	}

	function wrong_password($username,$value){	
		$sql = "update admin set authentication = '$value' where username = '$username';" ;
		$query = $this->db->query($sql);
	}

	
}


?>