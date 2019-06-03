<?php

require_once __DIR__ . "/../app/controllers/CategoriaControl.php";
require_once __DIR__ . "/../app/controllers/ProdutoControl.php";
require_once __DIR__ . "/../app/controllers/UsuarioControl.php";

$route = $_GET['controller'];

//variaveis categorias
$nome = $_POST['nome'];
$id = $_POST['id'];

//variaveis produtos
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$valor_custo = $_POST['valor_custo'];
$valor_venda = $_POST['valor_venda'];

//variaveis login
$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

switch ($route) {

    //rotas para Categorias
    case 'adicionaCategoria':
        CategoriaControl::adicionaCategoria($nome);
        break;

    case 'listaCategoriaPagina':
        CategoriaControl::listaCategoriaPagina();
        break;

    case 'listaCategoria':
        CategoriaControl::listaCategoria($id);
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
        ProdutoControl::adicionaProduto($descricao, $categoria, $valor_custo, $valor_venda);
        break;

    case 'listaProduto':
        ProdutoControl::listaProduto();
        break;

    case 'deletarProduto':
        ProdutoControl::deletarProduto($id);
        break;

    case 'idProduto':
        ProdutoControl::idProduto($id);
        break;

    case 'editarProduto':
        ProdutoControl::editarProduto($descricao, $categoria, $valor_custo, $valor_venda, $id);
        break;

    //rotas para login
    case 'verificaLogin':
        UsuarioControl::verificaLogin($usuario, $senha);
        break;

    case 'registraUsuario':
        UsuarioControl::registraUsuario($usuario, $senha);
        break;

    case 'logout':
        UsuarioControl::logout();
        break;
}