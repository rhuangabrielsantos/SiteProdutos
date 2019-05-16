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

    public static function listaCategoria()
    {
        $queryList = CategoriaModel::listaCategoria();

        while ($result = mysqli_fetch_assoc($queryList)) {
            $arr[] = $result;
        }

        echo json_encode($arr);
    }

    public static function deletarCategoria($id)
    {
        CategoriaModel::deletarCategoria($id);
    }

    public static function idCategoria($id)
    {
        $queryLista = CategoriaModel::idCategoria($id);

        while ($result = mysqli_fetch_assoc($queryLista)) {
            $arr[] = $result;
        }

        echo json_encode($arr);
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