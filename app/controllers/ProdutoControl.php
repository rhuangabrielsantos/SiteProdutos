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
        $arr = ProdutoModel::listaProduto();

        echo $arr;
    }

    public static function deletarProduto($id)
    {
        ProdutoModel::deletarProduto($id);
    }

    public static function idProduto($id)
    {
        $arr = ProdutoModel::idProduto($id);

        echo $arr;
    }

    public static function editarProduto($descricao, $categoria, $valor_custo, $valor_venda, $id)
    {
        $result = ProdutoModel::editarProduto($descricao, $categoria, $valor_custo, $valor_venda, $id);

        if ($result == 1) {
            $msg = "Produto alterado com sucesso!";
        } else {
            $msg = "Produto não foi alterado, verifique as informações e tente novamente";
        }

        echo "$msg";
    }
}