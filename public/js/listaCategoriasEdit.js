$(document).ready(function () {
    $.ajax({
        dataType: 'json',
        type: "POST",
        url: '/app/controllers/ListaCategorias.php',
        success: function (arr) {
            arr.forEach(categoria => {
                $('#lista-categorias').append(
                    '<option value="'+categoria.nome+'">'+categoria.nome+'</option>'
                )
            })
        }
    });
});