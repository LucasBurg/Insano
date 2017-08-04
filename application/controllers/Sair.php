<?php
class Sair extends CI_Controller 
{
    public function index()
    {
        session_start();
        session_destroy();
        
        $this->load->view('sair/index');
        
    }
    
    
}
