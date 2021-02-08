<?php
  
  class Model_welcome extends CI_Model
  {

public function addindb(){
  $arr = Array(
    'mobile' => $this->input->post('mobile'),
    'password' => $this->input->post('password'),

    );

    $this->db->insert('data',$arr);
}




  }
  ?>