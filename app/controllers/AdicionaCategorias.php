<?php

include __DIR__ . "/../../lib/DB.php";

$resultado = DB::query("INSERT INTO categorias (nome) VALUES ('{$_POST['nome']}')");

if ($resultado == 1) {
    $msg = "Categoria adicionada com sucesso!";
} else {
    $msg = "Categoria já adicionada!";
}

echo $msg;