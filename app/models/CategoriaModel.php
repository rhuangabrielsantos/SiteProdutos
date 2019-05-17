<?php

require_once __DIR__ . "/../../lib/DB.php";

class CategoriaModel
{
    static function adicionaCategoria($nome)
    {
        return DB::query("INSERT INTO categorias (nome) VALUES ('{$nome}')");

    }

    static function listaCategoria()
    {
        $queryList = DB::query("SELECT * FROM categorias");

        while ($result = mysqli_fetch_assoc($queryList)) {
            $arr[] = $result;
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

        while ($result = mysqli_fetch_assoc($queryList)){
            $arr[] = $result;
        }

        return json_encode($arr);
    }

    static function editarCategoria($id, $nome)
    {
        return DB::query("UPDATE categorias SET nome='{$nome}' WHERE id='{$id}'");
    }
}