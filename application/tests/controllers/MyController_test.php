<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MyController_test extends TestCase
{
    public function setUp(){
        $this->resetInstance();
        $this->CI->load->model('model');
        $this->objl = $this->CI->modelcontrol;
    }

    public function test_index(){
       $output = $this->request('GET', 'MyController/index');
       $this->assertContains('<title>iDolly</title>', $output); 
    }
    public function test_home(){
       $output = $this->request('GET', 'MyController/home');
       $this->assertContains('<title>iDolly</title>', $output); 
    }
    
    public function test_login(){
       //$this->assertFalse( isset($_SESSION['username']) );
        $this->request('POST', ['MyController','login'],
            [
                'username' => 'haloki',
                'pass' => 'halohalo',
            ]);
        //$this->assertRedirect('');
        $this->assertEquals('haloki', $_SESSION['username']);
    }
    
    public function test_login_kosong(){
        $this->request('POST', ['MyController','login'],
            [
                'username' => '',
                'pass' => '',
            ]);
        $this->assertRedirect(base_url('MyController/home'));
        $this->assertFalse( isset($_SESSION['username']) );
    }

        public function test_login_gagal(){
        $this->request('POST', ['MyController','login'],
            [
                'username' => 'haloki',
                'pass' => 'unmatch',
            ]);
        $this->assertRedirect(base_url('MyController/home'));
        $this->assertFalse( isset($_SESSION['username']) );
    }

     public function test_logout(){
        $_SESSION['username'] = "haloki";
        $this->assertTrue( isset($_SESSION['username']) );
        $this->request('GET', 'MyController/logout');
        $this->assertRedirect(base_url('MyController/home'));
        $this->assertFalse( isset($_SESSION['username']) );
    }
    
    /*public function test_createuser(){
        $totalrow=$this->objl->getTotalRow('halodea','dea oct','ochadea12@gmail.com', '085674561210', 'halodea1', 'keputih gang 1', '0');
        $output = $this->request('POST','MyController/aksi',
                ['name'=>'dea oct',
                'phone'=>'085674561210',
                'address'=>'keputih gang 1',
                'email'=>'ochadea12@gmail.com',
                'username'=>'halodea',
                'password'=>'halodea1',
                'confirmpw'=>'halodea1']);
        $totalrowafter= $this->objl->getTotalRow('halodea','dea oct','ochadea12@gmail.com', '085674561210', 'halodea1', 'keputih gang 1', '0');
        $this->assertEquals($totalrowafter,$totalrow+1);
    }*/
    
    
    public function test_method_404()
	{
		$this->request('GET', 'welcome/method_not_exist');
		$this->assertResponseCode(404);
	}

	public function test_APPPATH()
	{
		$actual = realpath(APPPATH);
		$expected = realpath(__DIR__ . '/../..');
		$this->assertEquals(
			$expected,
			$actual,
			'Your APPPATH seems to be wrong. Check your $application_folder in tests/Bootstrap.php'
		);
	}
}
