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
            $this->load->model('inquilino/inquilino_entrar_model', 'ent');
            $this->ent->set_usu($this->input->post('usu'));
            $this->ent->set_sen($this->input->post('sen'));
            $valido = $this->ent->valido();

            $this->load->library('form_validation');
            $this->form_validation->set_data(array('valido' => $valido));
            $this->form_validation->set_message('required', '{field} invalida.');
            $this->form_validation->set_rules('valido', 'Autenticação', 'required');

            if ($this->form_validation->run()) {
                $this->ent->registra_sessao();
                redirect('/inicio');
            }
        }

        $this->load->library('template');
        $this->load->helper('form');
        $this->template->load_view('autenticacao/entrar');
    }

    public function sair()
    {
        session_start();
        session_destroy();

        $this->load->library('template');
        $this->template->load_view('autenticacao/sair');
    }
}
