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
        public function test_addProduct_gagal(){
        $_SESSION['username'] = 'pbw';
        $_SESSION['role'] = 'admin';
        $filename = '';
        $filepath = APPPATH.'coba/'.$filename;
        $files = ['gambar' => [
            'name' => $filename,
            'type' => 'image/png',
            'tmp_name' => $filepath
        ]];
        $this->request->setFiles($files);
        $totalrow = $this->objl->getTotalRow('21','ini nyoba gagal','coba coba gagal','5000','3','');
        $this->request('POST','Product/addProduct',
        ['id'=>'',
         'nama_product'=>'ini nyoba gagal',
         'deskripsi'=>'coba coba gagal',
         'harga'=>'5000',
          'kategori'=>'3',
         'gambar' => ''
        ]);
        $totalRowafter = $this->objl->getTotalRow('21','ini nyoba gagal','coba coba gagal','5000','3','');
        $this->assertEquals($totalRowafter,$totalrow);
    }
    
    public function test_addProduct(){
        $_SESSION['username'] = 'pbw';
        $_SESSION['role'] = 'admin';
        $filename = '3.png';
        $filepath = APPPATH.'coba/'.$filename;
        $files = ['gambar' => [
            'name' => $filename,
            'type' => 'image/png',
            'tmp_name' => $filepath
        ]];
        $this->request->setFiles($files);
        $totalrow = $this->objl->getTotalRow('20','ini nyoba juga','coba coba lagi','5000','3','3.png');
        $output = $this->request('POST','Product/addProduct',
        ['id'=>'20',
         'nama_product'=>'ini nyoba juga',
         'deskripsi'=>'coba coba lagi',
         'harga'=>'5000',
         'kategori'=>'3',
         'gambar' =>'3.png']);
        $totalRowafter = $this->objl->getTotalRow('20','ini nyoba juga','coba coba lagi','5000','3','3.png');
        $this->assertEquals($totalRowafter,$totalrow+1);
        $this->objl->deleteRow('20','ini nyoba juga','coba coba lagi','5000','3','3.png');
        $this->assertRedirect('Product/readProduct');
    }
    
    
   public function test_do_delete(){
        $_SESSION['username'] = 'pbw';
        $_SESSION['role'] = 'admin';
        $pid = '26';//24,25,26,27
        $awal = $this->CI->db->count_all_results('product',array('id'=>$pid));
        $output = $this->request('POST','product/do_delete/'.$pid);
        $akhir = $this->CI->db->count_all_results('product',array('id'=>$pid));
        $this->assertEquals($awal-$akhir,1);
        $this->assertRedirect('Product/readProduct');
    }
    
    public function test_do_update(){
        $_SESSION['username'] = 'pbw';
        $_SESSION['role'] = 'admin';
        $id = '14';
        $output = $this->request('POST','product/do_update/'.$id);
        $this->assertContains('<title>Update product Panel</title>',$output);
    }
    
    public function test_Updatedata_tanpaFoto(){
        $_SESSION['username'] = 'pbw';
        $_SESSION['role'] = 'admin';
        $id = '14';
        $filename = '';
        $filepath = APPPATH.'coba/'.$filename;
        $files = ['gambar' => [
            'name' => $filename,
            'type' => 'image/png',
            'tmp_name' => $filepath
        ]];
        $this->request->setFiles($files);
        $totalrow = $this->objl->getTotalRow($id,'ini nyoba update','coba coba lagi','5000','3','');
        $this->request('POST','Product/Updatedata/'.$id,
        ['id'=>$id,
         'nama_product'=>'ini nyoba update',
         'deskripsi'=>'coba coba lagi',
         'harga'=>'5000',
         'kategori'=>'3',
         'gambar' => '']);
        $totalRowafter = $this->objl->getTotalRow($id,'ini nyoba update','coba coba lagi','5000','3','');
        $this->request($totalRowafter,$totalrow);
    }
}
