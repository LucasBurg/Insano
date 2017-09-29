<?php
class Conta extends CI_Controller
{
    public function sucesso()
    {
        $this->load->view('conta/sucesso');
    }
    
    public function criar()
    {
        if ($this->input->method() == 'post') {
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nom', 'Nome', 'required');
            $this->form_validation->set_rules('datnas', 'Data de nascimento', 'required');
            $this->form_validation->set_rules('ema', 'E-mail', 'required');
            $this->form_validation->set_rules('usu', 'Usuário', 'required');
            $this->form_validation->set_rules('sen', 'Senha', 'required');
            
            if ($this->form_validation->run() == true) {
                $this->load->model('pessoa_model');
                $this->pessoa_model->setNom($this->input->post('nom'));
                $this->pessoa_model->setDatnas($this->input->post('datnas'));
                $this->pessoa_model->setEma($this->input->post('ema'));
                $this->pessoa_model->setUsu($this->input->post('usu'));
                $this->pessoa_model->setSen($this->input->post('sen'));
                $result = $this->pessoa_model->criarPessoa();
            
                if ($result) {
                    redirect('/conta/sucesso');
                }
            }
        }
        
        $this->load->helper('form');
        $this->load->view('templates/header');
        $this->load->view('conta/form_criar');
        $this->load->view('templates/footer');
        
    }
    
    
}
