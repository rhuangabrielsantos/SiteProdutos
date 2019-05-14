<?php

include "Connect.php";

$id = $_POST['id'];

$queryLista = mysqli_query($con, "SELECT * FROM produtos WHERE id='{$id}'");

while ($result = mysqli_fetch_assoc($queryLista)) {
    $arr[] = $result;
}

echo json_encode($arr);