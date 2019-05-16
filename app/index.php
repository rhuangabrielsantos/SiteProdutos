<?php

include __DIR__ . "/../app/controllers/CategoriaControl.php";

$route = $_GET['controller'];
$nome = $_POST['nome'];
$id = $_POST['id'];

switch ($route) {

    case 'adicionaCategoria':
        CategoriaControl::adicionaCategoria($nome);
        break;

    case 'listaCategoria':
        CategoriaControl::listaCategoria();
        break;

    case 'deletarCategoria':
        CategoriaControl::deletarCategoria($id);
        break;

    case 'idCategoria':
        CategoriaControl::idCategoria($id);
        break;

    case 'editarCategoria':
        CategoriaControl::editarCategoria($id, $nome);
        break;
}