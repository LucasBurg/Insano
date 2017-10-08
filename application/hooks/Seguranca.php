<?php
class Seguranca
{
    public $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
    }

    public function verificar_autenticacao()
    {
        var_dump($this->session->userdata());
    }
}
