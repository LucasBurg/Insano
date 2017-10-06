<?php
class Inquilino_tabela_model extends CI_Model
{
    private $tabela;
    
    private $pk;
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->tabela = 'inquilino';
        $this->pk = 'id';
    }
    
    public function criar(Inquilino_model $data)
    {
        return $this->db->insert($this->tabela, $data);
    }
    
    public function alterar(Inquilino_model $data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->tabela, $data);
    }
    
    public function apagar($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->tabela);
    }  
    
    public function ultimo_id()
    {
        return $this->db->insert_id();
    }
    
    public function linhas_afetadas()
    {
        return $this->db->affected_rows();
    }
}

