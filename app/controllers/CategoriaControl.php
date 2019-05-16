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

}