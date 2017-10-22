<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShoppingCart_test
 *
 * @author user
 */
class ShoppingCart_test extends TestCase {
    //put your code here
     public function setUp(){
        $this->resetInstance();
        $this->CI->load->model('model');
        $this->CI->load->model('Mpesan');
        $this->objl = $this->CI->model;
        $this->pesan = $this->CI->Mpesan;
        $this->cart = $this->CI->load->library('cart');
    }
    public function test_beli(){
        $_SESSION['username'] = 'haloki';
        $start = $this->CI->cart->total_items() ;
        $this->request('POST','ShoppingCart/beli/1');
        $finish = $this->CI->cart->total_items() ;
        $actual = $finish - $start;
        $this->assertEquals($actual,1);
        //ngitung isi cart awal
        //tambah cart
        //ngitung cart akhir pakek assert equal
    }
    public function test_clear_cart(){
        $_SESSION['username']='haloki';
        $this->request('POST','ShoppingCart/beli/1');
        $this->request('POST','ShoppingCart/clear_cart');
        $finish = $this->CI->cart->total_items();
        $this->assertEquals($finish,0);
        $this->assertRedirect('Home/menulog');
    }
    public function test_addOrder(){
        $_SESSION['username']='haloki';
        $this->request('POST','ShoppingCart/beli/1');
        $this->request('POST','ShoppingCart/beli/2');
        $this->request('POST','ShoppingCart/addOrder',[
            'tanggal' => '17 juni 2017',
            'alamat' => 'jalan joyo indah lamongan'
        ]);
        $this->assertRedirect('Home/menulog');
        
    } 
}
