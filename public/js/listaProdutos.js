$(document).ready(function () {
    $.ajax({
        dataType: 'json',
        type: "POST",
        url: '/app/controllers/ListaProdutos.php',
        success: function (arr) {
            arr.forEach(produtos => {
                $('#lista-produtos').append(
                    '<tr>'+
                    '<td>' + produtos.id + '</td>' +
                    '<td>' + produtos.descricao + '</td>' +
                    '<td>' + produtos.categoria + '</td>' +
                    '<td>R$ ' + produtos.valor_custo + '</td>' +
                    '<td>R$ ' + produtos.valor_venda + '</td>'+
                    '</tr>'
                )
            })
        }
    });
});