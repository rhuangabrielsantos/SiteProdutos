<?php

include __DIR__ . "/../app/controllers/CategoriaControl.php";

$route = $_GET['controller'];
$nome = $_POST['nome'];

switch ($route) {

    case 'adicionaCategoria':
        CategoriaControl::adicionaCategoria($nome);
        break;
}