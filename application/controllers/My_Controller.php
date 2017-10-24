<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
                //$this->load->library('encryption');
	}

	public function index()
	{
		$data['err_message'] = "";
		$data['data1'] = $this->My_Model->getDataSlider(); //['data1'] sesuaikan sama view
		$data['data2'] = $this->My_Model->getDataGallery();
		// $data['data3'] = $this->My_Model->getDataTestimonials();
		$this->load->view('Home', $data);

	}

	public function login()
	{
		if($this->session->userdata('username')){
			redirect('My_Controller/admin');
		}else{
			$this->load->view('Login');
		}
	}

	public function logout()
	{
//		if($this->session->userdata('username'))
		{
			$this->session->sess_destroy();
                redirect('My_Controller/login');}}
        
	

	public function komentar()
	{
		if($this->session->userdata('username'))
		{
			redirect('My_Controller/readDataKomentar');
		}else{
			redirect('My_Controller/login');}}
        
        
            

	public function admin()
	{
		if($this->session->userdata('username'))
		{
                    redirect('My_Controller/komentar');
		}else{
                    redirect('My_Controller/login');}}
        
	

	public function login_admin(){
	    $username = $this->input->post('username');
	    $password = $this->input->post('password');
            $sha1 = sha1($password);
	    $isLogin = $this->My_Model->loginadmin($username, $sha1);
	    $userpass = array(
	    	'username' => $username,
	    	'password' => $sha1
	    	);    

	    if($isLogin==true){
	    	$this->session->set_userdata('isLogin', TRUE);
	    	if($_SESSION['isLogin']==true){
	    		// $this->session->set_userdata('akses',TRUE);
		    	$this->session->set_userdata('username', $username);

		    	redirect('My_Controller/komentar');
	    	}
    	
            }else{
                echo "<script> alert('Username atau Password yang anda masukkan salah!') </script>";
	  	$this->load->view('Login');
		}
	}
	
	public function readDataKomentar() {
	    //$data = $this->My_Model->getDataKomentar(); 
	    $this->load->view('Komentar', array('data' => $data));
  	}

  	public function create() {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('Name', 'Nama', 'required');
            $this->form_validation->set_rules('Email', 'Email', 'required');
            $this->form_validation->set_rules('No_Telp', 'Telepon', 'required');
            $this->form_validation->set_rules('Message', 'Pesan', 'required');
	     $data = array(
	            'Name' => $this->input->post('Name'),
	            'Email' => $this->input->post('Email'),
	            'No_Telp' => $this->input->post('No_Telp'),
	            'Message' => $this->input->post('Message')         
	            );
             if($this->form_validation->run()){
                 $this->My_Model->addDataKomentar($data);
                redirect('/');
//                 echo "gagal";
             }else{
                 echo "Format input salah!";
             }
    
        }

  public function deletekomentar($ID){ //delete 1 komentar
    $res = $this->My_Model->delete_item_komentar($ID);
    redirect('My_Controller/readDataKomentar');}
  
}
?>
