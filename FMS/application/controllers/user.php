<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['logged_in'])){
            redirect(base_url());
        }
    }
    
    public function home()
    {
        $this->dataView = [
            'title' => "Home",
            'css' => [
                "vendors/AdminLTE/dist/css/AdminLTE.min.css",
                "vendors/AdminLTE/dist/css/skins/_all-skins.min.css",
                "vendors/AdminLTE/plugins/pace/pace.min.css",
                "vendors/ionicons/css/ionicons.min.css",
                "css/home.css",
                "css/filemanager.css"
            ],
            'scripts' => [
                "vendors/AdminLTE/plugins/pace/pace.min.js",
                "vendors/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js",
                "vendors/AdminLTE/plugins/fastclick/fastclick.js",
                "vendors/AdminLTE/dist/js/app.min.js",
                "js/home.js"
            ]
        ];       
       
    }
    
}