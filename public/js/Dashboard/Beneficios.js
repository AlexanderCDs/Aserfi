/**
 * @author Alexander Chi
 * @since 13/10/2018
 * @Company News-it
 */

var arrayF = ["cArrow1", "cArrow2", "cArrow3", "cArrow4", "cArrow5"];
var arrayClavesF = ["claveArrow1", "claveArrow2", "claveArrow3", "claveArrow4", "claveArrow5"];
var arrayP = ["cBarra1", "cBarra2", "cBarra3"];
var arrayClavesP = ["claveBarra1", "claveBarra2", "claveBarra3"];
var array = ["img_inversion"];

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
            valor: "BENEFICIOS_FINANCIAMIENTO",
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
            valor: "BENEFICIOS_INVERSION",
        },
        success: function(data) {
            

            $.each(data, function(index, item) {
                var url = base + "/img/beneficios/" + item.valor;
                $("#" + array[index]).attr("src", url);
                $("#claveImagen1").val(item.id);
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
            valor: "BENEFICIOS_PATRIMONIO",
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

    $("#formFinanciamiento").validate({
      rules: {
        cArrow1: { required: true, },
        cArrow2: { required: true, },
        cArrow3: { required: true, },
        cArrow4: { required: true, },
        cArrow5: { required: true, },
      }, messages: {
        cArrow1: { required: '<span class="text-danger">Campo requerido</span>', },
        cArrow2: { required: '<span class="text-danger">Campo requerido</span>', },
        cArrow3: { required: '<span class="text-danger">Campo requerido</span>', },
        cArrow4: { required: '<span class="text-danger">Campo requerido</span>', },
        cArrow5: { required: '<span class="text-danger">Campo requerido</span>', },
      },
      submitHandler: function(form) {
               console.log($(this));
            }
    });

    $("#formPatrimonio").validate({
      rules: {
        cBarra1: { required: true, },
        cBarra2: { required: true, },
        cBarra3: { required: true, },
      }, messages: {
        cBarra1: { required: '<span class="text-danger">Campo requerido</span>', },
        cBarra2: { required: '<span class="text-danger">Campo requerido</span>', },
        cBarra3: { required: '<span class="text-danger">Campo requerido</span>', },
      },
      submitHandler: function(form) {
               console.log($(this));
            }
    });

    $('#btnGuardarFinanciamiento').click(function(){
      if($("#formFinanciamiento").valid()) {
        var formData = [
            { id: $("#" + arrayClavesF[0]).val(), value: $("#" + arrayF[0]).val() },
            { id: $("#" + arrayClavesF[1]).val(), value: $("#" + arrayF[1]).val() },
            { id: $("#" + arrayClavesF[2]).val(), value: $("#" + arrayF[2]).val() },
            { id: $("#" + arrayClavesF[3]).val(), value: $("#" + arrayF[3]).val() },
            { id: $("#" + arrayClavesF[4]).val(), value: $("#" + arrayF[4]).val() },
        ];
        saveRegistro(formData);
      }
    });

    $('#btnGuardarInversion').click(function(){
        if($("#fImagen1").val() !== ""){
              saveRegistroIMG($("#fImagen1")[0], $("#claveImagen1").val());
            }
    });

    $('#btnGuardarPatrimonio').click(function(){
      if($("#formPatrimonio").valid()) {
        var formData = [
            { id: $("#" + arrayClavesP[0]).val(), value: $("#" + arrayP[0]).val() },
            { id: $("#" + arrayClavesP[1]).val(), value: $("#" + arrayP[1]).val() },
            { id: $("#" + arrayClavesP[2]).val(), value: $("#" + arrayP[2]).val() },
        ];
        saveRegistro(formData);
      }
    });

    $("#fImagen1").change(function(e){
      addImg1(e);
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

function saveRegistroIMG(img, id){
    var form_data = new FormData();
    form_data.append('file', img.files[0]);
    form_data.append('id', id);
    $.ajax({
        url: 'saveImg3',
        type: 'post',
        processData: false,
        contentType: false,
        data: form_data,
        mimeType: "multipart/form-data",
        success: function(data) {
            console.info(data)
            swal ( "¡Éxito!" , "Registros actualizados correctamente",  "success" );
        },
        error: function(e, x, settings, exception) {
            failGeneric(e, x, settings, exception);
        },
    });

}

function addImg1(e){
  var file = e.target.files[0],
  imageType = /image.*/;
  if (!file.type.match(imageType))
    return;
  var reader = new FileReader();
  reader.onload = fileOnload1;
  reader.readAsDataURL(file);
}

function fileOnload1(e) {
  var result=e.target.result;
  $('#img_inversion').attr("src",result);
}