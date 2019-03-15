/**
 * @author Alexander Chi
 * @since 13/10/2018
 * @Company News-it
 */
var array = ["cDescricionPrincipal", 
            "cNombreFundador1", "cDescricionFundador1", "img_fundador1", 
            "cNombreFundador2", "cDescricionFundador2", "img_fundador2"];
var arrayClaves = ["claveDescricionPrincipal", 
            "claveNombreFundador1", "claveDescricionFundador1", "claveImagen1", 
            "claveNombreFundador2", "claveDescricionFundador2", "claveImagen2"];
var arrayImg = ["fImagen1", "fImagen2"];

$(document).ready(function(){
	$.ajaxSetup({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });

    $.ajax({
      	url: 'getInformacion',
      	type: 'post',
      	dataType: "json",
      	data: {
      		valor: "QUIENESSOMOS",
      	},
      	success: function(data){
      		$.each(data, function(index, item){
            if( array[index] === "img_fundador1" || array[index] === "img_fundador2" ){
              var url = base + "/img/fundadores/"+item.valor;
              $("#"+array[index]).attr("src", url);
            }else{
              $("#"+array[index]).val(item.valor).trigger('change');

              if($("#"+array[index]).length>0){
                $("#"+array[index]).removeClass("mui--is-empty mui--is-pristine mui--is-touched");
                $("#"+array[index]).addClass("mui--is-dirty mui--is-not-empty mui--is-touched");
              }else{
                $("#"+array[index]).removeClass("mui--is-dirty mui--is-not-empty mui--is-touched");
                $("#"+array[index]).addClass("mui--is-empty mui--is-pristine mui--is-touched");
              }
            }
      			$("#"+arrayClaves[index]).val(item.id);
      			
      		});
      	},
      	error: function(e, x, settings, exception){
          failGeneric(e, x, settings, exception);
        },
    });

    $("#formQS").validate({
      rules: {
        cDescricionPrincipal: { required: true, },
        cNombreFundador1: { required: true, },
        cDescricionFundador1: { required: true, },
        cNombreFundador2: { required: true, },
        cDescricionFundador2: { required: true, },
      }, messages: {
        cDescricionPrincipal: { required: '<span class="text-danger">Campo requerido</span>', },
        cNombreFundador1: { required: '<span class="text-danger">Campo requerido</span>', },
        cDescricionFundador1: { required: '<span class="text-danger">Campo requerido</span>', },
        cNombreFundador2: { required: '<span class="text-danger">Campo requerido</span>', },
        cDescricionFundador2: { required: '<span class="text-danger">Campo requerido</span>', },
      },
      submitHandler: function(form) {

      }
    });

    $('#btnGuardar').click(function(){
      if($("#formQS").valid()) {
        saveRegistro();
      }
    });

    $("#"+arrayImg[0]).change(function(e){
      addImg1(e);
    });

    $("#"+arrayImg[1]).change(function(e){
      addImg2(e);
    });

});

function saveRegistro(){
    var formData = new FormData();

    formData.append(0, JSON.stringify({ id: $("#" + arrayClaves[0]).val(), value: $("#" + array[0]).val() }) );
    formData.append(1, JSON.stringify({ id: $("#" + arrayClaves[1]).val(), value: $("#" + array[1]).val() }) );
    formData.append(2, JSON.stringify({ id: $("#" + arrayClaves[2]).val(), value: $("#" + array[2]).val() }) );
    formData.append(3, JSON.stringify({ id: $("#" + arrayClaves[3]).val(), value: $("#" + array[3]).attr('src') }) );
    formData.append(4, JSON.stringify({ id: $("#" + arrayClaves[4]).val(), value: $("#" + array[4]).val() }) );
    formData.append(5, JSON.stringify({ id: $("#" + arrayClaves[5]).val(), value: $("#" + array[5]).val() }) );
    formData.append(6, JSON.stringify({ id: $("#" + arrayClaves[6]).val(), value: $("#" + array[6]).attr('src') }));

    $.ajax({
        url: 'saveInformacionWithImg2',
        type: 'post',
        processData: false,
        contentType: false,
        data: formData,
        success: function(data) {
          if(data.success === true){
            if($("#" + arrayImg[0]).val() !== ""){
              saveRegistroIMG($("#" + arrayImg[0])[0], $("#claveImagen1").val());
            }
            if($("#" + arrayImg[1]).val() !== ""){
              saveRegistroIMG($("#" + arrayImg[1])[0], $("#claveImagen2").val());
            }

            swal ( "¡Éxito!" , "Registros actualizados correctamente",  "success" );
          }
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
        url: 'saveImg2',
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
  $('#img_fundador1').attr("src",result);
}

function addImg2(e){
  var file = e.target.files[0],
  imageType = /image.*/;
  if (!file.type.match(imageType))
    return;
  var reader = new FileReader();
  reader.onload = fileOnload2;
  reader.readAsDataURL(file);
}

function fileOnload2(e) {
  var result=e.target.result;
  $('#img_fundador2').attr("src",result);
}