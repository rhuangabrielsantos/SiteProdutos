<?php $id = $_POST['id'] ?>

<html>
<head>
    <link href="/public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/public/css/meu-css.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Editar Produto</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/app/views/listarProdutos">Lista dos Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/app/views/adicionarProduto">Adicionar Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/app/views/adicionarCategoria">Adicionar Categoria</a>
            </li>
        </ul>
    </div>
</nav>

<div>
    <form id="form-alterar">
    </form>
</div>

<script src="/public/js/jquery-3.3.1.js"></script>

<script>
    $(document).ready(function () {
        $.ajax({
            dataType: 'json',
            type: "POST",
            url: '/app/controllers/IdProdutos.php',
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
                            '<option selected>'+ produtos.categoria +'</option>'+
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
                        '<input type="submit" class="btn btn-primary" value="Adicionar">' +
                        '</div>' +
                        '</div>'
                    )
                })
            }
        });

        $('#formulario').submit(function (event) {
            event.preventDefault();

            $.ajax({
                type: 'POST',
                url: '/app/controllers/EditarBancoProdutos.php',
                cache: false,
                data: {
                    'dados': $('form').serialize()
                },
                success: function () {
                    alert("Registrado com Sucesso!");
                    location.reload();
                }
            })
        });
    });
</script>

<script src="/public/js/listaCategorias.js"></script>

</body>


</html>