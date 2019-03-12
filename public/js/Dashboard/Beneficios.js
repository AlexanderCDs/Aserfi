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
      		valor: "BENEFICIOS_FINANCIAMIENTO",
      	},
      	success: function(data){
      		var array = ["cArrow1", "cArrow2", "cArrow3", "cArrow4", "cArrow5"];
      		$.each(data, function(index, item){
      			$("#"+array[index]).val(item.valor).trigger('change');
      			if($("#"+array[index]).length>0){
      				$("#"+array[index]).removeClass("mui--is-empty mui--is-pristine mui--is-touched");
      				$("#"+array[index]).addClass("mui--is-dirty mui--is-not-empty mui--is-touched");
      			}else{
      				$("#"+array[index]).removeClass("mui--is-dirty mui--is-not-empty mui--is-touched");
      				$("#"+array[index]).addClass("mui--is-empty mui--is-pristine mui--is-touched");
      			}
      			
      		});
      	},
      	error: function(data){
      		swal ( "Ocurrio un Error" , data.statusText,  "error" );
    	}
    });

    $.ajax({
        url: 'getInformacion',
        type: 'post',
        dataType: "json",
        data: {
          valor: "BENEFICIOS_INVERSION",
        },
        success: function(data){
          var array = ["img_inversion"];
          
          $.each(data, function(index, item){
            var url = "http://localhost:8000/img/beneficios/"+item.valor;
            $("#"+array[index]).attr("src", url);
          });
        },
        error: function(data){
          swal ( "Ocurrio un Error" , data.statusText,  "error" );
      }
    });


    $.ajax({
        url: 'getInformacion',
        type: 'post',
        dataType: "json",
        data: {
          valor: "BENEFICIOS_PATRIMONIO",
        },
        success: function(data){
          var array = ["cBarra1", "cBarra2", "cBarra3"];
          $.each(data, function(index, item){
            $("#"+array[index]).val(item.valor).trigger('change');
            if($("#"+array[index]).length>0){
              $("#"+array[index]).removeClass("mui--is-empty mui--is-pristine mui--is-touched");
              $("#"+array[index]).addClass("mui--is-dirty mui--is-not-empty mui--is-touched");
            }else{
              $("#"+array[index]).removeClass("mui--is-dirty mui--is-not-empty mui--is-touched");
              $("#"+array[index]).addClass("mui--is-empty mui--is-pristine mui--is-touched");
            }
            
          });
        },
        error: function(data){
          swal ( "Ocurrio un Error" , data.statusText,  "error" );
      }
    });

});