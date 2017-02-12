<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function home()
    {
        $data = [
            'title' => "Home"
        ];
        if(isset($_SESSION['logged_in'])){
            $this->load->view('includes/header', $data);
            $this->load->view('home/home');
            $this->load->view('includes/footer');
        } else {
            redirect(base_url());
        }
       
    }
}