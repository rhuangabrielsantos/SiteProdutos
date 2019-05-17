$(document).ready(function () {
    $.ajax({
        dataType: 'json',
        type: "POST",
        url: '/app/index.php?controller=listaProduto',
        success: function ($arr) {
            $arr.forEach(produtos => {
                $('#lista-produtos').append(
                    '<tr>' +
                    '<td>' + produtos.id + '</td>' +
                    '<td>' + produtos.descricao + '</td>' +
                    '<td>' + produtos.categoria + '</td>' +
                    '<td>R$ ' + produtos.valor_custo + '</td>' +
                    '<td>R$ ' + produtos.valor_venda + '</td>' +
                    '<td><a href="javascript:void(0)" onclick="editar(' + produtos.id + ')" ' +
                    'class="btn btn-primary btn-sm">Editar</a></td>' +
                    '<td><a href="javascript:void(0)" onclick="excluir(' + produtos.id + ')" ' +
                    'class="btn btn-danger btn-sm">Excluir</a></td>' +
                    '</tr>'
                )
            })
        }
    });
});

function excluir(id) {
    $.ajax({
        type: "POST",
        url: "/app/index.php?controller=deletarProduto",
        data: {id: id},
        success: function () {
            alert("Produto Deletado com Sucesso!");
            location.reload();
        }
    });
}

function editar(id) {
    $("body").load("/app/views/alterarProduto/index.phtml", {id: id});
}