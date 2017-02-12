<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function login_user($data)
    {
        $username = $data["username"];
        $password = $data["password"];
        $query = $this->db->select('username,password')
                ->where('username', $username)
                ->get('users');
                
        $row = $query->row();
        if($row){
            $hash = $row->password;
            if(password_verify($password, $hash)) {
                $newdata = array(
                        'username'  => $row->username,
                        'logged_in' => TRUE
                );
                $this->session->set_userdata($newdata);
                if($data["remember"]){
                    $this->load->helper('cookie');
                    $cookie = $this->input->cookie('ci_session');
                    $this->input->set_cookie('ci_session', $cookie, "7884008"); //3 months
                } else {
                    $this->load->helper('cookie');
                    $cookie = $this->input->cookie('ci_session');
                    $this->input->set_cookie('ci_session', $cookie, "300"); //5 mins
                }
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(
                        array('message' => 'OK')
                    ));
            } else {
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(
                        array('message' => 'FAIL')
                    ));
            }            
        } else {
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(
                        array('message' => 'FAIL')
                    ));
        }
        
    }
    
    public function check_username($username)
    {
        $query = $this->db->select('username')
                ->where('username', $username)
                ->get('users');     
        $row = $query->row();
        if($row){
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(
                    array('message' => 'Username Exists')
                ));
        } else {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(
                    array('message' => 'Nothing found')
                ));
        }
    }
    
    public function check_email($email)
    {
        $query = $this->db->select('email')
                ->where('email', $email)
                ->get('users');     
        $row = $query->row();
        if($row){
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(
                    array('message' => 'Email Exists')
                ));
        } else {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(
                    array('message' => 'Nothing found')
                ));
        }
    }
    
    public function register_user($data) 
    {
        $Userdata = [
            "username" => $data["username"],
            "password" => $data["password"],
            "email"    => $data["email"]
        ];
        $error = 0;
        $counter = 0;
        foreach($Userdata as $row){
            if($row[$counter]){
                $error = 0;
            } else {
                $error = 1;
            }
            $counter++;
        }
        if($error === 0){
            $this->db->insert('users', $Userdata);
            if($this->db->affected_rows() > 0){
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(
                        array('message' => 'OK')
                    ));
                $newdata = array(
                        'username'  => $data["username"],
                        'logged_in' => TRUE
                );
                $this->session->set_userdata($newdata);
                
                $this->load->helper('cookie');
                $cookie = $this->input->cookie('ci_session');
                $this->input->set_cookie('ci_session', $cookie, "300"); //5 mins
            } else {
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(
                        array('message' => 'FAIL')
                    ));
            }
        }
                    
       
    }
}
