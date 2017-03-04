<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Functions extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user/ftp_model');
        
    }
    
    public function test()
    {
        // $name = "C:\Users\Mathster\Downloads\456/";
        // echo $name;
        // $this->ftp_model->download_action("/test/123/456/",$name); 
        $this->ftp_model->list_files('Mathster/test/');
        
    }
    
}