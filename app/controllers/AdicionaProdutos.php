<?php

include "Connect.php";

$params = array();
parse_str($_POST['dados'], $params);

$query = "INSERT INTO produtos (descricao, categoria, valor_custo, valor_venda)
VALUES ('{$params[descricao]}', '{$params[categoria]}', '{$params[valor_custo]}', '{$params[valor_venda]}')";

$resultado = mysqli_query($con, $query);

if ($resultado == 1) {
    $msg = "Produto adicionado com sucesso!";
} else {
    $msg = "Produto já adicionado!";
}

echo "$msg";