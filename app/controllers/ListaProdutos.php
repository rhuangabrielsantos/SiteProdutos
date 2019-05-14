<?php

include "Connect.php";

$queryList = mysqli_query($con, "SELECT * FROM produtos");
while ($result = mysqli_fetch_assoc($queryList)) {
    $arr[] = $result;
}

echo json_encode($arr);