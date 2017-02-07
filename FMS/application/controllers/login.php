<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $header = [
            'title' => "Login",
            'css' => [
                "login.css"]
        ];
        $footer = [
            'scripts' => [
                "login.js"
            ]
        ];
        $this->load->view('includes/header', $header);
		$this->load->view('login/index');
        $this->load->view('includes/footer', $footer);
	}
}