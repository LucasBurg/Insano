<?php
class Escritorio extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }
    
    
    public function index()
    {
        show_404();
    }
    
    public function criar()
    {
        $this->load->helper('form');
        
        if ($this->input->method() == 'post') {
            
        }
        
        $this->load->view('escritorio/form_criar');
        
    }
    
}

