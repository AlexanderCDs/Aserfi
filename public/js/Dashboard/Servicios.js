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
      		valor: "FINANCIAMIENTO",
      	},
      	success: function(data){
      		var array = ["cFinanciamiento"];
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
          valor: "SERVICIOS_FINANCIAMIENTO",
        },
        success: function(data){
          var array = ["cGrafica1", "cGrafica2", "cGrafica3"];
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
          valor: "SERVICIOS_INVERSION",
        },
        success: function(data){
          var array = ["cInversion"];
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
          valor: "SERVICIOS_PATRIMONIO",
        },
        success: function(data){
          var array = ["cPatrimonio"];
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