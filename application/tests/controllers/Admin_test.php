<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Admin_test extends TestCase
{
        public function setUp()
        {
            $this->resetInstance();
            $this->CI->load->model('My_Model');
            $this->obj = $this->CI->My_Model;
            $this->form_validation = new CI_Form_validation();
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
                'Name' => 'create',
	        'Email' => 'create@gmail.com',
	        'No_Telp' => '08818181811',
	        'Message' => 'coba create'
            ]);
            $this->assertRedirect('/');
        }
        
        public function test_create_gagal()
        {
            $output = $this->request('POST', 'My_Controller/create', [
                'Name' => '',
	        'Email' => '',
	        'No_Telp' => '12345',
	        'Message' => ''  
            ]);
            $this->assertEquals('Format input salah!', $output);
        }
        
        
                
        // D E L E T E  D A T A //
        
        function test_deleteSatu(){
            $_SESSION['username'] = 'admin';
            $start = $this->CI->db->count_all_results('komentar');
            $data = $this->request('POST', 'My_Controller/deletekomentar/238');
            $finish = $this->CI->db->count_all_results('komentar');
            $expected = $start-$finish;
            $this->assertEquals(1,$expected);
        }
        
        
}
