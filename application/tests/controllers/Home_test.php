<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Home_test extends TestCase
{
        public function test_home(){
            $_SESSION['username'] = "haloki";
            $output = $this->request('GET', 'Home/home');
            $this->assertContains('<title>iDolly</title>', $output);   
        }

        public function test_menu()
	{
		$output = $this->request('GET', 'Home/menu');
		$this->assertContains('<h3 class="w3_agile_head">Our Product</h3>', $output);
	}
        

        public function test_makanan()
	{
                $_SESSION['username'] = "haloki";
                //$_SESSION['logged_in'] = TRUE;
		$output = $this->request('GET', 'Home/makanan');
		$this->assertContains('<h3 class="w3_agile_head">Our Product</h3>', $output);
	}
        
        public function test_makanan_menu()
	{
                $_SESSION['username'] = "haloki";
                //$_SESSION['logged_in'] = TRUE;
		$output = $this->request('GET', 'Home/menulog');
		$this->assertContains('<h3 class="w3_agile_head">Our Product</h3>', $output);
	}
        
         public function test_viewKain()
	{
                $_SESSION['username'] = "haloki";
                //$_SESSION['logged_in'] = TRUE;
		$output = $this->request('GET', 'Home/kain');
		$this->assertContains('<h3 class="w3_agile_head">Our Product</h3>', $output);
	}
        
         public function test_viewSepatu()
	{
                $_SESSION['username'] = "haloki";
                //$_SESSION['logged_in'] = TRUE;
		$output = $this->request('GET', 'Home/sepatu');
		$this->assertContains('<title>iDolly</title>', $output);
	}
        
        public function test_aboutuslog(){
                $_SESSION['username'] = "haloki";
                //$_SESSION['logged_in'] = TRUE;
		$output = $this->request('GET', 'Home/aboutuslog');
		$this->assertContains('<title>iDolly</title>', $output);
        }
        
        public function test_aboutus(){
                //$_SESSION['username'] = "haloki";
                //$_SESSION['logged_in'] = TRUE;
		$output = $this->request('GET', 'Home/aboutus');
		$this->assertContains('<title>iDolly</title>', $output);
        }
              
        public function test_pesan(){
                $_SESSION['username']='haloki';
                $output = $this->request('GET', 'Home/pesan');
		$this->assertContains('<title>iDolly</title>', $output);
        }
        
        public function test_order(){
                $_SESSION['username']='haloki';
                $output = $this->request('GET', 'Home/order');
		$this->assertContains('<title>iDolly</title>', $output);
        }

 
	public function test_method_404()
	{
		$this->request('GET', 'welcome/method_not_exist');
		$this->assertResponseCode(404);
	}

	public function test_APPPATH()
	{
		$actual = realpath(APPPATH);
		$expected = realpath(__DIR__ . '/../..');
		$this->assertEquals(
			$expected,
			$actual,
			'Your APPPATH seems to be wrong. Check your $application_folder in tests/Bootstrap.php'
		);
	}
}
