<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('model');
	}
	public function index()
	{
		//$data['err_message'] = ""; //untuk load controllet ke view biasanya data butuh dibuat array, didfunction loginalam array data tersembut ada error message.
		$this->load->view('sebelum/index');
	}
	function home(){
		$this->load->view('sebelum/index');
	}
	function homee(){
		$this->load->view('sesudah/index');
	}
	function login(){
		$username = $this->input->post('username');
		$enpass = $this->input->post('pass');
		$password = md5($enpass);
		//get data
		$isLogin = $this->model->login_authen($username,$password);
		$i=$this->model->authen_user($username);
		if($isLogin->num_rows()==1 && $i[0]['authentication']< 3 ){
			foreach ($isLogin->result()as $user) {
                            $session_data = array(
						'username'	=> $username,
						'logged_in'	=> TRUE
						);
			//$user_sess['username'] = $user->username;
			$this->session->set_userdata($session_data);
			}
			$this->homee($username);
		}
		else{
			if($i[0]['authentication']< 3){
				//i di return dalam array 2 dimensi
				$this->model->wrong_password($username, $i[0]['authentication']+1);
				$data['err_message'] = "GAGAL LOGIN!".($i[0]['authentication']+1); //untuk load controllet ke view biasanya data butuh dibuat array, didalam array data tersembut ada error message.
				$this->load->view('sebelum/index');
                                redirect(base_url('MyController/home'));
			}
			else{
				$data['err_message'] = "AKUN TERBLOCKIR"; //untuk load controllet ke view biasanya data butuh dibuat array, didalam array data tersembut ada error message.
                                redirect(base_url('MyController/home'));
			}
		
		}


	}
	function aksi(){
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[5]|max_length[200]');
		$this->form_validation->set_rules('phone','Phone','trim|required|is_natural');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules(
        'username', 'Username',
        'required|min_length[5]|max_length[12]|is_unique[user.username]',
        array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        ));
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('confirmpw','Confirmpw','required|matches[password]');
		$this->form_validation->set_message('name','required min length 5 max length 100');
		$this->form_validation->set_message('confirmpw','The Confirm password doesnt match password');
		if($this->form_validation->run() != false){
			$this->createakun();
		}else{
			$this->load->view('sebelum/index.php');
		}
	}


	function createakun(){
		$passen = $this->input->post('password');
		 $email = $this->input->post('email');
		$newpass = md5($passen);
		$data = array(
				'username' => $this->input->post('username'),
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'password'=> $newpass,
				'address' => $this->input->post('address'),
				'value' => 0
			);
		
		$username = $this->model->addAkun($data);
		//$this->index();

			$encrypted_id = md5($username);
	  
		    $this->load->library('email');
		    $config = array();
		    $config['charset'] = 'utf-8';
		    $config['useragent'] = 'Codeigniter';
		    $config['protocol']= "smtp";
		    $config['mailtype']= "html";
		    $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
		    $config['smtp_port']= "465";
		    $config['smtp_timeout']= "400";
		    $config['smtp_user']= "idollysurabaya@gmail.com"; // isi dengan email kamu
		    $config['smtp_pass']= "idollysurabaya123"; // isi dengan password kamu
		    $config['crlf']="\r\n"; 
		    $config['newline']="\r\n"; 
		    $config['wordwrap'] = TRUE;
		    //memanggil library email dan set konfigurasi untuk pengiriman email
		   
		    $this->email->initialize($config);
		    //konfigurasi pengiriman
		    $this->email->from($config['smtp_user']);
		    $this->email->to($email);
		    $this->email->subject("Verifikasi Akun");
		    $this->email->message(
		     "terimakasih telah melakuan registrasi di Web iDolly, untuk memverifikasi silahkan klik tautan dibawah ini<br><br>".
		      site_url("MyController/verification/$encrypted_id")
		    );
		  
		    if($this->email->send())
		    {
		       $this->load->view('sebelum/header');
		       $this->load->view('sebelum/verif2');
		       $this->load->view('sebelum/footer');
		    }else
		    {
		       echo "Berhasil melakukan registrasi, namun gagal mengirim verifikasi email";
		    }

		}

		public function verification($key)
			{
			 $this->load->helper('url');
			 $this->load->model('model');
			 $this->model->changeActiveState($key);
			 $this->load->view('sebelum/header');
			 $this->load->view('sebelum/verif');
			 $this->load->view('sebelum/footer');
			}


	function logout(){
		$this->session->unset_userdata('username');
		$this->session>session_destroy();
		redirect(base_url('MyController/home'));
	}
}
