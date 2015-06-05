<?php
class Mod_home extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function get_data_desc(){
        $query = $this->db->select('file.*, user_name');
        $query = $this->db->from('file');
        $query = $this->db->join('tbl_user', 'tbl_user.user_id = file.user_id');
        $query = $this->db->order_by('file_id', 'DESC');
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }

    function get_data_random(){
        $query = $this->db->select('file.*, user_name');
        $query = $this->db->from('file');
        $query = $this->db->join('tbl_user', 'tbl_user.user_id = file.user_id');
        $query = $this->db->order_by('file_id', 'RANDOM');
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }

   
    /***************************************
    *********************************************/

    
    
    
    
    
    
    
    
    
    
}