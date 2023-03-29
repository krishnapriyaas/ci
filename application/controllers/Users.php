<?php
class Users extends CI_Controller{
public function construct()
{

    $this->session->keep_flashdata('errors');

}

public function login(){

     $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
     $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
     $this->form_validation->set_rules('Confirm_password', 'CPassword', 'trim|required|min_length[3]|matches[password]');
     if($this->form_validation->run() == FALSE) {
     $data = array(

      'errors' => validation_errors()

  );
 // print_r($data);
 // $this->session->set_flashdata('sessionkey', $data);
  $this->session->set_flashdata($data);
  $this->session->keep_flashdata($data);
  redirect('home');
}else{
$username=$this->input->post('username');
$password=$this->input->post('password');
$user_id=$this->user_model->login_user($username,$password);
if($user_id)
{
$user_data=array(
    'user_id'=>$user_id,
    'username'=>$username,
    'logged_in'=>true


);
$this->session->setuserdata($userdata);
redirect('home/index');
}else{
 
    redirect('home/index');  


}

}
}
}
?>