<?php
class Mod_news extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function get_users($perpage, $offset){
        $query = $this->db->select('tbl_user.*, privilege.*');
        $query = $this->db->from('tbl_user');
        $query = $this->db->join('privilege', 'tbl_user.privilege_id = privilege.privilege_id');
        $query = $this->db->limit($perpage, $offset);
        $query = $this->db->order_by('user_id', 'DESC');
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }

    function count_user(){
        $data  = $this->db->count_all('tbl_user');
        return $data;
    }

    function user_detail($id){
        $query = $this->db->where('user_id', $id);
        $query = $this->db->get('tbl_user');
        if($query->num_rows==0){
            return 0;
        }
        else{
            return $query->row_array();
        }
    }

    function list_privilege(){
        $query = $this->db->get('privilege');
        $data = $query->result_array();
        return $data;
    }

     function update_users($id, $data_update){
        $this->db->where('user_id', $id);
        $this->db->update('tbl_user', $data_update);
    }

    function insert_user($data){
        $this->db->insert('tbl_user', $data);
    }

    function check_user_exist($user){
        $query = $this->db->where('user_name', $user);
        $query = $this->db->get('tbl_user');
        return $data = $query->num_rows;
    }

     function delete_user($id){
        $this->db->where('user_id', $id);
        $this->db->delete('tbl_user');
    }


    /*********************************
    **********************************/

    



     /*********************************
    **********************************/
    function get_news($perpage, $offset){
        $query = $this->db->join('category', 'category.cat_id = news.news_category');
        $query = $this->db->limit($perpage, $offset);
        $query = $this->db->order_by('news_id', 'DESC');
        $query = $this->db->get('news');
        $data = $query->result_array();
        return $data;
    }
    
    function count_news(){
        $data  = $this->db->count_all('news');
        return $data;
    }

    function list_cat(){
        $query = $this->db->get('category');
        $data = $query->result_array();
        return $data;
    }
    
    function insert_news($data){
        $this->db->insert('news', $data);
    }
    
    function news_detail($id){
        $query = $this->db->where('news_id', $id);
        $query = $this->db->get('news');
        if($query->num_rows==0){
            return 0;
        }
        else{
            return $query->row_array();
        }
    }
    
    function update_news($id, $data_update){
        $this->db->where('news_id', $id);
        $this->db->update('news', $data_update);
    }
    
    function delete_news($id){
        $this->db->where('news_id', $id);
        $this->db->delete('news');
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}