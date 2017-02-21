<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login/user_model');
    }

	public function index()
	{
        $this->dataView = [
            'title' => "Login",
            'css' => [
                "css/login.css"
            ],
            'scripts' => [
                "js/login.js"
            ]
        ];
        if(isset($_SESSION['logged_in'])){
            redirect(base_url('user/home'));
        }
        
	}
    
    public function authenticate()
    {
        $data = [
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "remember" => $this->input->post('remember') 
        ];      
        $this->user_model->login_user($data);
    }
    
    public function check()
    {
        if($this->input->post('username') != NULL ){
            $username = $this->input->post('username');
            $this->user_model->check_username($username);
        } 
        else if($this->input->post('email') != NULL ){
            $email = $this->input->post('email');
            $this->user_model->check_email($email);
        }    
        
    }
    
    public function register()
    {
        $password = $this->input->post('register-pass');
        $hash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 10));
        $data = [
            "username" => $this->input->post('register-user'),
            "email"    => $this->input->post('register-email'),
            "password" => $hash
        ];
        $this->user_model->register_user($data);
    }
    
    public function logout()
    {
        $array_items = array('username', 'logged_in');
        $this->session->unset_userdata($array_items);
        $this->session->sess_destroy();
        redirect(base_url()); 
    }
}