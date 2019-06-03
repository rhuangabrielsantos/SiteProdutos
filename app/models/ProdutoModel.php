<?php

require_once __DIR__ . "/../../lib/DB.php";

class ProdutoModel
{
    public static function adicionaProduto($descricao, $categoria, $valor_custo, $valor_venda)
    {
        return DB::query("INSERT INTO produtos (descricao, categoria, valor_custo, valor_venda)
                               VALUES ('{$descricao}', '{$categoria}', '{$valor_custo}', '{$valor_venda}')");
    }

    public static function listaProduto()
    {
        $queryList = DB::query("SELECT p.*,c.nome as categoria_nome 
                                     FROM produtos as p JOIN categorias as c on c.id=p.categoria");

        while ($result = mysqli_fetch_assoc($queryList)) {
            $arr[] = $result;
        }

        return json_encode($arr);
    }

    public static function deletarProduto($id)
    {
        return DB::query("DELETE FROM produtos WHERE id= '{$id}' ");
    }

    public static function idProduto($id)
    {
        $queryList = DB::query("SELECT p.*, c.nome 
                                    FROM produtos as p JOIN categorias as c on c.id=p.categoria WHERE p.id='{$id}';");

        while ($result = mysqli_fetch_assoc($queryList)) {
            $arr[] = $result;
        }

        return json_encode($arr);
    }

    public static function editarProduto($descricao, $categoria, $valor_custo, $valor_venda, $id)
    {
        return DB::query("UPDATE produtos SET descricao='{$descricao}', categoria='{$categoria}',
                                valor_custo='{$valor_custo}', valor_venda='{$valor_venda}' WHERE id='{$id}'");
    }
}