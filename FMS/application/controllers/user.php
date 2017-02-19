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
        $header = [
            'title' => "Home",
            'css' => [
                "vendors/AdminLTE/dist/css/AdminLTE.min.css",
                "vendors/AdminLTE/dist/css/skins/_all-skins.min.css",
                "vendors/ionicons/css/ionicons.min.css"
            ]
        ];
        
        $footer = [
            'scripts' => [
                "vendors/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js",
                "vendors/AdminLTE/plugins/fastclick/fastclick.js",
                "vendors/AdminLTE/dist/js/app.min.js",
                "vendors/AdminLTE/dist/js/demo.js"
            ]
        ];
        if(isset($_SESSION['logged_in'])){
            $this->load->view('includes/header', $header);
            $this->load->view('home/home');
            $this->load->view('includes/footer', $footer);
        } else {
            redirect(base_url());
        }
       
    }
    
}