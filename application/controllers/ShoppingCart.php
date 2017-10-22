<?php
	/**
	* 
	*/
	class ShoppingCart extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('model');
			$this->load->model('Mpesan');
		}
		public function beli($id_product){
			$pro = $this->model->getBarang($id_product);
			$data = array(
				'id' => $pro->id,
				'qty'=>1,
				'price' =>$pro->harga,
				'name' =>$pro->nama_product
				);
			$this->cart->insert($data);
			print_r($data);
			redirect('/Home/menulog');}

		/*function delete($rowid){
		$this->cart->update(array('rowid' => $rowid, 'qty' => 0));
		redirect(base_url('/Home/menulog'));
		}*/

		public function clear_cart()
			{
				$this->cart->destroy();
				redirect('Home/menulog');}

		public function addOrder() {
		$alamat = $this->input->post('alamat');
		$tanggal = $this->input->post('tanggal');
	        $Customer = $this->session->userdata('username');
	        $isProcessed = $this->Mpesan->process($Customer,$alamat,$tanggal);
	        if($isProcessed) {
	            $this->cart->destroy();
	            redirect('Home/menulog');
	        } else {
	            $this->session->set_flashdata('error', 'Maaf, order Anda tidak dapat diproses');
	        }

    }


		

	}
?>