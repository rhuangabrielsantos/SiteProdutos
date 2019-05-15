<?php $id = $_POST['id'] ?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Alterar Categoria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/public/css/meu-css.css">
    <script src="/public/js/jquery-3.3.1.js"></script>
    <script src="/public/js/popper.js"></script>
    <script src="/public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/index.html">Inicio</a>
    <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            Produtos
        </button>
        <div class="dropdown-menu">
            <a class="nav-link" href="/app/views/listarProdutos">Lista dos Produtos</a>
            <a class="nav-link" href="/app/views/adicionarProduto">Adicionar Produtos</a>
        </div>
    </div>
    <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            Categorias
        </button>
        <div class="dropdown-menu">
            <a class="nav-link" href="/app/views/listarCategorias">Lista das Categoria</a>
            <a class="nav-link" href="/app/views/adicionarCategoria">Adicionar Categoria</a>
        </div>
    </div>
</nav>

<div>
    <form id="form-alterar" method="post">
    </form>
</div>

<script src="/public/js/jquery-3.3.1.js"></script>

<script>
    $(document).ready(function () {
        $.ajax({
            dataType: 'json',
            type: "POST",
            url: '/app/controllers/IdCategorias.php',
            data: "id=" + <?=$id?>,
            success: function (arr) {
                arr.forEach(categoria => {
                    $('#form-alterar').append(
                        '<div class="alinhar-centro">' +
                        '<div class="form-group">' +
                        '<label>Nome:</label>' +
                        '<input type="text" class="form-control" name="nome"' +
                        '               value="' + categoria.nome + '">' +
                        '</div>' +

                        '<div>' +
                        '<input type="hidden" name="id" value="' + categoria.id + '">' +
                        '</div>' +

                        '<div>' +
                        '<input type="submit" class="btn btn-primary" value="Adicionar">' +
                        '</div>' +
                        '</div>'
                    )
                })
            }
        });

        $('#form-alterar').submit(function (event) {
            event.preventDefault();

            $.ajax({
                type: 'POST',
                url: '/app/controllers/EditarBancoCategorias.php',
                cache: false,
                data: {
                    'dados': $('form').serialize()
                },
                success: function ($msg) {
                    alert($msg);
                    location.reload();
                }
            })
        });
    });
</script>

<script src="/public/js/listaCategorias.js"></script>
</body>
</html>