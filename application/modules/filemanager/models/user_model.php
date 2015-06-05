<?php
class User_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function get_user_id($username){
        $query = $this->db->select('user_id');
        $query = $this->db->where('user_name', $username);
        $query = $this->db->get('tbl_user');
        $kq = $query->result_array();
        return $kq;      
    }

    
    
}