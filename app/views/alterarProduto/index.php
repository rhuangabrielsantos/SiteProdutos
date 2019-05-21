<?php

session_start();

if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
    header("Location:/index.php?error=true");
}

$id = $_GET['id'];
?>


<html>
<head>
    <meta charset="UTF-8">
    <title>Alterar Produto</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/public/css/meu-css.css">
    <script src="/public/js/jquery-3.3.1.js"></script>
    <script src="/public/js/popper.js"></script>
    <script src="/public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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
    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/app/index.php?controller=logout">Logout</a>
            </li>
        </ul>
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
            url: '/app/index.php?controller=idProduto',
            data: "id=" + <?=$id?>,
            success: function (arr) {
                arr.forEach(produtos => {
                    $('#form-alterar').append(
                        '<div class="alinhar-centro">' +
                            '<div class="form-group">' +
                                '<label>Descrição:</label>' +
                                '<input type="text" class="form-control" name="descricao" value="' + produtos.descricao + '">' +
                            '</div>' +

                            '<div class="form-group">' +
                                '<label>Categoria:</label>' +
                                '<select class="custom-select" id="lista-categorias" name="categoria">' +
                                '<option></option>' +
                                '</select>' +
                            '</div>' +

                            '<div class="form-group">' +
                                '<label>Valor do Custo:</label>' +
                                '<input type="number" step="0.01" name="valor_custo" class="form-control" placeholder="0,00" ' +
                                'value="' + produtos.valor_custo + '">' +
                            '</div>' +

                            '<div class="form-group">' +
                                '<label>Valor de Venda:</label><br/>' +
                                '<input type="number" step="0.01" name="valor_venda" class="form-control" placeholder="0,00" ' +
                                'value="' + produtos.valor_venda + '">' +
                            '</div>' +

                            '<div>' +
                                '<input type="hidden" name="id" value="' + produtos.id + '">' +
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
                url: '/app/index.php?controller=editarProduto',
                cache: false,
                data: $('form').serialize(),
                success: function ($msg) {
                    alert($msg);
                    location.href="/app/views/listarProdutos/index.php";
                }
            })
        });
    });
</script>

<script src="/public/js/listaCategoriasForm.js"></script>

</body>


</html>