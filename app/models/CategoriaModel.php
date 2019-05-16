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
        return DB::query("SELECT * FROM categorias");
    }

    static function deletarCategoria($id)
    {
        return DB::query("DELETE FROM categorias WHERE id='{$id}'");
    }

    static function idCategoria($id)
    {
        return DB::query("SELECT * FROM categorias WHERE id='{$id}'");
    }

    static function editarCategoria($id, $nome)
    {
        return DB::query("UPDATE categorias SET nome='{$nome}' WHERE id='{$id}'");
    }
}