/**
 * @author Alexander Chi
 * @since 13/10/2018
 * @Company News-it
 */

var array = ["cDireccion", "cTel1", "cTel2", "cCorreo"];
var arrayClaves = ["claveDireccion", "claveTel1", "claveTel2", "claveCorreo"];

$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: 'getInformacion',
        type: 'post',
        dataType: "json",
        data: {
            valor: "CONTACTO",
        },
        success: function(data) {
            $.each(data, function(index, item) {
                $("#" + array[index]).val(item.valor).trigger('change');
                $("#" + arrayClaves[index]).val(item.id);
                if ($("#" + array[index]).length > 0) {
                    $("#" + array[index]).removeClass("mui--is-empty mui--is-pristine mui--is-touched");
                    $("#" + array[index]).addClass("mui--is-dirty mui--is-not-empty mui--is-touched");
                } else {
                    $("#" + array[index]).removeClass("mui--is-dirty mui--is-not-empty mui--is-touched");
                    $("#" + array[index]).addClass("mui--is-empty mui--is-pristine mui--is-touched");
                }

            });
        },
        error: function(e, x, settings, exception) {
            failGeneric(e, x, settings, exception);
        },
    });

    $("#formContacto").validate({
      rules: {
        cDireccion: { required: true, },
        cTel1: { required: true, },
        cTel2: { required: true, },
        cCorreo: { required: true, },
      }, messages: {
        cDireccion: { required: '<span class="text-danger">Campo requerido</span>', },
        cTel1: { required: '<span class="text-danger">Campo requerido</span>', },
        cTel2: { required: '<span class="text-danger">Campo requerido</span>', },
        cCorreo: { required: '<span class="text-danger">Campo requerido</span>', },
      },
      submitHandler: function(form) {
               console.log($(this));
            }
    });

    $('#btnGuardar').click(function(){
      if($("#formContacto").valid()) {
        saveRegistro();
      }
    });

});

function saveRegistro(){
    var formData = [
        { id: $("#" + arrayClaves[0]).val(), value: $("#" + array[0]).val() },
        { id: $("#" + arrayClaves[1]).val(), value: $("#" + array[1]).val() },
        { id: $("#" + arrayClaves[2]).val(), value: $("#" + array[2]).val() },
        { id: $("#" + arrayClaves[3]).val(), value: $("#" + array[3]).val() },
    ];
   
    $.ajax({
        url: 'saveInformacion',
        type: 'post',
        dataType: "json",
        data: {
            seccion: "TEXTO",
            data: JSON.stringify(formData)
        },
        success: function(data) {
             console.info(data)
            swal ( "¡Éxito!" , "Registros actualizados correctamente",  "success" );
        },
        error: function(e, x, settings, exception) {
            failGeneric(e, x, settings, exception);
        },
    });

}