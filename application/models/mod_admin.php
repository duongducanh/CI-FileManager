<?php
class Mod_admin extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function check_login(){
        
        if($this->session->userdata('user_sess')==""){
            redirect(base_url().'index.php/admin_login/login');
        }
    }

    function check_login1(){
        
        if($this->session->userdata('user_sess')==""){
            redirect(base_url().'index.php/login/logout');
        }
    }

    function list_privilege(){
        $query = $this->db->get('privilege');
        $data = $query->result_array();
        return $data;
    }

    function edit_privilege($file_id, $data_update){
        $this->db->where('file_id', $file_id);
        $this->db->update('file', $data_update);
    }

}
?>