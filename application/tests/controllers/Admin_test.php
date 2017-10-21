<?php
class  Admin_test extends TestCase{
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
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

