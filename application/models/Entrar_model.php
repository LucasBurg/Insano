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
    
    
    public function setUsu($value)
    {
        $this->usu = $value;
    }
    
    public function setSen($value)
    {
        $this->sen = $value;
    }

    public function valido()
    {
        $query = $this->db->get_where('pessoa', ['usu' => $this->usu, 'sen' => $this->sen]);
        return $query->row();
    }
    
    
    
    
}
