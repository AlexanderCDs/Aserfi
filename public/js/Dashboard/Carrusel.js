/**
 * @author Alexander Chi
 * @since 13/10/2018
 * @Company News-it
 */

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
      		var array = ["cNombreImagen1", "cTextoFila11", "cTextoFila21", "img_slider_1", 
            "cNombreImagen2", "cTextoFila12", "cTextoFila22", "img_slider_2",
            "cNombreImagen3", "cTextoFila13", "cTextoFila23", "img_slider_3",];

      		$.each(data, function(index, item){
            console.info(item);
            if( array[index] === "img_slider_1" || array[index] === "img_slider_2" || array[index] === "img_slider_3" ){
              var url = "http://localhost:8000/img/slider/"+item.valor;
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
      			
      			
      		});
      	},
      	error: function(data){
      		swal ( "Ocurrio un Error" , data.statusText,  "error" );
    	}
    });

});