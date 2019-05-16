$('#form-produtos').submit(function (event) {
    event.preventDefault();

    $.ajax({
        type: 'POST',
        url: '/app/index.php?controller?adicionaProduto',
        cache: false,
        data: $('form').serialize(),
        success: function ($msg) {
            alert($msg);
            location.reload();
        },
    })
});