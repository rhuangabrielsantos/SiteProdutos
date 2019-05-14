<?php

include "Connect.php";

$queryList = mysqli_query($con, "SELECT * FROM categorias");
while ($result = mysqli_fetch_assoc($queryList)) {
    $arr[] = $result;
}

echo json_encode($arr);