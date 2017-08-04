<?php
class Entrar extends CI_Controller
{
    public function index()
    {
        if ($this->input->method() == 'post') {
            $this->load->model('entrar_model');
            $this->entrar_model->setUsu($this->input->post('usu'));
            $this->entrar_model->setSen($this->input->post('sen'));
            $result = $this->entrar_model->valido();
            
            if ($result > 0) {
                $this->load->library('session');
                $this->session->set_userdata('usu', $result->usu);
                $this->session->set_userdata('id', $result->id);
                $this->session->set_userdata('nom', $result->nom);
                
                
                redirect('/inicio');
            } 
        }
        $this->load->helper('form');
        $this->load->view('entrar/form_entrar');
    }
}

