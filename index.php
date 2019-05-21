<?php

$alert = $_GET['error'];

?>

<html>
<head>
    <title>Bem Vindo!</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/meu-css.css">
    <script src="public/js/jquery-3.3.1.js"></script>
    <script src="public/js/popper.js"></script>
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<form id="login" class="login">
    <h1>Login</h1>
    <div class="form-group">
        <label>Usuario:</label>
        <input type="text" class="form-control" name="usuario" placeholder="Insira seu usuario">
    </div>
    <div class="form-group">
        <label>Senha:</label>
        <input type="password" class="form-control" name="senha" placeholder="Insira sua senha">
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
    <a> </a>
    <button type="button" id="registro" class="btn btn-secondary">Registrar</button>
</form>

<script src="public/js/verificaLogin.js"></script>

<script>
    $('#registro').click(function () {
        location.href="app/views/registrarUsuario/index.php";
    });

    <?php if ($alert == true) {?>
    alert("Faça Login para continuar!");
    <?php } ?>
</script>

</body>
</html>
