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
            $_SESSION['username'] = "admin";
            $this->request('GET', 'My_Controller/login');
            $this->assertRedirect('My_Controller/admin');
	}
        
        public function test_halamanloginadmin_fail()
        {
            $output = $this->request('GET', 'My_Controller/login');
            $this->assertContains('<title>Login Form</title>', $output);
	}
        
        public function test_halamanloginadmin_else()
        {
            $_SESSION['isLogin'] = false;
            $output = $this->request('GET', 'My_Controller/login_admin');
            $this->assertContains("<script> alert('Username atau Password yang anda masukkan salah!') </script>", $output);
	}
        
        public function test_halamanHome()
        {
            $output = $this->request('GET', 'My_Controller/index');
            $this->assertContains('<title>P O L A L O Y D  </title>', $output);
	}
        
        public function test_halamanKomentar()
        {
            $_SESSION['username'] = "admin";
            
            $output = $this->request('GET', 'My_Controller/komentar');                                                      
            $this->assertRedirect('My_Controller/readDataKomentar', $output);  
	}  
        
        public function test_halamanKomentar_fail()
        {
//            $_SESSION['username'] != "admin";
            
            $output = $this->request('GET', 'My_Controller/komentar');                                                      
            $this->assertRedirect('My_Controller/login', $output);  
	}
        
        
           
        // R E A D  D A T A //
        
        public function test_modelHalamanKomentar()
        {
            $_SESSION['username'] = "admin";
            
            $output = $this->request('GET', 'My_Controller/readDataKomentar');                                                      
            $this->assertContains('<title>KOMENTAR</title>', $output);  
	}  
        
        public function test_controllerAdmin()
	{
            $_SESSION['username'] = "admin";
            $this->request('GET', 'My_Controller/admin');
            $this->assertRedirect('My_Controller/komentar');
	}
        
        public function test_controllerAdmin_fail()
	{
            $this->request('GET', 'My_Controller/admin');
            $this->assertRedirect('My_Controller/login');
	}
        
        // C R E A T E  D A T A //
        
        public function test_create()
        {
            $this->request('POST', 'My_Controller/create', [
                'Name' => 'ajahdjaba',
	        'Email' => 'bdaafac',
	        'No_Telp' => 'cadacaca',
	        'Message' => 'ddadacacacavaaafafafafafaaababafnjayda'  
            ]);
            $this->assertRedirect('/');
        }
        
        public function test_create_gagal()
        {
            $output = $this->request('POST', 'My_Controller/create', [
                'Name' => '',
	        'Email' => '',
	        'No_Telp' => 'c',
	        'Message' => ''  
            ]);
            $this->assertEquals('Format input salah!', $output);
        }
        
        // M O D E L  A D D  D A T A //
        
        public function test_modelKomentar()
        {
            $start = $this->CI->db->count_all_results('komentar');
            $data = array(
                    'Name' => 'contohhh',
	            'Email' => '123@gmail.com',
	            'No_Telp' => '088812349876',
	            'Message' => 'testttttt'    
                    );
            $this->obj->addDataKomentar($data);
            $finish = $this->CI->db->count_all_results('komentar');
            $expected = $finish - $start;
            $this->assertEquals(1,$expected);
        }
        
        // D E L E T E  D A T A //
        function test_deletesss(){
            $_SESSION['username'] = 'admin';
            $this->request('GET', 'My_Controller/delete_komentar', [
                'komentar'=>'65'
            ]);
            $this->assertRedirect('My_Controller/readDataKomentar');
        }
        function test_deleteeeeee(){
            $_SESSION['username'] = 'admin';
            $this->request('GET', 'My_Controller/deletekomentar/49');
            $this->assertRedirect('My_Controller/readDataKomentar');
        }
}
