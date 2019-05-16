<?php

include __DIR__ . "/../models/CategoriaModel.php";

class CategoriaControl
{
    public static function adicionaCategoria($nome)
    {
        $resultado = CategoriaModel::adicionaCategoria($nome);

        if ($resultado == 1) {
            $msg = "Categoria adicionada com sucesso!";
        } else {
            $msg = "Categoria já adicionada!";
        }
        echo $msg;
    }
}