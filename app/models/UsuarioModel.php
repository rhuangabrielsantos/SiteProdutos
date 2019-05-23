<?php

require_once __DIR__ . "/../../lib/DB.php";

class UsuarioModel
{
    public static function verificaLogin($usuario, $senha)
    {
        $queryList = DB::query("SELECT * FROM usuarios WHERE usuario='{$usuario}' AND senha='{$senha}'");

        while ($result = mysqli_fetch_assoc($queryList)) {
            $arr[] = $result;
        }

        return json_encode($arr);
    }

    public static function registraUsuario($usuario, $senha)
    {
        return DB::query("INSERT INTO usuarios (usuario, senha) VALUES ('{$usuario}', '{$senha}')");
    }
}