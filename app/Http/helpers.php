<?php

if (!function_exists('validateCpf')) {

    function validateCpf($cpf) {
        // Extrai somente os números
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }
        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }
        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
        return true;
    }
    
}

if (!function_exists('generatePasswordString')){
    /*Gera senha para usuário*/
    function generatePasswordString($lenght = 8, $lowercase = true, $numbers = true)
    {
        $table = $list = array();
        if ($lowercase){
            $table = array_merge($table, range(97, 122));
        }
        if ($numbers){
            $table = array_merge($table, range(48, 57));
        }
        for ($i = 0; $i < $lenght; $i++){
            $char = $table[array_rand($table)];
            array_push($list, chr($char));
        }
        return implode('', $list);
    }
}

if (!function_exists('generateRandomNumberFixLength')){
    function generateRandomNumberFixLength($length = 6) {
        $result = '';

        for($i = 0; $i < $length; $i++) {
            $result .= mt_rand(0, 9);
        }

        return $result;
    }
}

if (!function_exists('getRandomString')){
    function getRandomString($length = 6) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string = '';

        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[mt_rand(0, strlen($characters) - 1)];
        }

        return $string;
    }
}
