/**
 * @author Alexander Chi
 * @since 13/10/2018
 * @Company News-it
 */
var array = ["cNombreImagen1", "cTextoFila11", "cTextoFila21", "img_slider_1", 
            "cNombreImagen2", "cTextoFila12", "cTextoFila22", "img_slider_2",
            "cNombreImagen3", "cTextoFila13", "cTextoFila23", "img_slider_3",];
var arrayClaves = ["claveNombreImagen1", "claveTextoFila11", "claveTextoFila21", "claveImagen1", 
            "claveNombreImagen2", "claveTextoFila12", "claveTextoFila22", "claveImagen2",
            "claveNombreImagen3", "claveTextoFila13", "claveTextoFila23", "claveImagen3",];
var arrayImg = ["fImagen1", "fImagen2", "fImagen3"];


$(document).ready(function(){
	$.ajaxSetup({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });

    $.ajax({
      	url: 'getInformacion',
      	type: 'post',
      	dataType: "json",
      	data: {
      		valor: "INICIO",
      	},
      	success: function(data){
      		$.each(data, function(index, item){
            if( array[index] === "img_slider_1" || array[index] === "img_slider_2" || array[index] === "img_slider_3" ){
              var url = base + "/img/slider/"+item.valor;
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


    $("#formCarrusel").validate({
      rules: {
        cNombreImagen1: { required: true, },
        cNombreImagen2: { required: true, },
        cNombreImagen3: { required: true, },
        /*fImagen1: { required: true, },
        fImagen2: { required: true, },
        fImagen3: { required: true, },*/
      }, messages: {
        cNombreImagen1: { required: '<span class="text-danger">Campo requerido</span>', },
        cNombreImagen2: { required: '<span class="text-danger">Campo requerido</span>', },
        cNombreImagen3: { required: '<span class="text-danger">Campo requerido</span>', },
        /*fImagen1: { required: '<span class="text-danger">Campo requerido</span>', },
        fImagen2: { required: '<span class="text-danger">Campo requerido</span>', },
        fImagen3: { required: '<span class="text-danger">Campo requerido</span>', },*/
      },
      submitHandler: function(form) {

      }
    });

    $('#btnGuardar').click(function(){
      if($("#formCarrusel").valid()) {
        saveRegistro();
      }
    });

    $("#"+arrayImg[0]).change(function(e){
      addImg1(e);
    });

    $("#"+arrayImg[1]).change(function(e){
      addImg2(e);
    });

    $("#"+arrayImg[2]).change(function(e){
      addImg3(e);
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
    formData.append(6, JSON.stringify({ id: $("#" + arrayClaves[6]).val(), value: $("#" + array[6]).val() }) );
    formData.append(7, JSON.stringify({ id: $("#" + arrayClaves[7]).val(), value: $("#" + array[7]).attr('src') }));
    formData.append(8, JSON.stringify({ id: $("#" + arrayClaves[8]).val(), value: $("#" + array[8]).val() }) );
    formData.append(9, JSON.stringify({ id: $("#" + arrayClaves[9]).val(), value: $("#" + array[9]).val() }) );
    formData.append(10, JSON.stringify({ id: $("#" + arrayClaves[10]).val(), value: $("#" + array[10]).val()}) );
    formData.append(11, JSON.stringify({ id: $("#" + arrayClaves[11]).val(), value: $("#" + array[11]).attr('src') }));
//$("#" + arrayImg[2])[0].files
    $.ajax({
        url: 'saveInformacionWithImg',
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
            if($("#" + arrayImg[2]).val() !== ""){
              saveRegistroIMG($("#" + arrayImg[2])[0], $("#claveImagen3").val());
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
        url: 'saveImg',
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
  $('#img_slider_1').attr("src",result);
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
  $('#img_slider_2').attr("src",result);
}

function addImg3(e){
  var file = e.target.files[0],
  imageType = /image.*/;
  if (!file.type.match(imageType))
    return;
  var reader = new FileReader();
  reader.onload = fileOnload3;
  reader.readAsDataURL(file);
}

function fileOnload3(e) {
  var result=e.target.result;
  $('#img_slider_3').attr("src",result);
}