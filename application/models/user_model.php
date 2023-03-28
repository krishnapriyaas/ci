<?php
class user_model extends CI_Model
{
        public function get_users($user_id,$user_name)
        {
                $this->db->where(['id'=> $user_id,
                'username' =>$user_name

                ]);

                $query= $this->db->get('users');
                return $query->result();


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


        public function create_users($data){
                $this->db->insert('users',$data);
        }


        public function update_users($data,$id){
                $this->db->where(['id'=>$id]);
                $this->db->update('users',$data);
        }
        public function delete_users($id){
                $this->db->where(['id'=>$id]);
                $this->db->delete('users');
        }
        
}







?>