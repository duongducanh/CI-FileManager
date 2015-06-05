<?php
class Mod_login extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function check_user($user, $pass){
        $query = $this->db->where('user_name', $user);
        $query = $this->db->where('user_password', md5($pass));
        $query = $this->db->get('tbl_user');
        $count = $query->num_rows();
        if($count>0){
            $data = $query->row_array();
            return $data;
        }
        else{
            return $count;
        }
        
    }

    function insert_user($data){
        $this->db->insert('tbl_user', $data);
    }

    function check_register($user){
        $query = $this->db->where('user_name', $user);
        $query = $this->db->get('tbl_user');
        $count = $query->num_rows();
        return $count;
    }

    /*function create_folder_home($username){
         $data = array(
                        'folder_name'   => $username,
                        'slug'          =>  $username,
                        'parent_id'    => "0",
                        'created_date'  => date("Y-m-d H:i:s"),
                        'updated_date' => "22",
                        'is_trash'      => "0"
                     );
        $this->db->insert('folder',$data);
    }*/
}