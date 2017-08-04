<?php
class Inicio extends CI_Controller 
{
    public function index()
    {
        $data = [];
        
        $this->load->library('session');
        
        $data['nome'] = $this->session->userdata('nom');
        
        $this->load->view('inicio/index', $data);
    }
    
    public function load()
    {
        
    }
    
    
}

