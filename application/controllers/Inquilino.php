<?php
class Inquilino extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function criar()
    {
        
        $nom = 'Lucas 123 pereira';
        $sen = '9sa8dhasdsa';
        $usu = 'joaopppp';
        
        $this->load->model('inquilino/inquilino_model', 'inquilino');
        $this->inquilino->set_nom($nom);
        $this->inquilino->set_sen($sen);
        $this->inquilino->set_usu($usu);
        $this->inquilino->set_usu_cre('root');
        $this->inquilino->set_dat_cre(date('Y-m-d H:i:s'));
        
        //var_dump($this->inquilino);
        
        $this->load->model('inquilino/inquilino_tabela_model', 'inquilino_tabela');
        
        $result = $this->inquilino_tabela->criar($this->inquilino);
        
        if ($result) {
            var_dump($this->inquilino_tabela->ultimo_id());
            var_dump($this->inquilino_tabela->linhas_afetadas());
        }
        
    }
    
    public function alterar()
    {
        $id  = '415';
        $nom = 'Lucas 123 pereira';
        $sen = 'lucas123';
        $usu = '123lucas';
        
        $this->load->model('inquilino/inquilino_model', 'inquilino');
        //$this->inquilino->set_id($id);
        $this->inquilino->set_nom($nom);
        //$this->inquilino->set_sen($sen);
        //$this->inquilino->set_usu($usu);
        $this->inquilino->set_usu_mod('root');
        $this->inquilino->set_dat_mod(date('Y-m-d H:i:s'));
        
        
        
        //var_dump($this->inquilino);
        
        $this->load->model('inquilino/inquilino_tabela_model', 'inquilino_tabela');
        
        $result = $this->inquilino_tabela->alterar($this->inquilino, $id);
        
        var_dump($result);
        
        if ($result) {
            var_dump($this->inquilino_tabela->linhas_afetadas());
        }
    }
}

