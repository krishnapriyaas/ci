<?php
class Users extends CI_Controller{
  public function register(){

     $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
     $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
     $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');
     $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
     $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
     $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');
   

     if ($this->form_validation->run() == FALSE) {
      $data['main_view']='Users/register_view';
      $this->load->view('layouts/main',$data);
     
    }else{
      redirect('');
    
    }
  }
  public function login(){

     $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
     $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
     $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');
   

     if ($this->form_validation->run() == FALSE) {
        $data = array(

        'errors' => validation_errors(),
        'main_view'=>'home_view'

      );
 
      $this->session->set_flashdata($data);
  
      $this->load->view('layouts/main',$data);
    }
    else {
      $username = $this->input->post('username'); 
      $password = $this->input->post('password');

       $user_id = $this->user_model->login_user($username,$password);
      if( $user_id ){
        $user_data = array(

          'user_id' => $user_id,
          'username' => $username,
          'logged_in' => true

        );

        $this->session->set_userdata($user_data);
        $this->session->set_flashdata('login_success','you are now loged in');

        $data['main_view'] = "admin_view";
		    $this->load->view('layouts/main',$data);
        // redirect('home/index');
      }
      else{
      $this->session->set_flashdata('login_failed','sorry you are not loged in');
      redirect('home/index');
      }
    }
    
    }








/*public function show($user_id){


   // $this->load->model('user_model');
    $data['result'] = $this->user_model->get_users($user_id,'anu');
    $this->load->view('user_view',$data);
   // $data['welcome'] = " Welcome to my page";

   
   // foreach ($result as $object){
     //   echo $object->username . "<br>";
   // }

}

public function insert()
{
    $username = "kinku";
    $password = "kinku123";
    $this->user_model->create_users([

    'username' => $username,
    'password' => $password


  ]);
}

public function update()
{   
    $id = 3;
    $username = "shraavan";
    $password = "123s";
    $this->user_model->update_users([

    'username' => $username,
    'password' => $password


  ],$id);
}
public function delete()
{
  $id =3;
  $this->user_model->delete_users($id);
  
}*/
  public function logout(){

  $this->session->sess_destroy();
  redirect('home/index');

  }

}
?>