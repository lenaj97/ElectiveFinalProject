<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FTP_model extends CI_Model 
{   
    
    private $conn;
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('ftp');
        
        $this->conn = $this->ftp->config();
        
    }
    
    public function list_files($path)
    {
        $this->ftp->connect($this->conn);

        $list = $this->ftp->list_files($path);
        
        $files = array();

        // Is there actually such a folder/file?
        if($list){        
            foreach($list as $f) {
            
                if(!$f || $f[0] == '.') {
                    continue; // Ignore hidden files
                }

                if($this->ftp->checker($f)) {

                    // The path is a folder

                    $files[] = array(
                        "name" => substr($f,strrpos($f,"/")),
                        "type" => "folder",
                        "path" => $f,
                        "items" => $this->ftp->list_files($f) // Recursively get the contents of the folder
                    );
                }
                
                else {

                    // It is a file
                    $files[] = array(
                        "name" => substr($f,strrpos($f,"/")),
                        "type" => "file",
                        "path" => $f,
                        "size" => $this->ftp->get_size($f) // Gets the size of this file
                    );
                }
            }
        
        }

        $response = $files;
        
        $data = [
            "name" => $path,
            "type" => "folder",
            "path" => $path,
            "items" => $response
        ];
        
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(
                array($data)
            ));

        $this->ftp->close();
    }
    
    public function new_dir($name)
    {
        $this->ftp->connect($this->conn);

        $this->ftp->mkdir($name);

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(
                array('message' => 'OK')
            ));

        $this->ftp->close();
    }
    
    public function upload_file($local,$remote)
    {
        $this->ftp->connect($this->conn);

        $this->ftp->upload($local, $remote);

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(
                array('message' => 'OK')
            ));

        $this->ftp->close();
    }
    
    public function upload_dir($local,$remote)
    {
        $this->ftp->connect($this->conn);

        $this->ftp->mirror($local, $remote);

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(
                array('message' => 'OK')
            ));

        $this->ftp->close();
    }
    
    public function rename_move($old,$new)
    {
        $this->ftp->connect($this->conn);

        $this->ftp->rename($old, $new);

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(
                array('message' => 'OK')
            ));

        $this->ftp->close();
    }
    
    public function download_action($src,$dest)
    {
        $this->ftp->connect($this->conn);
        
        $list = $this->ftp->list_files($path);

        $this->ftp->download($src, $dest);

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(
                array('message' => 'OK')
            ));

        $this->ftp->close();
    }
    
    public function delete_file($path)
    {
        $this->ftp->connect($this->conn);

        $this->ftp->delete_file($path);

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(
                array('message' => 'OK')
            ));

        $this->ftp->close();
    } 
    
    public function delete_dir($path)
    {
        $this->ftp->connect($this->conn);

        $this->ftp->delete_dir($path);

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(
                array('message' => 'OK')
            ));

        $this->ftp->close();
    }    
    

}
