<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//coba ajas
class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('adminm');
		$this->load->model('mproduct');
	}
	public function index()
	{
		$data['err_message'] = ""; //untuk load controllet ke view biasanya data butuh dibuat array, didfunction loginalam array data tersembut ada error message.
		$this->load->view('admin/Loginadm');
	}

	function admin(){
		$this->usertable();
	}

	function tabpesanan(){
			$data = $this->mproduct->getPesanan();
			$this->load->view('admin/navigation');
			$this->load->view('admin/tabpesanan', array('data'=>$data));
	}

	function updateStatus($ID){
		$this->mproduct->updateOrder($ID);
		$this->tabpesanan();
	}

	function usertable(){
			$data = $this->adminm->getDataUser();
			$this->load->view('admin/navigation');
			$this->load->view('admin/usertable',array('data' => $data));
	}

	function updateAuthen($username){
		$this->adminm->update($username);
		$this->usertable();
	}

	function login(){
		$username = $this->input->post('username');
		$enpass = $this->input->post('pass');
		$password = sha1($enpass);
		//get data
		$isLogin = $this->adminm->login_authen($username,$password);
		$i=$this->adminm->authen_user($username);

		if($isLogin->num_rows()==1 ){
			foreach($isLogin->result()as $user){
			$session_data = array(
						'username'	=> $username,
                                                'role'          => 'admin',
						'logged_in'	=> TRUE
						);
			$this->session->set_userdata($session_data);
			}

			$this->admin($username);
		}
		else{
				//i di return dalam array 2 dimensi
				$this->adminm->wrong_password($username, $i[0]['authentication']+1);
				$data['err_message'] = "GAGAL LOGIN!".($i[0]['authentication']+1); //untuk load controllet ke view biasanya data butuh dibuat array, didalam array data tersembut ada error message.
				$this->load->view('admin/Loginadm', $data);
		
		}

	}
	function logout(){
                $this->session->unset_userdata('username');
		$this->session>session_destroy();
		redirect('admin/index()');
	}
	
}
