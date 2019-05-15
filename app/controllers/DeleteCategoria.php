<?php

include "Connect.php";

$id = $_POST['id'];

$query = ("DELETE FROM categorias WHERE id= '{$id}'");
mysqli_query($con, $query);