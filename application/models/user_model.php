<?php
class user_model extends CI_Model
{
public function get_users()
{
        // $config['localhost']="localhost";
        // $config['username']="root";
        // $config['password']="";
        // $config['database']="errand_db";

        // $connection=$this->load->database($config) 
        
         $query= $this->db>get('users');
         return $query->result();
}


}




?>