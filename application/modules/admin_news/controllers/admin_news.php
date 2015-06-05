<?php
class Admin_news extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('mod_admin');
        $this->load->model('mod_news');
        $this->load->library('session');
        $this->mod_admin->check_login();
        
    }
    
    function index(){
        $this->load->library('pagination');
        $total_rows = $this->mod_news->count_user();
        $perpage = 8;
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $perpage;
        $config['num_links'] = 5;
        $config['cur_tag_open'] = '<span >';
        $config['cur_tag_close'] = '</span>';
        $config['next_link'] = 'Next >>';
        $config['prev_link'] = 'Prev >>';
        $config['base_url'] = base_url().'index.php/admin_news/index';
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $offset = $this->uri->segment(3);
        
        $data['user'] = $this->mod_news->get_users($perpage, $offset);
        $data['content'] = "user_index";
        $this->load->view('template_admin', $data);
    }
    
    function add_user(){
        $data['upload_err']="";
        $data['list_pri'] = $this->mod_news->list_privilege();
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->form_validation->set_rules('user_name', 'user_name', 'required|callback_check_userexist');
        $this->form_validation->set_rules('user_password', 'user_password', 'required');
        $this->form_validation->set_rules('user_email', 'user_email', 'required');
        $this->form_validation->set_rules('privilege', 'privilege', 'callback_checkprivilege');
        $this->form_validation->set_message('required', '(*)');
        if($this->form_validation->run()){
            //upload
         
                $data_insert = array(
                    'user_name'=>$this->input->post('user_name'),
                    'user_password'=>md5($this->input->post('user_password')),
                    'user_email'=>$this->input->post('user_email'),
                    'privilege_id'=>$this->input->post('privilege'),
                );
                $this->mod_news->insert_user($data_insert);
                redirect(base_url().'admin_news'); 
        }
        else{
            $data['content'] = "user_add";
            $this->load->view('template_admin', $data);
        }  
        
    }
    
    function update_user(){
        $id = $this->uri->segment(3);
        $user_detail = $this->mod_news->user_detail($id);
        if($user_detail==0){
            redirect(base_url().'admin_news');
        }
        else{
            $data['user'] = $user_detail;
        }
        
        $data['upload_err']="";
        $data['list_pri'] = $this->mod_news->list_privilege();
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->form_validation->set_rules('user_name', 'user_name', 'required');
         $this->form_validation->set_rules('user_password', 'user_password', 'required');
          $this->form_validation->set_rules('user_email', 'user_email', 'required');
        $this->form_validation->set_rules('privilege', 'privilege', 'callback_checkprivilege');
        $this->form_validation->set_message('required', '(*)');
        if($this->form_validation->run()==true){
            //upload
           
           
                $data_update = array(
                    'user_name'=>$this->input->post('user_name'),
                    'user_password'=>md5($this->input->post('user_password')),
                    'user_email'=>$this->input->post('user_email'),
                    'privilege_id'=>$this->input->post('privilege')  
                );
            
            $this->mod_news->update_users($id, $data_update);
            redirect(base_url().'admin_news');
            //   
        }
        else{
            $data['content'] = "user_update";
            $this->load->view('template_admin', $data);
        }  
        
    }
    
    function delete_user(){
        
        $id = $this->uri->segment(3);
        $this->mod_news->delete_user($id);
        redirect(base_url().'admin_news');
        
    }
    
    function checkprivilege($pri){
        
        if($pri==0){
            $this->form_validation->set_message('checkprivilege', '(*)');
            return false;
        }
        else{
            return true;
        }
        
    }

    function check_userexist($user_name){
        $data = $this->mod_news->check_user_exist($user_name);
         if($data!=0){
            $this->form_validation->set_message('check_userexist', 'Tài khoản đã tồn tại!');
            return false;
        }
        else{
            return true;
        }
    }


    function file_index(){

    }










}