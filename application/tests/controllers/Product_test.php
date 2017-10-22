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
        $this->assertContains('Add Product', $output); 
    }
    
    public function test_readProduct(){
        $_SESSION['username'] = 'pbw';
        $_SESSION['role'] = 'admin';
        $output = $this->request('GET','Product/readProduct');
        $this->assertContains('<title>Product List</title>', $output); 
    }
    
    /*public function test_addProduct(){
        $_SESSION['username'] = 'pbw';
        $_SESSION['role'] = 'admin';
        $output = $this->request('POST','Product/addProduct',
                'id'=>'',
                'nama_product'=>'',
                'deskripsi'=>'',
                'harga'=>'',
                'kategori'=>'',
                );
        
    }*/
    
    public function test_do_delete(){
        $_SESSION['username'] = 'pbw';
        $_SESSION['role'] = 'admin';
        $pid = '13';
        $awal = $this->CI->db->count_all_results('product',array('id'=>$pid));
        $output = $this->request('POST','product/do_delete/13');
        $akhir = $this->CI->db->count_all_results('product',array('id'=>$pid));
        $this->assertEquals($awal-$akhir,1);
        $this->assertRedirect('product/readProduct');
    }
}
