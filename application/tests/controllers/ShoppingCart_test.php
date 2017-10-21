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
        $start = $this->cart->total_items() ;
        $this->request('POST','ShoppingCart/beli/1');
        $finish = $this->cart->total_items() ;
        $this->assertEquals($finish, $start+1);
        //ngitung isi cart awal
        //tambah cart
        //ngitung cart akhir pakek assert equal
    }
}
