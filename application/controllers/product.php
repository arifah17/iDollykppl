<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	public function __construct() {

		parent::__construct();
		$this->load->model('mproduct');
                
	}
        
        function index(){
                        $data = $this->mproduct->getKategori();
			$dpro = $this->mproduct->getProduct();
			$this->load->view('admin/navigation');
			$this->load->view('admin/tabproduct',array('data'=>$data));
        }
	
	function addProduct() {
		$id_product = $_POST['id'];
		$nama_product = $_POST['nama_product'];
		$deskripsi = $_POST['deskripsi'];
		$harga = $_POST['harga'];
		$kategori = $_POST['kategori'];

		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		//$config['max_size'] = 100;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if(!$this->upload->do_upload('gambar')){
			 $error = array('error' => $this->upload->display_errors());
                        $this->load->view('admin/tabproduct', $error);
		}
		else{
			$data_insert = array(
			'id' => $id_product,
			'nama_product' => $nama_product,
			'deskripsi' => $deskripsi,
			'harga' => $harga,
			'kategori' => $kategori,
			'gambar' => $this->upload->data('file_name')
			);
		$isi = $this->mproduct->addPro('product', $data_insert);
                redirect('Product/readProduct');
		}
	}
	function readProduct() {
		$data = $this->mproduct->getProduct();
		$this->load->view('admin/navigation');
		$this->load->view('admin/admprod', array('data' => $data));
	}

	public function do_delete($id)	{
		//$pk = array('kode_barang'=>$kode_barang);
		$del = $this->mproduct->DeleteProduct('product',$id);
			redirect('Product/readProduct');}

	public function do_update($id){
		$pk = array('id'=>$id);
		$ubah = $this->mproduct->getUpdate('product',$pk);
		$kategori = $this->mproduct->getKategori();
		$data = array(
			'id'=> $ubah[0]['id'],
			'nama_product'=> $ubah[0]['nama_product'],
			'deskripsi'=> $ubah[0]['deskripsi'],
			'harga'=> $ubah[0]['harga'],
			'kategori'=> $ubah[0]['kategori'],
			'gambar'=>$ubah[0]['gambar']
			);
		
		$this->load->view('admin/navigation');
		$this->load->view('admin/pro_update',$data);

	}

	public function Updatedata($id){

		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_width'] = 1024;
		$config['max_height'] = 768;

		$idpro = $_POST['id'];
		$nama_product = $_POST['nama_product'];
		$deskripsi = $_POST['deskripsi'];
		$harga = $_POST['harga'];
		$image = $this->input->post('gambar');

		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		$this->upload->do_upload('gambar');

		$Udata =  array(
				'id'=> $idpro,
				'nama_product'=>$nama_product,
				'deskripsi' => $deskripsi,
				'harga' => $harga,
				'gambar' => $this->upload->data('file_name'));
		$pk = array('id'=>$idpro);
		$this->mproduct->update('product',$pk,$Udata);
		redirect ('Product/readProduct');}
}
?>