<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller 
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
        $this->load->view('includes/header', $data);
        $this->load->view('test');
        $this->load->view('includes/footer');
    }
}