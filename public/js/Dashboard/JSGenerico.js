/**
 * @author Alexander Chi
 * @since 12/03/2019
 * @Company News-it
 */
var base = window.location.origin;
$(document).ready(function() {
	$('#cerraSession').click(function(){
		location.href = 'cerrarSesion';
	});
});



function selectLoad(select, ruta, id, active){
	$.ajaxSetup({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });
	$.ajax({
      	url: ruta,
      	type: 'post',
      	dataType: "json",
      	data: {
      		"id": id,
      	},
      	success: function(data){
      		$('#'+select).append("<option value='0' selected disabled='disabled' >Seleccione un perfil</option>");
      		data.forEach(function(element) {
  				  //console.log(element);
  				  $('#'+select).append("<option value='"+element.value+"'' >"+element.text+"</option>");
          });
        	$('#'+select).val(id).trigger("change");
      	},
      	error: function(data){
      		console.info(data);
    	}
    });
}

function failGeneric(e, x, settings, exception){
	var message;
	if(exception=='parsererror'){
		message="Análisis JSON Petición falló.";
	}else if(exception=='timeout'){
		message="Tiempo de respuesta exedido.";
	}else if(exception=='abort'){
		message="Solicitud fue abortada por el servidor.";
	}else if(e.status=='400'){
		message="El servidor entendía la petición, pero el contenido de la solicitud no era válido.";
	}else if(e.status=='401'){
		message="Acceso no autorizado.";
	}else if(e.status=='403'){
		message="El recurso prohibido no puede tener acceso.";
	}else if(e.status=='500'){
		message="Internal server error.";
	}else if(e.status=='503'){
		message="Servicio invalido.";
	}else{
		message="Error desconocido.";
	}
	swal ( "Ocurrio un Error" , message,  "error" );
}