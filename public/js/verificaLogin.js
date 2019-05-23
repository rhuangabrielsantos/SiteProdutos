$('#login').submit(function (event) {
    event.preventDefault();

    $.ajax({
        type: 'POST',
        url: '/app/index.php?controller=verificaLogin',
        cache: false,
        data: $('form').serialize(),
        success: function ($msg) {
            alert($msg);
            if ($msg === "Bem vindo!"){
                location.href="app/views/listarProdutos/index.php";
            }
        }
    })
});