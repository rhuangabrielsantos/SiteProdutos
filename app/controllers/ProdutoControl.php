<?php

require_once __DIR__ . "/../models/ProdutoModel.php";

class ProdutoControl
{
    public static function adicionaProduto($descricao, $categoria, $valor_custo, $valor_venda)
    {
        $result = ProdutoModel::adicionaProduto($descricao, $categoria, $valor_custo, $valor_venda);

        if ($result == 1) {
            $msg = "Produto adicionado com sucesso!";
        } else {
            $msg = "Produto já adicionado!";
        }

        echo "$msg";
    }

    public static function listaProduto()
    {
        $queryList = ProdutoModel::listaProduto();

        while ($result = mysqli_fetch_assoc($queryList)) {
            $arr[] = $result;
        }

        echo json_encode($arr);
    }

    public static function deletarProduto($id)
    {
        ProdutoModel::deletarProduto($id);
    }

    public static function idProduto($id)
    {
        $queryList = ProdutoModel::idProduto($id);

        while ($result = mysqli_fetch_assoc($queryList)) {
            $arr[] = $result;
        }

        echo json_encode($arr);
    }

    public static function editarProduto($descricao, $categoria, $valor_custo, $valor_venda)
    {
        $result = ProdutoModel::editarProduto($descricao, $categoria, $valor_custo, $valor_venda);

        if ($result == 1) {
            $msg = "Produto alterado com sucesso!";
        } else {
            $msg = "Produto não foi alterado, verifique as informações e tente novamente";
        }

        echo "$msg";
    }
}