<?php
/**
 * Retorna o formato padrão da data do banco de dados
 */
if (!function_exists('formata_data')){
    function formata_data($str_data)
    {
        $data = date_create_from_format('d/m/Y', $str_data);
        return date_format($data, 'Y-m-d');
    }
}

