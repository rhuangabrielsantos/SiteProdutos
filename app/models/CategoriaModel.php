<?php

require_once __DIR__ . "/../../lib/DB.php";

class CategoriaModel
{
    static function adicionaCategoria($nome)
    {
        return DB::query("INSERT INTO categorias (nome) VALUES ('{$nome}')");
    }

    static function listaCategoriaPagina()
    {
        $queryList = DB::query("SELECT * FROM categorias");

        while ($result = mysqli_fetch_assoc($queryList)) {

            $arr[] = $result;
        }

        return json_encode($arr);
    }


    static function listaCategoria($id)
    {
        $select = DB::query("SELECT c.id, c.nome FROM categorias AS c JOIN produtos AS p ON p.categoria = c.id WHERE p.id='{$id}'");

        while ($result = mysqli_fetch_assoc($select)) {
            $selecionado = $result;

            $queryList = DB::query("SELECT * FROM categorias");

            while ($result2 = mysqli_fetch_assoc($queryList)) {

                if ($result2 != $selecionado) {
                    $arr[] = $result2;
                }
            }
        }

        return json_encode($arr);
    }

    static function deletarCategoria($id)
    {
        return DB::query("DELETE FROM categorias WHERE id='{$id}'");
    }

    static function idCategoria($id)
    {
        $queryList = DB::query("SELECT * FROM categorias WHERE id='{$id}'");

        while ($result = mysqli_fetch_assoc($queryList)) {
            $arr[] = $result;
        }

        return json_encode($arr);
    }

    static function editarCategoria($id, $nome)
    {
        return DB::query("UPDATE categorias SET nome='{$nome}' WHERE id='{$id}'");
    }
}