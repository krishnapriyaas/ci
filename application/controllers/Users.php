<?php


class Users extends CI_Controller {

    public function show($user_id)
	{
		
		$this->db->where(['id' => $user_id,'krishna']);
        $data['results'] = $this->user_model->get_users($user_id);
        $this->load->view('user_view',$data);
        
		// $this->load->model('user_model');
        // foreach ($result as $object)
        // {
        //     echo $object->id;
        //     echo $object->username;
        //     echo $object->password;
        // }



        
	}



}
?>