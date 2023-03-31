<?php

class Projects extends CI_Controller {

    public function index()
	{
		$data['main_view'] = "projects/index";
		$this->load->view('layouts/main',$data);
	}


  
}

?>