<?php

require_once __DIR__ . "/../models/CategoriaModel.php";

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

    public static function listaCategoriaPagina()
    {
        $result = CategoriaModel::listaCategoriaPagina();

        echo $result;
    }

    public static function listaCategoria($id)
    {
        $result = CategoriaModel::listaCategoria($id);

        echo $result;
    }

    public static function deletarCategoria($id)
    {
        CategoriaModel::deletarCategoria($id);
    }

    public static function idCategoria($id)
    {
        $arr = CategoriaModel::idCategoria($id);

        echo $arr;
    }

    public static function editarCategoria($id, $nome)
    {
        $resultado = CategoriaModel::editarCategoria($id, $nome);

        if ($resultado == 1) {
            $msg = "Categoria alterada com sucesso!";
        } else {
            $msg = "Categoria não foi alterada, verifique as informações e tente novamente";
        }

        echo "$msg";
    }
}