$('#register').submit(function (event) {
    event.preventDefault();

    $.ajax({
        type: 'POST',
        url: '/app/index.php?controller=registraUsuario',
        cache: false,
        data: $('form').serialize(),
        success: function ($msg) {
            alert($msg);
            if ($msg === "Registrado com Sucesso!"){
                location.href="/index.html";
            }
        }
    })
});