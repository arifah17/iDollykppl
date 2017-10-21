<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Crud_artikel_test extends TestCase
{
	public function setUp()
        {
            $this->resetInstance(); //hard reset. 
            $this->CI->load->model('model');
            $this->objek = $this->CI->model;
            $this->form_validation = new CI_Form_validation();
             
        }
     public function test_createuser(){
        $totalrow=$this->objl->getTotalRow('halodea','dea oct','ochadea12@gmail.com', '085674561210', 'halodea1', 'keputih gang 1');
        $this->request('POST','MyController/aksi',
                ['name'=>'dea oct',
                'phone'=>'085674561210',
                'address'=>'keputih gang 1',
                'email'=>'ochadea12@gmail.com',
                'username'=>'halodea',
                'password'=>'halodea1',
                'confirmpw'=>'halodea1']);
        $totalrowafter= $this->objl->getTotalRow('halodea','dea oct','ochadea12@gmail.com', '085674561210', 'halodea1', 'keputih gang 1');
        $this->assertEquals($totalrowafter,$totalrow+1);
        $this->objl->deleteRow('halodea','dea oct','ochadea12@gmail.com', '085674561210', 'halodea1', 'keputih gang 1');
    }
       
  /*      public function test_index()
        {
            $_SESSION['username'] = "admin";
            $_SESSION['group'] = 2;
            $_SESSION['logged_in'] = TRUE;
               $output = $this->request('GET', 'Crud_artikel');
        }
        
        public function test_indexNoSession()
        {
            $output = $this->request('GET', 'Crud_artikel');
        }
        
        public function test_indexWrongSession()
        {
            $_SESSION['group'] = 1;
            $_SESSION['logged_in'] = TRUE;
               $output = $this->request('GET', 'Crud_artikel');
        }
        
                public function test_adminTabelEvent()
        {
            $_SESSION['username'] = "admin";
            $_SESSION['group'] = 2;
            $_SESSION['logged_in'] = TRUE;
                    $output = $this->request('GET', 'Crud_artikel/adminTabelEvent');
//            $this->assertContains('<title>Fifa - Futsal</title>', $output);
            
        }
//            
            public function test_delete(){
                $_SESSION['username'] = "admin";
            $_SESSION['group'] = 2;
            $_SESSION['logged_in'] = TRUE;
                $result = $this->objek->getTestId();
                $id = 0;
                foreach ($result as $data)
                {
                    $id = $data['id'];
                }
                $awal = $this->objek->getNumRow($id);
                $this->assertEquals(1,$awal);
                $url = "crud_artikel/do_delete/".$id;
                $output = $this->request('GET',$url);
                $akhir = $this->objek->getNumRow($id);
                $this->assertEquals(0,$akhir);
            }
            */
}
