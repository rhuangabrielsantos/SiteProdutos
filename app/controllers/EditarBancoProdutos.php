<?php

include "Connect.php";

$params = array();

// parse_str converte uma string em variáveis e define no array passado pelo segundo parametro (&arr)
parse_str($_POST['dados'], $params);

$query = "UPDATE produtos SET descricao='{$params[descricao]}', categoria='{$params[categoria]}', 
valor_custo='{$params[valor_custo]}', valor_venda='{$params[valor_venda]}' WHERE id={$params[id]}";
mysqli_query($con, $query);

exit;