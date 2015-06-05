<?php
class Home extends CI_Controller{
    protected $_data;
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('mod_home');
        $this->load->library('session');
      
    }
    
    function index(){
       $data['file_desc'] = $this->mod_home->get_data_desc();
       $data['file_random'] = $this->mod_home->get_data_random();
       $data['content'] = 'view_home';
       $this->load->view('template_home', $data);
    }
   
    function download(){
        $path = $this->input->get();
        $data = file_get_contents($path['path'], true);
        $name = $path['name'];
        force_download($name, $data);
    }

}