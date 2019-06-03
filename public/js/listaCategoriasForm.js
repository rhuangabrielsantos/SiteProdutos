$(document).ready(function () {
    $.ajax({
        dataType: 'json',
        type: "POST",
        url: '/app/index.php?controller=listaCategoriaPagina',
        success: function (arr) {
            arr.forEach(categoria => {
                $('#lista-categorias').append(
                    '<option value="' + categoria.id + '">' + categoria.nome + '</option>'
                )
            })
        }
    });
});