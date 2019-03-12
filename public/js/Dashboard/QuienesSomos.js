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
      		valor: "QUIENESSOMOS",
      	},
      	success: function(data){
      		var array = ["cDescricionPrincipal", 
            "cNombreFundador1", "cDescricionFundador1", "img_fundador1", 
            "cNombreFundador2", "cDescricionFundador2", "img_fundador2"];

      		$.each(data, function(index, item){
            if( array[index] === "img_fundador1" || array[index] === "img_fundador2" ){
              var url = "http://localhost:8000/img/fundadores/"+item.valor;
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