<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
	protected $layoutView = 'MasterLayout';

	protected $contentView = '';

	protected $dataView = [];
    

	public function __construct()
	{
		parent::__construct();
	}


	public function _output($output)
	{
            $render = NULL;

            // Set the content view
            $this->contentView = ($this->contentView !== FALSE && empty($this->contentView))
                ? $this->router->class . "/" . $this->router->method
                : $this->contentView;

            // Render the content view
            $yield = (file_exists(APPPATH . 'views/'. $this->contentView . '.php'))
                ? $this->load->view($this->contentView, $this->dataView, TRUE)
                : FALSE;

            // Render the layout view
            if ($yield) {
                $render = $this->load->view('layouts/' . $this->layoutView, ['yield' => $yield], TRUE);
            } else {
                $render = $output;
            }

            echo $render;
        
	}
}
