<?php
class  Admin_test extends TestCase{
    public function setUp(){
        $this->resetInstance();
        $this->CI->load->model('model');
        $this->objl = $this->CI->Adminm;        
    }
    public function test_index()
	{
		$output = $this->request('GET', 'admin/index');
		$this->assertContains('<title>iDolly Admin Login Panel</title>', $output);
	}
    
    public function test_admin_login(){
        $this->request('POST', ['admin','login'],
            [
                'username' => 'pbw',
                'pass' => 'pbw',
            ]);
        //$this->assertRedirect('');
        $this->assertEquals('pbw', $_SESSION['username']);
    } 
    
    public function test_admin_login_fail(){
        $this->request('POST', ['admin','login'],
            [
                'username' => 'pbw',
                'pass' => 'unmatch',
            ]);
        //$this->assertRedirect('sebelum/index');
        $this->assertFalse( isset($_SESSION['username']) );
    }
    
    public function test_tabpesanan(){
        $_SESSION['username'] = 'pbw';
        $_SESSION['role'] = 'admin';
        $output = $this->request('GET', 'admin/tabpesanan');
	$this->assertContains('<title>Order Panel</title>', $output);
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

