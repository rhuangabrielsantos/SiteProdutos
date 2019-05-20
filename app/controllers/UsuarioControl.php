<?php

require_once __DIR__ . "/../models/UsuarioModel.php";

class UsuarioControl
{
    public static function verificaLogin($usuario, $senha)
    {
        $result = UsuarioModel::verificaLogin($usuario, $senha);

        if (empty($usuario) || empty($senha)) {
            echo "Preencha todos os campos!";
        } else {
            if ($result == 'null') {
                echo "Usuario ou Senha Inválidos";
            } else {
                echo "Bem vindo!";
                $login = true;
                setcookie('login', '1');
            }
        }
    }
}