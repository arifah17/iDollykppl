<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Kos_model_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('Model');
        $this->MyController = $this->CI->Model;
    }
    
}

