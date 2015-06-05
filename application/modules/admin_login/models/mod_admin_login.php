<?php
class Mod_admin_login extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function check_user($user, $pass){
        $query = $this->db->where('user_name', $user);
        $query = $this->db->where('user_password', md5($pass));
        $query = $this->db->where('privilege_id', '4');
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
}