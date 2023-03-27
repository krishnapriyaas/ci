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
        
        //  $query= $this->db->get('users');
        //  return $query->result();
        $query=$this->db->query("SELECT * FROM  users");
        //return $query->num_fields();//this will give me the columns  count
        return $query->num_rows();//this will give me the rows  count
}
}







?>