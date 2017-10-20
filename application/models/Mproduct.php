<?php
class mproduct extends CI_Model{
	function getKategori() {
		$query = $this->db->get('categori');
		return $query->result_array();
	}
	function getProduct(){
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('categori', 'product.kategori = categori.id_cat');
		$data = $this->db->get();
		return $data->result_array();
	}
	function addPro($namaTabel, $data) {
		$this->db->insert($namaTabel, $data);
	}
	public function DeleteProduct($namaTabel,$pk){
		$ins = $this->db->query("DELETE FROM `".$namaTabel."` WHERE `".$namaTabel."`.`id` = ".$pk."");
		return $ins;
	}
	public function getUpdate($namaTabel,$pk){
		$data = $this->db->get_where($namaTabel,$pk);
		return $data->result_array();
	}
	public function update($table,$pk,$data){
		$this->db->update($table,$data,$pk);
	}

	public function getPesanan(){
		$this->db->select('*');
		$this->db->join('order','detailorder.orderid=order.ID')->join('user', 'order.user=user.username')->join('product','detailorder.kodeproduct=product.id');
		$query = $this->db->get('detailorder');
		return $query->result_array();
	}

	public function updateOrder($ID){
		$this->db->set('status','Done');
		$this->db->where('ID',$ID);
		$this->db->update('order');
	}

}
?>