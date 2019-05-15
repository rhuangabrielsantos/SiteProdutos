<?php $id = $_POST['id'] ?>

<html>
    <head>
        <link href="/public/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/public/css/meu-css.css" rel="stylesheet">
        <meta charset="UTF-8">
        <title>Editar Produto</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/app/views/listarProdutos">Lista dos Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/app/views/adicionarProduto">Adicionar Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/app/views/listarCategorias">Lista das Categoria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/app/views/adicionarCategoria">Adicionar Categoria</a>
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