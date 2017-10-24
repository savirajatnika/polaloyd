<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Index_test extends TestCase
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
        
}
