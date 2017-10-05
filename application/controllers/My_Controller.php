<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');

	}

	public function index()
	{
		$data['err_message'] = "";
		$data['data1'] = $this->My_Model->getDataSlider(); //['data1'] sesuaikan sama view
		$data['data2'] = $this->My_Model->getDataGallery();
		$data['data3'] = $this->My_Model->getDataTestimonials();
		$this->load->view('Home', $data);

	}

	public function about()
	{
		$this->load->view('About');
	}

	public function testimonial()
	{
		$this->load->view('Testimonial');
	}

	public function contact()
	{
		$this->load->view('Contact');
	}

	public function login()
	{
		if($this->session->userdata('isLogin')){
			redirect('My_Controller/admin');
		}else{
			$this->load->view('Login');
		}
	}

	public function logout()
	{
		if($this->session->userdata('isLogin'))
		{
			$this->session->sess_destroy();
			redirect('My_Controller/login');
		}else{
			redirect('My_Controller/login');
		}
	}

	public function komentar()
	{
		if($this->session->userdata('isLogin'))
		{
			$this->readDataKomentar();
		}else{
			redirect('My_Controller/login');
		}
	}

	public function admin()
	{
		if($this->session->userdata('isLogin'))
		{
		 	$this->load->view('Changepass');
		}else{
			redirect('My_Controller/login');
		}
	}

	public function slider()
	{
		if($this->session->userdata('isLogin'))
		{
		 	$this->readDataSlider();
		}else{
			redirect('My_Controller/login');
		}
	}

	public function gallery()
	{
		if($this->session->userdata('isLogin'))
		{
		 	$this->readDataGallery();
		}else{
			redirect('My_Controller/login');
		}
	}

	public function testimonials()
	{
		if($this->session->userdata('isLogin'))
		{
		 	$this->readDataTestimonials();
		}else{
			redirect('My_Controller/login');
		}
	}

	public function login_admin(){
	    $username = $this->input->post('username');
	    $password = $this->input->post('password');
	    $isLogin = $this->My_Model->loginadmin($username, $password);
	    $userpass = array(
	    	'username' => $username,
	    	'password' => $password
	    	);    

	    if($isLogin==true){
	    	$this->session->set_userdata('isLogin', TRUE);
	    	if($_SESSION['isLogin']==true){
	    		// $this->session->set_userdata('akses',TRUE);
		    	$this->session->set_userdata('username', $username);

		    	redirect('My_Controller/komentar');
	    	}
	    	else{
	    		echo "<script> alert('Username atau Password yang anda masukkan salah!') </script>";
	  			$this->load->view('Login');
	    	}
    	
    	}else{
	  		echo "<script> alert('Username atau Password yang anda masukkan salah!') </script>";
	  		$this->load->view('Login');
		}
	}
	
	public function changepassword(){
	    $username = 'admin';
	    $passwordbaru = $this->input->post('passbaru');
	    $passwordlama = $this->input->post('passlama');
	    $isLogin = $this->My_Model->changepass($username, $passwordlama);
	    $userpass = array(
	    	'username' => $username,
	    	'password' => $passwordlama
	    	); 

	    if($isLogin==true){ //kalo datanya ketemu = berhasil login
	    	$this->session->set_userdata('isLogin', TRUE); //kasih session namanya isLogin, set to true
	    	if($passwordbaru==$passwordlama){ //kalo input pass baru dan lama itu sama
	    		echo "<script> alert('Password baru yang anda masukkan sama dengan password lama!') </script>";
	  			$this->load->view('Changepass');
	    	}
	    	else if($_SESSION['isLogin']==true){ //kalo session isLogin true (berarti udah berhasil login)
		    	$this->session->set_userdata('username', $username); //set session pake nama username
				$pass = $this->My_Model->getPassword($username, $passwordlama); //ngecek password lama di input apakah sama dengan password di database
				if($pass == true){ //kalo data ketemu = passwordnya sama, baru bisa di update passwordnya
					$update = $this->My_Model->updatePassword($_SESSION['username'], $passwordbaru);
			    	redirect('My_Controller/admin');

				}else{
					echo "<script> alert('Password lama yang anda masukkan salah!') </script>";
	  				$this->load->view('Changepass');
				} 
	    	}   	
	    }else{
	  		echo "<script> alert('Password lama yang anda masukkan salah!') </script>";
	  		$this->load->view('Changepass');
		}
	}	

	public function readDataKomentar() {
	    $data = $this->My_Model->getDataKomentar(); //kalo $data undefined = grgr ini blm di panggil
	    $this->load->view('Komentar', array('data' => $data));
  	}

  	public function readDataSlider() {
	    $data1 = $this->My_Model->getDataSlider(); 
	    $this->load->view('Slider', array('data1' => $data1));
  	}

  	public function readDataGallery() {
	    $data2 = $this->My_Model->getDataGallery();
	    $this->load->view('Gallery', array('data2' => $data2));
  	}

  	public function readDataTestimonials() {
	    $data3 = $this->My_Model->getDataTestimonials();
	    $this->load->view('Testimonials', array('data3' => $data3));
  	}

  	public function create() {
	     $data = array(
	            'Name' => $this->input->post('Name'),
	            'Email' => $this->input->post('Email'),
	            'People' => $this->input->post('People'),
	            'Date' => $this->input->post('Date'),
	            'Message' => $this->input->post('Message')            
	                 
	                );
	    $this->My_Model->addDataKomentar($data);
	    // $this->session->set_flashdata('sukses', 'Pertanyaan anda telah berhasil dikirimkan!');
     	$this->email();
	    redirect(base_url());
    
  }

  	public function createSlider() {
	    $do = $this->doUploadSlider();
	    if($do){
	      $data1 = array(
	                'caption_slider' => $this->input->post('f_caption_slider'),
	                'gambar_slider' => $do
	                 
	                );
	    $this->My_Model->addDataSlider($data1);
    }else{
      	$data1['error'] = $do;
    }
    	$this->readDataSlider();
    
  	}  

  	public function doUploadSlider(){
    	$config['upload_path']          = './f_gambar_slider/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

		    $errors = array();
		    $file_name = $_FILES['f_gambar_slider']['name'];
		    $file_size = $_FILES['f_gambar_slider']['size'];
		    $file_tmp = $_FILES['f_gambar_slider']['tmp_name'];
		    $file_type = $_FILES['f_gambar_slider']['type'];
		    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

	    if(empty($errors) == true){
		    move_uploaded_file($file_tmp, "./uploads/".$file_name);
		    return 'uploads/'.$file_name;
	    }else{
	      	print_r($errors);
	    }
	}

	public function createGallery() {
	    $do = $this->doUploadGallery();
	    if($do){
	      $data3 = array(
	                'caption_gallery' => $this->input->post('f_caption_gallery'),
	                'occasion_gallery' => $this->input->post('f_occasion_gallery'),
	                'gambar_gallery' => $do,
	                'keterangan_gallery' => $this->input->post('f_keterangan_gallery')
	                 
	                );
	    $this->My_Model->addDataGallery($data3);
    }else{
      	$data3['error'] = $do;
    }
    	$this->readDataGallery();
    
  	}  

  	public function doUploadGallery(){
    	$config['upload_path']          = './f_gambar_gallery/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

		    $errors = array();
		    $file_name = $_FILES['f_gambar_gallery']['name'];
		    $file_size = $_FILES['f_gambar_gallery']['size'];
		    $file_tmp = $_FILES['f_gambar_gallery']['tmp_name'];
		    $file_type = $_FILES['f_gambar_gallery']['type'];
		    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

	    if(empty($errors) == true){
		    move_uploaded_file($file_tmp, "./uploads/".$file_name);
		    return 'uploads/'.$file_name;
	    }else{
	      	print_r($errors);
	    }
	}

	// public function doUploadGallery_Popup(){
 //    	$config['upload_path']          = './f_popup_gallery/';
 //        $config['allowed_types']        = 'gif|jpg|png';
 //        $config['max_size']             = 100;
 //        $config['max_width']            = 1024;
 //        $config['max_height']           = 768;

	// 	    $errors = array();
	// 	    $file_name = $_FILES['f_popup_gallery']['name'];
	// 	    $file_size = $_FILES['f_popup_gallery']['size'];
	// 	    $file_tmp = $_FILES['f_popup_gallery']['tmp_name'];
	// 	    $file_type = $_FILES['f_popup_gallery']['type'];
	// 	    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

	//     if(empty($errors) == true){
	// 	    move_uploaded_file($file_tmp, "./uploads/".$file_name);
	// 	    return 'uploads/'.$file_name;
	//     }else{
	//       	print_r($errors);
	//     }
	// }

	public function createTestimonials() {
	    $do = $this->doUploadTestimonials();
	    if($do){
	      $data3 = array(
	                'caption_testimonials' => $this->input->post('f_caption_testimonials'),
	                'nama_testimonials' => $this->input->post('f_nama_testimonials'),
	                'gambar_testimonials' => $do
	                 
	                );
	    $this->My_Model->addDataTestimonials($data3);
    }else{
      	$data3['error'] = $do;
    }
    	$this->readDataTestimonials();
    
  	}  

  	public function doUploadTestimonials(){
    	$config['upload_path']          = './f_gambar_testimonials/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

		    $errors = array();
		    $file_name = $_FILES['f_gambar_testimonials']['name'];
		    $file_size = $_FILES['f_gambar_testimonials']['size'];
		    $file_tmp = $_FILES['f_gambar_testimonials']['tmp_name'];
		    $file_type = $_FILES['f_gambar_testimonials']['type'];
		    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

	    if(empty($errors) == true){
		    move_uploaded_file($file_tmp, "./uploads/".$file_name);
		    return 'uploads/'.$file_name;
	    }else{
	      	print_r($errors);
	    }
	}

  public function deletekomentar($ID){ //delete 1 komentar
    $where = array('ID_komentar' => $ID);
    $res = $this->My_Model->deleteData('komentar', $where);
    if($res>=1){
      redirect('My_Controller/readDataKomentar');
    }
  }

  public function delete_komentar(){ //delete banyak komentar
    $item = $this->input->post('komentar');
    $this->My_Model->delete_item_komentar($item);
    redirect('My_Controller/readDataKomentar');
  }

  public function deleteslider($ID){ //delete 1 komentar
    $where = array('ID_slider' => $ID);
    $res = $this->My_Model->deleteData('slider', $where);
    if($res>=1){
      redirect('My_Controller/readDataSlider');
    }
  }

  public function delete_slider(){ //delete banyak komentar
    $item = $this->input->post('slider');
    $this->My_Model->delete_item_Slider($item);
    redirect('My_Controller/readDataSlider');
  }

  public function deletegallery($ID){ //delete 1 komentar
    $where = array('ID_gallery' => $ID);
    $res = $this->My_Model->deleteData('gallery', $where);
    if($res>=1){
      redirect('My_Controller/readDatagallery');
    }
  }

  public function delete_gallery(){ //delete banyak komentar
    $item = $this->input->post('gallery');
    $this->My_Model->delete_item_gallery($item);
    redirect('My_Controller/readDataGallery');
  }

  public function deletetestimonials($ID){ //delete 1 komentar
    $where = array('ID_testimonials' => $ID);
    $res = $this->My_Model->deleteData('testimonials', $where);
    if($res>=1){
      redirect('My_Controller/readDataTestimonials');
    }
  }

  public function delete_testimonials(){ //delete banyak komentar
    $item = $this->input->post('testimonials');
    $this->My_Model->delete_item_testimonials($item);
    redirect('My_Controller/readDataTestimonials');
  }

  public function update(){
  	$this->My_Model->getDataAdmin();
    $passwordbaru = $this->input->post('passbaru');
    $update = $this->My_Model->updatePassword($_SESSION['username'], $passwordbaru);
    redirect('My_Controller/admin');
  }

  public function email(){
  	$this->load->library('email');
  	$config['protocol'] = 'smtp';
	$config['smtp_host'] = 'ssl://smtp.gmail.com';
	$config['smtp_port'] = '587';
	$config['smtp_timeout'] = '7';
	$config['smtp_user'] = 'fauziamakeup.id@gmail.com';
	$config['smtp_pass'] = 'riesafauzia';
	$config['charset'] = 'utf-8';
	$config['newline'] = "\r\n";
	$config['mailtype'] = 'html';
	$config['validation'] = TRUE;
	$this->email->initialize($config);
	// ------------------------------------------------------------
	$this->email->to('fauziamakeup.id@gmail.com');
	$this->email->from('fauziamakeup.id@gmail.com', $this->input->post('Name'));
	$this->email->subject($this->input->post('Email').' - '.$this->input->post('People').' - '.$this->input->post('Date'));
	$this->email->message($this->input->post('Message'));
	$this->email->send();


  }

}
?>