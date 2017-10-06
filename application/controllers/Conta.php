<?php
class Conta extends CI_Controller
{
    public function criar()
    {
        if ($this->input->method() == 'post') {
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nom', 'Nome', 'required');
            $this->form_validation->set_rules('dat_nas', 'Data de nascimento', 'required');
            $this->form_validation->set_rules('ema', 'E-mail', 'required');
            $this->form_validation->set_rules('usu', 'Usuário', 'required');
            $this->form_validation->set_rules('sen', 'Senha', 'required');
            
            if ($this->form_validation->run()) {
                $this->load->model('inquilino/inquilino_model', 'inquilino');
                $this->inquilino->set_nom($this->input->post('nom'));
                $this->inquilino->set_dat_nas($this->input->post('dat_nas'));
                $this->inquilino->set_ema($this->input->post('ema'));
                $this->inquilino->set_sen($this->input->post('sen'));
                $this->inquilino->set_usu_cre('root');
                $this->inquilino->set_dat_cre(date('Y-m-d H:i:s'));
                
                $this->load->model('inquilino/inquilino_tabela_model', 'inquilino_tabela');
                if ($this->inquilino_tabela->criar($this->inquilino)) {
                    $this->session->set_flashdata('sucesso', 'Você criou uma conta com sucesso!');
                    redirect('autenticacao/entrar');
                }
            }
        }
        
        $this->load->helper('form');
        $this->load->library('template');
        $this->template->add_js(base_url('assets\jquery-validate\jquery.validate.min.js'));
        $this->template->add_js(base_url('assets\jquery-validate\jquery.validate-default.js'));
        $this->template->add_js(base_url('assets\js\conta_criar.js'));
        $this->template->load_view('conta/criar');
    }
}
