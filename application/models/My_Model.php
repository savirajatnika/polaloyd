<?php
class My_Model extends CI_Model {

  public function loginadmin($username, $sha1){  
    
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('username', $username);
    $this->db->where('password', $sha1);
    

    $query = $this->db->get();

    if ($query->num_rows() == 1) {

     return true;
    }
    else{
     return false;
    } 
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

  public function getDataSlider() {
    $data1 = $this->db->select('*')->from('slider')->get();
    return $data1->result_array();
  }

  public function getDataGallery() {
    $data2 = $this->db->select('*')->from('gallery')->get();
    return $data2->result_array();
  }
}
?>
