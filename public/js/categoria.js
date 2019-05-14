$('#form-categorias').submit(function (event) {
    event.preventDefault();

    $.ajax({
        type: 'POST',
        url: '/app/controllers/AdicionaCategorias.php',
        cache: false,
        data: {
            'dados': $('form').serialize()
        },
        success: function ($msg) {
            alert($msg);
            location.reload();
        },
    })
});