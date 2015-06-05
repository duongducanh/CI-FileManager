<?php
class Login extends CI_Controller{
	function __construct(){
	    parent::__construct();
        $this->load->helper('url');
        $this->load->model('mod_login');
        $this->load->library('session');
        
    }
    
    function index(){
        redirect(base_url().'index.php/home');
    }
    
    function login1(){
        
        if($this->session->userdata('user_sess') != ""){
            redirect(base_url().'index.php/login');
        }
        
        $data['error']= "";
        $data['content']= 'view_login';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user','Username','required|xss_clean');
        $this->form_validation->set_rules('pass','Password','required');
        $this->form_validation->set_message('required','(*)');
        
        if($this->form_validation->run()== true)
        {
            $user = $this->input->post('user');
            $pass = $this->input->post('pass');
            $check = $this->mod_login->check_user($user,$pass);
            if($check == 0)
            {
                $data['error'] = "<span>Bạn nhập sai tài khoản và mật khẩu!</span>";
                $this->load->view('template_home', $data);
            } 
            else{
                $array_user= array(
                    'user_sess'=>$check['user_name'],
                    'id_sess'=>$check['user_id']
                );
                $this->session->set_userdata($array_user);
                redirect(base_url().'index.php/login');
            }
        }
        else{
            $this->load->view('template_home', $data);
        }
        
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url().'index.php/login');
    }
    
    function register(){
        $data['content']= 'view_add';
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[2]|max_length[12]|callback_checkuser');
        $this->form_validation->set_rules('password', 'Password', 'required|max_legth="6"');
        $this->form_validation->set_rules('password2', 'Confirm Password ', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      //  $this->form_validation->set_message('required', 'bạn chưa nhập thông tin');
        $this->form_validation->set_message('min_length', 'bạn phải nhập hơn 2 ký tự');
        
        if($this->form_validation->run()==true){          
            $data_insert = array(
                                'user_name'     => $this->input->post('username'),
                                'user_password' =>  md5($this->input->post('password')),
                                'user_email'    => $this->input->post('email')
                            );
            $this->mod_login->insert_user($data_insert);
            $username = $data_insert['user_name'];
            //$this->mod_login->create_folder_home($username);
            $path = $_SERVER["DOCUMENT_ROOT"] . "/filemanager/files/" . $username;
            mkdir($path);
            redirect(base_url().'index.php/login');
        }
        else{
             $this->load->view('template_home', $data);
        }
    }

    function checkuser($user){
        $check = $this->mod_login->check_register($user);
        if($check > 0){
            $this->form_validation->set_message('checkuser', 'Tài khoản đã tồn tại');
            return false;
        }
        else{
            return true;
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}