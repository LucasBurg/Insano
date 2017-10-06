<?php
class Conta extends CI_Controller
{
    public function criar()
    {
        if ($this->input->method() == 'post') {
            
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
            $this->form_validation->set_rules('nom', 'Nome', 'required');
            $this->form_validation->set_rules('dat_nas', 'Data de nascimento', 'required');
            $this->form_validation->set_rules('ema', 'E-mail', 'required');
            $this->form_validation->set_rules('usu', 'Usuário', 'required');
            $this->form_validation->set_rules('sen', 'Senha', 'required');
            
            if ($this->form_validation->run()) {
                
                var_dump($this->input->post());
                
            }
        }
        
        $this->load->helper('form');
        $this->load->library('template');
        $this->template->add_js(base_url('assets\jquery-validate\jquery.validate.min.js'));
        $this->template->add_js(base_url('assets\js\conta_criar.js'));
        $this->template->load_view('conta/criar');
    }
}
