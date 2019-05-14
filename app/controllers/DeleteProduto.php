<?php

include "Connect.php";

$id = $_POST['id'];

$query = ("DELETE FROM produtos WHERE id= '{$id}'");
mysqli_query($con, $query);