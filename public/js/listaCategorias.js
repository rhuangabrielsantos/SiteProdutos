$(document).ready(function () {
    $.ajax({
        dataType: 'json',
        type: "POST",
        url: '/app/index.php?controller=listaCategoria',
        success: function ($arr) {
            $arr.forEach(categoria => {
                $('#lista-categorias').append(
                    '<tr>' +
                    '<td>' + categoria.id + '</td>' +
                    '<td>' + categoria.nome + '</td>' +
                    '<td><a href="javascript:void(0)" onclick="editar(' + categoria.id + ')" ' +
                    'class="btn btn-primary btn-sm">Editar</a></td>' +
                    '<td><a href="javascript:void(0)" onclick="excluir(' + categoria.id + ')" ' +
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
        url: "/app/controllers/DeleteCategoria.php",
        data: {id: id},
        success: function () {
            alert("Deletado com Sucesso!");
            location.reload();
        }
    });
}

function editar(id) {
    $("body").load("/app/views/alterarCategoria/index.phtml", {id: id});
}