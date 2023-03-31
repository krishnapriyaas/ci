<?php
class Projects extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){

            $this->session->set_flashdata('no_access', 'Sorry you are NOT allowed or not logged in it');
           //redirect('home/index');
        

           $data['main_view'] = "home_view";
           //$this->load->view('layouts/main', $data);
        }

    }

    public function index()
    {
        $data['projects'] = $this->project_model->get_projects();
        $data['main_view'] = "projects/index";
        $this->load->view('layouts/main', $data);

       // echo" my first programe ";
       //$this->load->view('home_view');
    }
}


?>