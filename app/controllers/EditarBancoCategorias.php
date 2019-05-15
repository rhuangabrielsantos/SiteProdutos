<?php

include "Connect.php";

$params = array();
parse_str($_POST['dados'], $params);

$query = "UPDATE categorias SET nome='{$params[nome]}' WHERE id='{$params[id]}'";

$resultado = mysqli_query($con, $query);

if ($resultado == 1) {
    $msg = "Categoria alterada com sucesso!";
} else {
    $msg = "Categoria não foi alterada, verifique as informações e tente novamente";
}

echo "$msg";