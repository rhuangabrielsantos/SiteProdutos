<?php

$alert = $_GET['error'];

?>

<html>
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="/public/img/favicon.png">
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/meu-css.css">
    <script src="public/js/jquery-3.3.1.js"></script>
    <script src="public/js/popper.js"></script>
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="pageLogin">

<form id="login" class="login">
    <img src="public/img/logo.png" class="img">
    <div class="divLogin">
        <div class="form-group">
            <input type="text" class="form-control" name="usuario" placeholder="Usuario">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="senha" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary btnLogin">Entrar</button>
        <a>Registre-se clicando </a><a href="javascript:void(0)" onclick="registro()">Aqui</a>
    </div>
</form>

<script src="public/js/verificaLogin.js"></script>

<script>
    function registro(){
        location.href = "app/views/registrarUsuario/index.html";
    }

    <?php if ($alert == true) {?>
    alert("Por favor, faça login para continuar!");
    <?php } ?>
</script>

</body>
</html>