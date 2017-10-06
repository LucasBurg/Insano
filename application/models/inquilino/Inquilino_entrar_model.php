<?php
class Inquilino_entrar_model extends CI_Model
{
    private $usu;
    
    private $sen;
    
    private $row;
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function set_usu($usu)
    {
        $this->usu = $usu;
    }
    
    public function set_sen($sen)
    {
        $this->sen = $sen;
    }

    public function valido()
    {
        $stmt = $this->db->get_where('inquilino', array('usu' => $this->usu, 'sen' => $this->sen));
        $this->row = $stmt->row();
        
        return count($this->row) > 0;
    }
    
    public function registra_sessao()
    {
        $this->session->set_userdata('inquilino_id', $this->row->id);
        $this->session->set_userdata('inquilino_nom', $this->row->nom);
    }
}
