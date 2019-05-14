$('#form-produtos').submit(function (event) {
    event.preventDefault();

    $.ajax({
        type: 'POST',
        url: '/app/controllers/AdicionaProdutos.php',
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