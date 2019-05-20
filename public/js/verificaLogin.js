$('#login').submit(function (event) {
    event.preventDefault();

    $.ajax({
        type: 'POST',
        url: '/app/index.php?controller=verificaLogin',
        cache: false,
        data: $('form').serialize(),
        success: function ($msg, $login) {
            if ($login = true){
                alert($msg);
                location.href="/app/views/listarProdutos/index.html";
            } else {
                alert($msg);
            }
        },
    })
});