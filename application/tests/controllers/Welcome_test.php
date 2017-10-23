<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Welcome_test extends TestCase
{
    
        public function setUp()
        {
            $this->resetInstance();
            $this->CI->load->model('My_Model');
            $this->obj = $this->CI->My_Model;
            $this->form_validation = new CI_Form_validation();
        }
        
        public function test_index()
        {
            $output = $this->request('GET', 'My_Controller');
            $this->assertContains('<nav role="navigation" class="navbar navbar-default" id="plydheader">', $output);
        }
        
        // L O G I N --- L O G O U T//
        
        public function test_submit_masuk_nousername()
        {
            $output = $this->request('POST', 'My_Controller/login_admin',
                [
                    'username' => '',
                    'password' => '123'
                ]);
            $this->assertContains('<title>Login Form</title>', $output);
            $this->assertFalse( isset($_SESSION['username']) );
        }
        
        public function test_submit_masuk_nopassword()
        {
            $output = $this->request('POST', 'My_Controller/login_admin',
                [
                    'username' => 'admin',
                    'password' => ''
                ]);
            $this->assertContains('<title>Login Form</title>', $output);
            $this->assertFalse( isset($_SESSION['username']) );
        }
    
        public function test_submit_masuk_unmatch()
        {
            $output = $this->request('POST', 'My_Controller/login_admin',
                [
                    'username' => 'admin',
                    'password' => '0000'
                ]);
            $this->assertContains('<title>Login Form</title>', $output);
            $this->assertFalse( isset($_SESSION['username']) );
        }
        
        public function test_submit_masuk_blank()
        {
            $output = $this->request('POST', 'My_Controller/login_admin',
                [
                    'username' => '',
                    'password' => ''
                ]);
            $this->assertContains('<title>Login Form</title>', $output);
            $this->assertFalse( isset($_SESSION['username']) );
        }
        
        public function test_submit_masuk()
        {
            $this->request('POST', 'My_Controller/login_admin',
                [
                    'username' => 'admin',
                    'password' => '123'
                ]);
            $this->assertRedirect('My_Controller/komentar');
            $this->assertEquals('admin', $_SESSION['username']);
        }
        
        public function test_keluar()
        {
            $_SESSION['username'] = "admin";
            $this->request('GET', 'My_Controller/logout');                                                      
            $this->assertRedirect('My_Controller/login');  
        }
        
        
        
        // B U K A  H A L A M A N //
       
        public function test_halamanloginadmin()
        {
            $_SESSION['isLogin'] != "isLogin";
            $output = $this->request('GET', 'My_Controller/login');
            $this->assertContains(' <title>Login Form</title>', $output);
	}
        
        public function test_halamanloginadmin_sudahlogin()
        {
            $_SESSION['isLogin'] = "isLogin";
            $output = $this->request('GET', 'My_Controller/login');
            $this->assertRedirect('My_Controller/admin');
	}
//        
        public function test_halamanHome()
        {
            $output = $this->request('GET', 'My_Controller/index');
            $this->assertContains('<title>P O L A L O Y D  </title>', $output);
	}   
//        
        public function test_halamanGantipassword()
        {
            $output = $this->request('GET', 'My_Controller/changepass');
            $this->assertContains('<title>CHANGE PASS</title>', $output);
        }
        
// 
        public function test_halamanGallery()
        {
            $_SESSION['isLogin'] = "isLogin";
            
            $output = $this->request('GET', 'My_Controller/gallery');                                                      
            $this->assertRedirect('My_Controller/readDataGallery', $output);  
	}  
//        
        public function test_halamanGallery_fail()
        {
            $_SESSION['isLogin'] != "isLogin";
            
            $output = $this->request('GET', 'My_Controller/gallery');                                                      
            $this->assertRedirect('My_Controller/login', $output);  
	}   
        
        public function test_halamanSlider()
        {
            $_SESSION['isLogin'] = "isLogin";
            
            $output = $this->request('GET', 'My_Controller/slider');                                                      
            $this->assertRedirect('My_Controller/readDataSlider', $output);  
	}  
//        
        public function test_halamanSlider_fail()
        {
            $_SESSION['isLogin'] != "isLogin";
            
            $output = $this->request('GET', 'My_Controller/slider');                                                      
            $this->assertRedirect('My_Controller/login', $output);  
	}
//        
        public function test_halamanKomentar()
        {
            $_SESSION['isLogin'] = "isLogin";
            
            $output = $this->request('GET', 'My_Controller/komentar');                                                      
            $this->assertRedirect('My_Controller/readDataKomentar', $output);  
	}  
        
        public function test_halamanKomentar_fail()
        {
            $_SESSION['isLogin'] != "isLogin";
            
            $output = $this->request('GET', 'My_Controller/komentar');                                                      
            $this->assertRedirect('My_Controller/login', $output);  
	}
//        
        public function test_halamanChangepass()
        {
            $_SESSION['isLogin'] = "isLogin";
            
            $output = $this->request('POST', 'My_Controller/admin');                                                      
            $this->assertRedirect('My_Controller/changepass', $output);  
	}  
//        
        public function test_halamanChangepass_fail()
        {
            $_SESSION['isLogin'] != "isLogin";
            
            $output = $this->request('POST', 'My_Controller/admin');                                                      
            $this->assertRedirect('My_Controller/login', $output);  
	}
                  
//        // R E A D  D A T A //      
        public function test_ModelhalamanKomentar()
        {
            $_SESSION['username'] = "admin";
            
            $output = $this->request('GET', 'My_Controller/readDataKomentar');                                                      
            $this->assertContains('<title>KOMENTAR</title>', $output);  
	}  
        
        public function test_ModelhalamanSlider()
        {
            $_SESSION['username'] = "admin";
            
            $output = $this->request('GET', 'My_Controller/readDataSlider');                                                      
            $this->assertContains('<title>SLIDER</title>', $output);  
	}  
        
        public function test_ModelhalamanGallery()
        {
            $_SESSION['username'] = "admin";
            
            $output = $this->request('GET', 'My_Controller/readDataGallery');                                                      
            $this->assertContains('<title>GALLERY</title>', $output);  
	}  
//        
//        // C R E A T E  D A T A //
//        
        public function test_create()
        {
            $_SESSION['isLogin'] = "isLogin";
            $start = $this->obj->getCurrentRow();
            $output = $this->request('POST', 'My_Controller/create',
                    [
                    'Name' => 'tes',
	            'Email' => '12345673@gmail.com',
	            'No_Telp' => '088812349876',
	            'Message' => 'coba'   
                    ]);
            $finish = $this->obj->getCurrentRow();
            $expected = $finish - $start;
            $this->assertEquals(1,$expected);
            
        }
        
        // TEST DELETE //
        
        public function testdelete(){
                $_SESSION['username'] = "admin";
		$mula = $this->obj->getCurrentRow();
		$id = 11;
		$result = $this->obj->getDataKomentar('aedfaf');
		foreach ($result as $x){
			$ID = $x['komentar'];
		}
		$url = 'My_Controller/deletekomentar/'.$ID;
		$output = $this->request('GET', $url);
		$akhir = $this->obj->getCurrentRow();
	    $expected = $mula - $akhir;
	    $this->assertEquals(1, $expected);
	}
        
        // M O D E L  A D D  D A T A //
        
//        public function test_modelKomentar()
//        {
//            $start = $this->CI->db->count_all_results('komentar');
//            $data = array(
//                    'Name' => 'contohhh',
//	            'Email' => '123@gmail.com',
//	            'No_Telp' => '088812349876',
//	            'Message' => 'testttttt'    
//                    );
//            $this->obj->addDataKomentar($data);
//            $finish = $this->CI->db->count_all_results('komentar');
//            $expected = $finish - $start;
//            $this->assertEquals(1,$expected);
//        }
//        
//        public function test_modelSlider()
//        {
//            $start = $this->CI->db->count_all_results('slider');
//            $data = array(
//                    'caption_slider' => 'test caption',
//	            'gambar_slider' => 'none'
//                    );
//            $this->obj->addDataSlider($data);
//            $finish = $this->CI->db->count_all_results('slider');
//            $expected = $finish - $start;
//            $this->assertEquals(1,$expected);
//        }
//        
//        public function test_modelGallery()
//        {
//            $start = $this->CI->db->count_all_results('gallery');
//            $data = array(
//                    'caption_gallery' => 'test caption gallery',
//	            'occasion_gallery' => 'occasion',
//	            'gambar_gallery' => 'none',
//	            'keterangan_gallery' => 'keterangannnn'
//                    );
//            $this->obj->addDataGallery($data);
//            $finish = $this->CI->db->count_all_results('gallery');
//            $expected = $finish - $start;
//            $this->assertEquals(1,$expected);
//        }
        
}
