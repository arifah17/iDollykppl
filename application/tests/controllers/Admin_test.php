<?php
class  Admin_test extends TestCase{
    public function setUp(){
        $this->resetInstance();
        $this->CI->load->model('Adminm');
        $this->CI->load->model('Mproduct');
        $this->objl = $this->CI->Adminm;
        $this->prd = $this->CI->Mproduct;        
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
        //$this->assertRedirect('admin/index');
        $this->assertFalse( isset($_SESSION['username']) );
    }
    
    public function test_admin_login_nopassword(){
        $this->request('POST', ['admin','login'],
            [
                'username' => 'pbw',
                'pass' => '',
            ]);
        //$this->assertRedirect('admin/index');
        $this->assertFalse( isset($_SESSION['username']) );
    }
    
    public function test_tabpesanan(){
        $_SESSION['username'] = 'pbw';
        $_SESSION['role'] = 'admin';
        $output = $this->request('GET', 'admin/tabpesanan');
	$this->assertContains('<title>Order Panel</title>', $output);
    }
    
    
    public function test_updateStatus(){
        $_SESSION['username'] = 'pbw';
        $_SESSION['role'] = 'admin';
        $id = '12539';
        $this->request('GET', 'Admin/updateStatus/42771');
        $this->assertRedirect('Admin/tabpesanan'); 
    }
    
    public function test_logout(){
        $_SESSION['username'] = "pbw";
        $_SESSION['role']= "admin";
        $this->assertTrue( isset($_SESSION['username']) );
        $this->request('GET', 'admin/logout');
        $this->assertRedirect('admin/index()');
        $this->assertFalse( isset($_SESSION['username']) );
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

