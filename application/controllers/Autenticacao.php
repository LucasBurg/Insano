<?php
class Autenticacao extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        show_404();
    }

    public function entrar() 
    {
        
        if ($this->input->method() === 'post') {
            $this->load->model('entrar_model', 'ent');
            $this->ent->set_usu($this->input->post('usu'));
            $this->ent->set_sen($this->input->post('sen'));
        }
        
        $this->load->helper('form');
        $this->load->view('templates/header');
        $this->load->view('autenticacao/entrar');
        $this->load->view('templates/footer');
    }
    
    public function sair()
    {
        session_start();
        session_destroy();
       
        $this->load->view('templates/header');
        $this->load->view('autenticacao/sair');
        $this->load->view('templates/footer');
    }
}
