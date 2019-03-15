$(document).ready(function() {

    $.ajaxSetup({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });

    $("#formInicioSesion").validate({
        rules: {
            cPassword: {
                required: true,
            },
            cCorreoElectronico: {
                required: true,
                email: true
            },
        },
        messages: {
            cPassword: {
                required: '<span class="text-danger">Campo requerido</span>',
            },
            cCorreoElectronico: {
                required: '<span class="text-danger">Campo requerido</span>',
                email: '<span class="text-danger">Patron invalido</span>',
            },
        },
    });

    $('#btnInicioSesion').click(function() {
        if ($("#formInicioSesion").valid()) {
            $.ajax({
                url: 'iniciarSesion',
                type: 'post',
                dataType: "json",
                data: {
                    cPassword: $("#cPassword").val(),
                    cCorreoElectronico: $("#cCorreoElectronico").val()
                },
                success: function(data) {
                    console.info(data);
                    if (data.success === true) {
                        window.location.href = "/Carrusel";
                    } else {
                        swal ( "Ocurrio un error" , "Usuario o contraseña incorrectos.",  "error" );
                    }
                },
                error: function(e, x, settings, exception) {
                    failGeneric(e, x, settings, exception);
                }
            });
        }
    });

});