<?php
class Empresa_model extends CI_Model
{
    private $tabela;
    
    private $id;
    
    private $nomfan;
    
    private $razsoc;
    
    private $cnpj;
    
    private $tipo;
    
    private $end;
    
    private $num;
    
    private $bai;
    
    private $cidadeId;
    
    public function __construct()
    {
        parent::__construct();
        $this->laod->database();
        $this->tabela = 'empresa';
    }
    
    public function getTabela()
    {
        return $this->tabela;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNomfan()
    {
        return $this->nomfan;
    }

    public function getRazsoc()
    {
        return $this->razsoc;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function getNum()
    {
        return $this->num;
    }

    public function getBai()
    {
        return $this->bai;
    }

    public function getCidadeId()
    {
        return $this->cidadeId;
    }

    public function setTabela($tabela)
    {
        $this->tabela = $tabela;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNomfan($nomfan)
    {
        $this->nomfan = $nomfan;
    }

    public function setRazsoc($razsoc)
    {
        $this->razsoc = $razsoc;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function setEnd($end)
    {
        $this->end = $end;
    }

    public function setNum($num)
    {
        $this->num = $num;
    }

    public function setBai($bai)
    {
        $this->bai = $bai;
    }

    public function setCidadeId($cidadeId)
    {
        $this->cidadeId = $cidadeId;
    }

    public function criarEmpresa()
    {
        $data = [
            'nomfan' => $this->getNomfan(),
            'razsoc' => $this->getRazsoc(),
            'cnpj'   => $this->getCnpj(),
            'tipo'   => $this->getTipo(),
            'end'    => $this->getEnd(),
            'num'    => $this->getNum(),
            'bai'    => $this->getBai(),
            'cidade_id' => $this->getCidadeId()
        ];
        
        return $this->db->insert($this->tabela, $data);
    }
    
    
    
}

