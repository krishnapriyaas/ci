<?php


class Users extends CI_Controller {

    // public function show($user_id)
	// {
		
	// 	$this->db->where(['id' => $user_id,'krishna']);
    //     $data['results'] = $this->user_model->get_users($user_id);
    //     $this->load->view('user_view',$data);
        
	// 	// $this->load->model('user_model');
    //     // foreach ($result as $object)
    //     // {
    //     //     echo $object->id;
    //     //     echo $object->username;
    //     //     echo $object->password;
    //     // }



        
	// }
    // public function insert()
    // {
    //     $username='peter';
    //     $password="1234";
    //     $this->user_model->create_users([
    //     'username'=> $username,
    //     'password'=>$password


    //     ]);

    // }
    // public function update()
    // {
    //     $id=1;
    //     $username='meera';
    //     $password="12546844";
    //     $this->user_model->update_users([
    //     'username'=> $username,
    //     'password'=>$password


    //     ],$id);

    // }
    // public function delete()
    // {
    //     $id=1;
       
    //     $this->user_model->delete_users($id);

    // }
 


    public function login()
    {
        echo $this->input->post('username');
        //echo $_POST['username'];
    }

}
?>