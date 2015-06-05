<?php
class Admin_login extends CI_Controller{
	function __construct(){
	    parent::__construct();
        $this->load->helper('url');
        $this->load->model('mod_admin_login');
        $this->load->library('session');
        
    }
    
    function index(){
        if($this->session->userdata('user_sess') == ""){
            redirect(base_url().'index.php/admin_login/login');
        }
        else{
        $data['content'] = 'admin_login';
        $this->load->view('template_admin', $data);
        }
    }
    
    function login(){
        
        if($this->session->userdata('user_sess') != ""){
            redirect(base_url().'index.php/admin_login');
        }
        
        $data['error']= "";
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user','Username','required');
        $this->form_validation->set_rules('pass','Password','required');
        $this->form_validation->set_message('required','(*)');
        
        if($this->form_validation->run()== true)
        {
            $user = $this->input->post('user');
            $pass = $this->input->post('pass');
            $check = $this->mod_admin_login->check_user($user,$pass);
            if($check == 0)
            {
                $data['error'] = "<span>Bạn đã nhập sai tên và mật khẩu</span>";
                $this->load->view('view_admin_login', $data);
            } 
            else{
                $array_user= array(
                    'user_sess'=>$check['user_name'],
                    'id_sess'=>$check['user_id']
                );
                $this->session->set_userdata($array_user);
                redirect(base_url().'index.php/admin_login');
            }
        }
        else{
            $this->load->view('view_admin_login', $data);
        }
        
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url().'index.php/admin_login/login');
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}