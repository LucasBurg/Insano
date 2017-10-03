<?php
class Entrar_model extends CI_Model
{
    private $usu;
    
    private $sen;
    
    private $data;
    
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
        $stmt = $this->db->get_where('pessoa', array('usu' => $this->usu, 'sen' => $this->sen));
        return $stmt->row();
    }
    
    
    
    
}
