<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_FTP extends CI_FTP {

    private $conn;
    
    
    public function __construct()
    {
        parent::__construct(); 
        $config['hostname'] = '127.0.0.1';
        $config['username'] = 'Admin';
        $config['password'] = 'elective';
        $config['port']     = 21;
        $config['passive']  = FALSE;
        $config['debug']    = TRUE;
        
        $this->conn = $config;
    }
    
    private function id()
    {
        $conn_id = ftp_connect($this->conn['hostname'], $this->conn['port']);
        ftp_login($conn_id, $this->conn['username'], $this->conn['password']); 
        return $conn_id;
        
    }
    
    public function get_size($file) 
    {
        $size = ftp_size($this->id(),$file);
        return $size;
    }
    
    public function checker($path) 
    {
        $checker = ftp_size($this->id(),$path);
        if($checker === -1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function config()
    {
        return $this->conn;
    } 
    
}