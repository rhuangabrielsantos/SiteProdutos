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
                session_start();
                $_SESSION["logado"] = TRUE;
            }
        }
    }

    public static function registraUsuario($usuario, $senha)
    {
        if (empty($usuario) || empty($senha)) {
            echo "Preencha todos os campos!";
        } else {
            $result = UsuarioModel::registraUsuario($usuario, $senha);
            if ($result == 1) {
                echo "Registrado com Sucesso!";
            } else {
                echo "Usuario já em uso!";
            }
        }
    }
}