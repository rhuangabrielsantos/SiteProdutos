<?php

include "Connect.php";

$params = array();
parse_str($_POST['dados'], $params);

$query = "UPDATE produtos SET descricao='{$params['descricao']}', categoria='{$params['categoria']}', 
valor_custo='{$params['valor_custo']}', valor_venda='{$params['valor_venda']}' WHERE id='{$params['id']}'";

$resultado = mysqli_query($con, $query);

if ($resultado == 1) {
    $msg = "Produto alterado com sucesso!";
} else {
    $msg = "Produto não foi alterado, verifique as informações e tente novamente";
}

echo "$msg";