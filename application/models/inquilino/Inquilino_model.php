<?php
class Inquilino_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function get_id()
    {
        return $this->id;
    }
    
    public function get_nom()
    {
        return $this->nom;
    }

    public function get_sen()
    {
        return $this->sen;
    }

    public function get_usu()
    {
        return $this->usu;
    }
    
    public function get_usu_cre()
    {
        return $this->usu_cre;
    }

    public function get_dat_cre()
    {
        return $this->dat_cre;
    }

    public function get_usu_mod()
    {
        return $this->usu_mod;
    }

    public function get_dat_mod()
    {
        return $this->dat_mod;
    }
    
    public function get_dat_nas()
    {
        return $this->dat_nas;
    }
    
    public function get_ema()
    {
        return $this->ema;
    }
    
    public function set_dat_nas($dat_nas)
    {
        $this->dat_nas = $dat_nas;
    }
    
    public function set_ema($ema)
    {
        $this->ema = $ema;
    }
    
    public function set_id($id)
    {
        $this->id = $id;
    }
    
    public function set_nom($nom)
    {
        $this->nom = $nom;
    }
    
    public function set_sen($sen)
    {
        $this->sen = $sen;
    }

    public function set_usu($usu)
    {
        $this->usu = $usu;
    }
    
    public function set_usu_cre($usu_cre)
    {
        $this->usu_cre = $usu_cre;
    }

    public function set_dat_cre($dat_cre)
    {
        $this->dat_cre = $dat_cre;
    }

    public function set_usu_mod($usu_mod)
    {
        $this->usu_mod = $usu_mod;
    }

    public function set_dat_mod($dat_mod)
    {
        $this->dat_mod = $dat_mod;
    }   
}

