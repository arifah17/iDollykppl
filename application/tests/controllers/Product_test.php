<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product_test
 *
 * @author user
 */
class Product_test extends TestCase{
    //put your code here
    public function setUp(){
        $this->resetInstance();
        $this->CI->load->model('Mproduct');
        $this->objl = $this->CI->Mproduct;
        $this->form_validation = new CI_Form_Validation();
    }
    public function test_index(){
        $_SESSION['username'] = 'pbw';
        $_SESSION['role'] = 'admin';
        $output = $this->request('GET','product/index');
        $this->assertContains('<h1 class="page-header">Product</h1>', $output); 
    }
}
