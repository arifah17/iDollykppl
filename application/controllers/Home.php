<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('model');
		$this->load->library('email');
	}

	function home(){
		$this->load->view('sesudah/index');
	}
	public function menu(){
		$data['data'] = $this->model->getProduct();
		$this->load->view('sebelum/header');
		$this->load->view('sebelum/menu',$data);
		$this->load->view('sebelum/footer');
	}

	public function visitdol(){
		$this->load->view('sebelum/header');
		$this->load->view('sebelum/visit');
		$this->load->view('sebelum/footer');
	}
        
       public function visitdollog(){
		$this->load->view('sesudah/header');
		$this->load->view('sebelum/visit');
		$this->load->view('sesudah/footer');
	}

	public function aboutus(){
		$this->load->view('sebelum/header');
		$this->load->view('sebelum/aboutus');
		$this->load->view('sebelum/footer');
	}

	public function mailus(){
		$this->load->view('sebelum/header');
		$this->load->view('sebelum/mail');
		$this->load->view('sebelum/footer');
	} 

	public function makanan(){
		$data['data'] = $this->model->getProduct0();
		$this->load->view('sesudah/header');
		$this->load->view('sesudah/menu',$data);
		$this->load->view('sesudah/footer');
	}

	public function menulog(){
		$data['data'] = $this->model->getProduct();
		$this->load->view('sesudah/header');
		$this->load->view('sesudah/menu',$data);
		$this->load->view('sesudah/footer');
	}

	public function kain(){
		$data['data'] = $this->model->getProduct1();
		$this->load->view('sesudah/header');
		$this->load->view('sesudah/menu',$data);
		$this->load->view('sesudah/footer');
	}

	public function sepatu(){
		$data['data'] = $this->model->getProduct2();
		$this->load->view('sesudah/header');
		$this->load->view('sesudah/menu',$data);
		$this->load->view('sesudah/footer');
	}

	public function aboutuslog(){
		$this->load->view('sesudah/header');
		$this->load->view('sesudah/aboutus');
		$this->load->view('sesudah/footer');
	}
	public function mailuslog(){
		$this->load->view('sesudah/header');
		$this->load->view('sesudah/mail');
		$this->load->view('sesudah/footer');
	}
	public function pesan(){
		$this->load->view('sesudah/Checkout2');
	}
	public function order(){
		$this->load->view('sesudah/Order');
	}

	}
?>