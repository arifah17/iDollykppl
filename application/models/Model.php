<?php
class Model extends CI_Model{
	function login_authen($username, $password){
		//$this->db->select('*'); query builder
		//$sql ="select * from user where username= '$username' and password = '$password'";
		//$query = $this->db->query($sql);
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('user');
	}

	function authen_user($username){
		$sql = "select authentication from user where username='$username'";
		$query = $this->db->query($sql);

		if($query->num_rows()==1){
			return $query->result_array();
		}
		else{
			return false;
		}
	}
	
	function wrong_password($username,$value){	
		$sql = "update user set authentication = '$value' where username = '$username';" ;
		$query = $this->db->query($sql);
	}

	function addAkun($data){
		$this->db->insert('user',$data);
	}
        
        public function getTotalRow($uname, $name, $email, $phone, $pass, $alamat){
            $this->db->where('username',$uname);
            $this->db->where('name',$name);
            $this->db->where('email',$email);
            $this->db->where('phone',$phone);
            $this->db->where('password',$pass);
            $this->db->where('address',$alamat);
            $this->db->from('user');
            $query= $this->db->get();
            return $query->num_rows();
        }
 
	public function getProduct()
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('categori', 'product.kategori = categori.id_cat');
		$data = $this->db->get();
		return $data->result_array();
	}
	public function getProduct0()
	{
		$cat = "Makanan";
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('categori', 'product.kategori = categori.id_cat');
		$this->db->where('categori.nama_cat', $cat);
		$data = $this->db->get();
		return $data->result_array();
	}
	public function getProduct1()
	{
		$cat = "Kain";
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('categori', 'product.kategori = categori.id_cat');
		$this->db->where('categori.nama_cat', $cat);
		$data = $this->db->get();
		return $data->result_array();
	}

	public function getProduct2()
	{
		$cat = "Sepatu";
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('categori', 'product.kategori = categori.id_cat');
		$this->db->where('categori.nama_cat', $cat);
		$data = $this->db->get();
		return $data->result_array();
	}

	public function getBarang($id_product){
		$this->db->where('id',$id_product);
		return $this->db->get('product')->row();
	}

	public function getAkun()
	{
		$this->db->select('user',$data);
	}

	public function simpanPO($cart,$datapo){
		$id = uniqid();
		foreach ($cart as $key) {
			$this->db->insert('po',$key);
		}
	}

	function changeActiveState($key)
		{
		 $this->load->database();
		 $data = array(
		 'value' => 1
		 );

		 $this->db->where('md5(username)', $key);
		 $this->db->update('user', $data);

		 return true;
		}
}


?>