<?php
class Users extends CI_Controller{
public function construct()
{

    $this->session->keep_flashdata('errors');

}

public function login(){

     $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
     $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
     $this->form_validation->set_rules('Confirm password', 'CPassword', 'trim|required|min_length[3]|matches[password]');
     if($this->form_validation->run() == FALSE) {
     $data = array(

      'errors' => validation_errors()

  );
  $this->session->set_flashdata('sessionkey', $data);
  $this->session->set_flashdata($data);
  redirect('home');
}
}
}
?>