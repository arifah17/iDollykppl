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

        public function getTotalRow($id, $nama_product, $deskripsi, $harga, $kategori){
            $this->db->where('id',$id);
            $this->db->where('nama_product',$nama_product);
            $this->db->where('deskripsi',$deskripsi);
            $this->db->where('harga',$harga);
            $this->db->where('kategori',$kategori);
            $this->db->from('product');
            $query= $this->db->get();
            return $query->num_rows();
        }
        
        public function deleteRow($id, $nama_product, $deskripsi, $harga, $kategori){
            $this->db->where('id',$id);
            $this->db->where('nama_product',$nama_product);
            $this->db->where('deskripsi',$deskripsi);
            $this->db->where('harga',$harga);
            $this->db->where('kategori',$kategori);
            $this->db->delete('product');
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
        
        /*public function getStatusOrder(){
            $this->db
        }*/

}
?>