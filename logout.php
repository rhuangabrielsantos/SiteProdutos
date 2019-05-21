<?php

//INICIO A SESSÃO
session_start();

if (session_destroy()) {
    echo "Sessão destruída";
} else {
    echo "Não foi possível destruir a sessão";
    die;
}

header('location:/index.php');