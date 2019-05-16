<?php

include __DIR__ . "/../app/controllers/CategoriaControl.php";
include __DIR__ . "/../app/controllers/ProdutoControl.php";

$route = $_GET['controller'];
$nome = $_POST['nome'];
$id = $_POST['id'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];


switch ($route) {

    //rotas para Categorias
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

    //rotas para Produtos
    case 'adicionaProduto':
        ProdutoControl::adicionaProduto();
        break;

//    case 'listaProduto':
//        ProdutoControl::listaProduto();
//        break;
//
//    case 'deletarProtudo':
//        ProdutoControl::deletarProduto();
//        break;
//
//    case 'idProduto':
//        ProdutoControl::idProduto();
//        break;
//
//    case 'editarProduto':
//        ProdutoControl::editarProduto();
//        break;
}