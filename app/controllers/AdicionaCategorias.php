<?php

include "Connect.php";

$params = array();
parse_str($_POST['dados'], $params);

$query = "INSERT INTO categorias (nome) VALUES ('{$params[nome]}')";
$resultado = mysqli_query($con, $query);

if ($resultado == 1) {
    $msg = "Categoria adicionada com sucesso!";
} else {
    $msg = "Categoria já adicionada!";
}

echo "$msg";