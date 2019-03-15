/**
 * @author Alexander Chi
 * @since 13/10/2018
 * @Company News-it
 */
var arrayF = ["cFinanciamiento"];
var arrayClavesF = ["claveFinanciamiento"];
var arrayG = ["cGrafica1", "cGrafica2", "cGrafica3"];
var arrayClavesG = ["claveGrafica1", "claveGrafica2", "claveGrafica3"];
var arrayI = ["cInversion"];
var arrayClavesI = ["claveInversion"];
var arrayP = ["cPatrimonio"];
var arrayClavesP = ["clavePatrimonio"];

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
            valor: "FINANCIAMIENTO",
        },
        success: function(data) {
            
            $.each(data, function(index, item) {
                $("#" + arrayClavesF[index]).val(item.id);
                $("#" + arrayF[index]).val(item.valor).trigger('change');
                if ($("#" + arrayF[index]).length > 0) {
                    $("#" + arrayF[index]).removeClass("mui--is-empty mui--is-pristine mui--is-touched");
                    $("#" + arrayF[index]).addClass("mui--is-dirty mui--is-not-empty mui--is-touched");
                } else {
                    $("#" + arrayF[index]).removeClass("mui--is-dirty mui--is-not-empty mui--is-touched");
                    $("#" + arrayF[index]).addClass("mui--is-empty mui--is-pristine mui--is-touched");
                }

            });
        },
        error: function(e, x, settings, exception) {
            failGeneric(e, x, settings, exception);
        },
    });

    $.ajax({
        url: 'getInformacion',
        type: 'post',
        dataType: "json",
        data: {
            valor: "SERVICIOS_FINANCIAMIENTO",
        },
        success: function(data) {
            
            $.each(data, function(index, item) {
                $("#" + arrayClavesG[index]).val(item.id);
                $("#" + arrayG[index]).val(item.valor).trigger('change');
                if ($("#" + arrayG[index]).length > 0) {
                    $("#" + arrayG[index]).removeClass("mui--is-empty mui--is-pristine mui--is-touched");
                    $("#" + arrayG[index]).addClass("mui--is-dirty mui--is-not-empty mui--is-touched");
                } else {
                    $("#" + arrayG[index]).removeClass("mui--is-dirty mui--is-not-empty mui--is-touched");
                    $("#" + arrayG[index]).addClass("mui--is-empty mui--is-pristine mui--is-touched");
                }

            });
        },
        error: function(e, x, settings, exception) {
            failGeneric(e, x, settings, exception);
        },
    });

    $.ajax({
        url: 'getInformacion',
        type: 'post',
        dataType: "json",
        data: {
            valor: "SERVICIOS_INVERSION",
        },
        success: function(data) {
            
            $.each(data, function(index, item) {
                $("#" + arrayClavesI[index]).val(item.id);
                $("#" + arrayI[index]).val(item.valor).trigger('change');
                if ($("#" + arrayI[index]).length > 0) {
                    $("#" + arrayI[index]).removeClass("mui--is-empty mui--is-pristine mui--is-touched");
                    $("#" + arrayI[index]).addClass("mui--is-dirty mui--is-not-empty mui--is-touched");
                } else {
                    $("#" + arrayI[index]).removeClass("mui--is-dirty mui--is-not-empty mui--is-touched");
                    $("#" + arrayI[index]).addClass("mui--is-empty mui--is-pristine mui--is-touched");
                }

            });
        },
        error: function(e, x, settings, exception) {
            failGeneric(e, x, settings, exception);
        },
    });

    $.ajax({
        url: 'getInformacion',
        type: 'post',
        dataType: "json",
        data: {
            valor: "SERVICIOS_PATRIMONIO",
        },
        success: function(data) {
            
            $.each(data, function(index, item) {
                $("#" + arrayClavesP[index]).val(item.id);
                $("#" + arrayP[index]).val(item.valor).trigger('change');
                if ($("#" + arrayP[index]).length > 0) {
                    $("#" + arrayP[index]).removeClass("mui--is-empty mui--is-pristine mui--is-touched");
                    $("#" + arrayP[index]).addClass("mui--is-dirty mui--is-not-empty mui--is-touched");
                } else {
                    $("#" + arrayP[index]).removeClass("mui--is-dirty mui--is-not-empty mui--is-touched");
                    $("#" + arrayP[index]).addClass("mui--is-empty mui--is-pristine mui--is-touched");
                }

            });
        },
        error: function(e, x, settings, exception) {
            failGeneric(e, x, settings, exception);
        },
    });

    $("#formServicios").validate({
      rules: {
        cFinanciamiento: { required: true, },
        cGrafica1: { required: true, },
        cGrafica2: { required: true, },
        cGrafica3: { required: true, },
        cInversion: { required: true, },
        cPatrimonio: { required: true, },
      }, messages: {
        cFinanciamiento: { required: '<span class="text-danger">Campo requerido</span>', },
        cGrafica1: { required: '<span class="text-danger">Campo requerido</span>', },
        cGrafica2: { required: '<span class="text-danger">Campo requerido</span>', },
        cGrafica3: { required: '<span class="text-danger">Campo requerido</span>', },
        cInversion: { required: '<span class="text-danger">Campo requerido</span>', },
        cPatrimonio: { required: '<span class="text-danger">Campo requerido</span>', },
      },
      submitHandler: function(form) {
               console.log($(this));
            }
    });

    $('#btnGuardar').click(function(){
      if($("#formServicios").valid()) {
        var formData = [
            { id: $("#" + arrayClavesF[0]).val(), value: $("#" + arrayF[0]).val() },
            { id: $("#" + arrayClavesG[0]).val(), value: $("#" + arrayG[0]).val() },
            { id: $("#" + arrayClavesG[1]).val(), value: $("#" + arrayG[1]).val() },
            { id: $("#" + arrayClavesG[2]).val(), value: $("#" + arrayG[2]).val() },
            { id: $("#" + arrayClavesI[0]).val(), value: $("#" + arrayI[0]).val() },
            { id: $("#" + arrayClavesP[0]).val(), value: $("#" + arrayP[0]).val() },
        ];
        saveRegistro(formData);
      }
    });

});

function saveRegistro(formData){
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