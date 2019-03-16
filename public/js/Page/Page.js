/**
 * @author Alexander Chi
 * @since 13/10/2018
 * @Company News-it
 */
var arrayInicio = ["ts11", "ht11", "ht21", "s1", "ts12", "ht12", "ht22", "s2", "ts13", "ht13", "ht23", "s3"];
var arrayQuienesSomos = ["p", "t1", "p1", "f1", "t2", "p2", "f2" ];

$(document).ready(function() {

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
        success: function(data) {
            $.each(data, function(index, item) {
            	if(index !== 0 && index !== 4 && index !== 8 && index !== 3 && index !== 7 && index !== 11){
            		$("#"+arrayInicio[index]).text(item.valor);
            	}else{
            		if(index === 3){
            			var url = base + "/img/slider/"+item.valor;
              			$("#s1").attr("src", url);
            		}
            		if(index === 7){
            			var url = base + "/img/slider/"+item.valor;
              			$("#s2").attr("src", url);
            		}
            		if(index === 11){
            			var url = base + "/img/slider/"+item.valor;
              			$("#s3").attr("src", url);
            		}
            		if(index === 0){
              			$("#s1").attr("alt", item.valor);
            		}
            		if(index === 4){
              			$("#s2").attr("alt", item.valor);
            		}
            		if(index === 8){
              			$("#s3").attr("alt", item.valor);
            		}
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
            valor: "QUIENESSOMOS",
        },
        success: function(data) {
            $.each(data, function(index, item) {
            	if(index !== 3 && index !== 6){
            		$("#"+arrayQuienesSomos[index]).text(item.valor);
            		if(index === 1){
              			$("#f1").attr("alt", item.valor);
            		}
            		if(index === 4){
              			$("#f2").attr("alt", item.valor);
            		}
            	}else{
            		if(index === 3){
            			var url = base + "/img/fundadores/"+item.valor;
              			$("#f1").attr("src", url);
            		}
            		if(index === 6){
            			var url = base + "/img/fundadores/"+item.valor;
              			$("#f2").attr("src", url);
            		}
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
            valor: "FINANCIAMIENTO",
        },
        success: function(data) {
            $.each(data, function(index, item) {
            	$("#pServicios").text(item.valor);
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
            	$("#pSGrafia"+(1+index)).text(item.valor);
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
            	$("#pSInversiones").text(item.valor);
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
            	$("#pSPatrimonio").text(item.valor);
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
            valor: "BENEFICIOS_FINANCIAMIENTO",
        },
        success: function(data) {
            $.each(data, function(index, item) {
            	$("#divFlecha"+(1+index)).text(item.valor);
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
            	var url = base + "/img/beneficios/"+item.valor;
              	$("#fInversion").attr("src", url);
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
            	$("#divBarra"+(1+index)).text(item.valor);
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
            valor: "CONTACTO",
        },
        success: function(data) {
            $.each(data, function(index, item) {
            	$("#contacto"+(1+index)).text(item.valor);
            });
        },
        error: function(e, x, settings, exception) {
            failGeneric(e, x, settings, exception);
        },
    });
});