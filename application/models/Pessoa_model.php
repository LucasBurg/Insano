<?php
class Pessoa_model extends CI_Model
{
    private $tabela;
    
    private $id;
    
    private $cod;
    
    private $nom;
    
    private $datnas;
    
    private $usu;
    
    private $ema;
    
    private $sen;
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
        $this->tabela = 'pessoa';
    }
    
    function getId() {
        return $this->id;
    }

    function getCod() {
        return $this->cod;
    }

    function getNom() {
        return $this->nom;
    }

    function getDatnas() {
        return $this->datnas;
    }

    function getUsu() {
        return $this->usu;
    }

    function getEma() {
        return $this->ema;
    }

    function getSen() {
        return $this->sen;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setDatnas($datnas) {
        $this->datnas = $datnas;
    }

    function setUsu($usu) {
        $this->usu = $usu;
    }

    function setEma($ema) {
        $this->ema = $ema;
    }

    function setSen($sen) {
        $this->sen = $sen;
    }

    public function criarPessoa()
    {
        $data = [
            'nom'    => $this->getNom(),
            'datnas' => $this->getDatnas(),
            'usu'    => $this->getUsu(),
            'sen'    => $this->getSen(),
            'ema'    => $this->getEma()
        ];
    
        return $this->db->insert($this->tabela, $data);
    }
    
}

