$('#form-categorias').submit(function (event) {
    event.preventDefault();

    $.ajax({
        type: 'POST',
        url: '/app/index.php?controller=adicionaCategoria',
        cache: false,
        data: $('form').serialize(),
        success: function ($msg) {
            alert($msg);
            location.reload();
        },
    })
});