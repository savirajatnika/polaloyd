<?php
class My_Model extends CI_Model {

  public function loginadmin($username, $password){  
    
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    

    $query = $this->db->get();

    if ($query->num_rows() == 1) {

     return true;
    }
    else{
     return false;
    } 
  }

  public function getPassword($username, $passwordlama){ //sama kayak select password from admin where password='123'
    
    $this->db->select('password');
    $this->db->from('admin');
    $this->db->where('username', $username);
    $this->db->where('password', $passwordlama);
    

    $query = $this->db->get();

    if ($query->num_rows() == 1) {

     return true;
    }
    else{
     return false;
    } 
  }

  public function changepass($username, $passwordlama){  
    
    $this->db->select('password', $passwordlama);
    $this->db->from('admin');
    $this->db->where('username', $username);
    

    $query = $this->db->get();

    if ($query->num_rows() == 1) {

     return true;
    }
    else{
     return false;
    } 
  }

  public function getDataAdmin() {
    $data = $this->db->select('password')->from('admin')->get();
    foreach ($data->result_array() as $x)
    {
      return $x;
    }
  }

  public function updatePassword($username, $passwordbaru){
    $this->db->set('password', $passwordbaru);
    $this->db->where('username', $username);
    $this->db->update('admin');
  }




  public function addDataKomentar($data) {
    $this->db->insert('komentar', $data);
  }

  public function getDataKomentar() {
    $data = $this->db->select('*')->from('komentar')->get();
    return $data->result_array();
  }

  public function delete_item_komentar($item){
    $this->db->where_in('ID_komentar', $item);
    $this->db->delete('komentar');
  }




  public function addDataSlider($data1) {
    $this->db->insert('slider', $data1);
  }

  public function getDataSlider() {
    $data1 = $this->db->select('*')->from('slider')->get();
    return $data1->result_array();
  }

  public function delete_item_slider($item){
    $this->db->where_in('ID_slider', $item);
    $this->db->delete('slider');
  }




  public function addDataGallery($data2) {
    $this->db->insert('gallery', $data2);
  }

  public function getDataGallery() {
    $data2 = $this->db->select('*')->from('gallery')->get();
    return $data2->result_array();
  }

  public function delete_item_gallery($item){
    $this->db->where_in('ID_gallery', $item);
    $this->db->delete('gallery');
  }
  



  public function addDataTestimonials($data3) {
    $this->db->insert('testimonials', $data3);
  }

  public function getDataTestimonials() {
    $data3 = $this->db->select('*')->from('testimonials')->get();
    return $data3->result_array();
  }

  public function delete_item_testimonials($item){
    $this->db->where_in('ID_testimonials', $item);
    $this->db->delete('testimonials');
  }


  

  public function deleteData($tableName, $where){ //bisa buat semua table
    $res = $this->db->delete($tableName, $where);
    return $res;
  }

  

}
?>
