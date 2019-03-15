/**
 * @author Alexander Chi
 * @since 13/10/2018
 * @Company News-it
 */

$(document).ready(function(){
	
	$.ajaxSetup({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });

	/** Bootstrap table **/
	$('#gridUsuarios').bootstrapTable({
		method: 'post',
		url: "Usuarios/gridUsuarios",
		contentType: 'application/x-www-form-urlencoded',
		queryParams: function (p) {
			return {
				cUsuario: $("#cNombreFiltro").val()
			};
		},
		classes: 'table-striped',
		pagination: true,
		pageSize: 10,
		columns: [
			{
				field: 'id',
	            title: '<i class=""></i>',
	            width: '0%',
	            visible: false
	        },
	        {
				field: 'email',
	            title: 'Correo',
	            width: '30%',
	        },
	        {
	        	field: 'nombre',
	        	title: 'Usuario',
	        	width: '30%'
	        },
	        {
	        	field: 'perfil',
	        	title: 'Perfil',
	        	width: '30%'
	        },
	        {
	        	field: 'activo',
	        	title: '<i class="fa fa-cogs"></i> Acciones',
	        	formatter: 'accionesFormatter',
	        	width: '10%'
	        }
		],
		formatShowingRows: function (pageFrom, pageTo, totalRows) {
			return pageFrom + ' - ' + pageTo + ' de ' + totalRows + ' registros';
		},
		formatRecordsPerPage: function (pageNumber) {
	    	return '';
	    },
		onPostBody: function(data){
			$('[data-toggle="tooltip"]').tooltip();
		},
	});

	$("#formUsuario").validate({
    	rules: {
    		iIDUsuario: { required: true, },
    		cNombre: { required: true, },
    		cPass: { required: true, },
    		cCorreoElectronico: { required: true, },
    		iIDPerfil: { required: true, },
    		cPrimerApellido: { required: true, },
    	}, messages: {
    		iIDUsuario: { required: '<span class="text-danger">Campo requerido</span>', },
    		cNombre: { required: '<span class="text-danger">Campo requerido</span>', },
    		cPass: { required: '<span class="text-danger">Campo requerido</span>', },
    		cCorreoElectronico: { required: '<span class="text-danger">Campo requerido</span>', },
    		iIDPerfil: { required: '<span class="text-danger">Campo requerido</span>', },
    		cPrimerApellido: { required: '<span class="text-danger">Campo requerido</span>', }
    	},
    });

    $('#btnGuardar').click(function(){
        $("#cNombre").val($("#cNombre").val().trim());
        $("#cPass").val($("#cPass").val());
        $("#cCorreoElectronico").val($("#cCorreoElectronico").val().trim());
		if($("#formUsuario").valid()) {
			saveRegistro();
		}
	});

	$('#btnAgregar').click(function(){
		cleanForm();
		$('#modalUsuario').modal('show');
	});

	$("#btnBuscar").click(function(e) {
		$('#gridUsuarios').bootstrapTable('refresh');
	});

	selectLoad("iIDPerfil", "getSelectPerfiles", 0, 1);

});

/** Formatter **/
function accionesFormatter(value, row, index) {
	var checked;
	var tooltipText = "";
	checked = value == 1 ? "checked" : "";
	tooltipText = value == 1 ? "Desactivar" : "Activar";
	return '<div class="td-actions">' +
				'<button type="button" data-toggle="tooltip" title="Editar" style="border-radius:30px;" class="btn btn-xs btn-success btn-round" data-original-title onclick="editRegistro(' + row.id + ')">'+
					'<i class="material-icons" >edit</i>'+
				'</button>' + '&nbsp;' + '&nbsp;' +
				'<button type="button" data-toggle="tooltip" title="Eliminar" style="border-radius:30px;" class="btn btn-xs btn-danger btn-round" data-original-title onclick="toggleRegistro(' + row.id + ')">'+
					'<i class="material-icons" >delete</i>'+
				'</button>' + '&nbsp;' + '&nbsp;' +
	
			'</div>';
}

/** Ajax **/
function saveRegistro(){
	$.ajax({
      	url: 'Usuarios/saveUsuario',
      	type: 'post',
      	dataType: "json",
      	data: {
      		iIDUsuario: $("#iIDUsuario").val(),
    		cNombre: $("#cNombre").val(),
    		cPrimerApellido: $("#cPrimerApellido").val(),
    		cSegundoApellido: $("#cSegundoApellido").val(),
    		iIDPerfil: $("#iIDPerfil").val(),
    		cCorreoElectronico: $("#cCorreoElectronico").val(),
    		cPass: $("#cPass").val(),
    	},
      	success: function(data){
      		$('#gridUsuarios').bootstrapTable('refresh');
      		$('#modalUsuario').modal('hide');
      		swal ( "¡Exito!" ,  "Registro Guardado Exitosamente" ,  "success" )
      	},error: function(e, x, settings, exception){
      		failGeneric(e, x, settings, exception);
    	},
    });
}

function editRegistro(id){
	$('#modalUsuario').modal('show');
	
	$.ajax({
      	url: 'Usuarios/getUsuario',
      	type: 'post',
      	dataType: "json",
      	data: {
      		"id": id,
      	},
      	success: function(data){ 
        	$("#iIDUsuario").val(data.id);
        	$("#cNombre").val(data.name);
        	$("#cPrimerApellido").val(data.primerApellido);
        	$("#cSegundoApellido").val(data.segundoApellido);
        	$("#cPass").val(data.password)
        	$("#cCorreoElectronico").val(data.email);
        	$("#iIDPerfil").val(data.perfil_id).trigger("change");
        	$("#formUsuario").valid();
        	validarInpust();
      	},
      	error: function(e, x, settings, exception){
      		failGeneric(e, x, settings, exception);
    	},
    });
}

function toggleRegistro(id){
	$.ajax({
      	url: 'Usuarios/toggleRegistro',
      	type: 'post',
      	dataType: "json",
      	data: {
      		id: id,
    	},
      	success: function(data){
      		$('#gridUsuarios').bootstrapTable('refresh');
      		swal ( "¡Éxito!" ,  "Se Desactivo Exitosamente" ,  "success" )
      	},error: function(e, x, settings, exception){
      		failGeneric(e, x, settings, exception);
    	},
    });
}

function cleanForm(){
	$("#iIDUsuario").val(0);

    $("#cNombre").val('');
    $("#cPrimerApellido").val('');
    $("#cSegundoApellido").val('');
    $("#cPass").val('');
    $("#cCorreoElectronico").val('');
    $("#iIDPerfil").val(0).trigger("change");

    $("#cNombre").hide();
    $("#cPrimerApellido").hide();
    $("#cSegundoApellido").hide();
    $("#cPass").hide();
    $("#cCorreoElectronico").hide();
    $("#iIDPerfil").hide();

    $("#formUsuario").valid();

    $("#cNombre").show();
    $("#cPrimerApellido").show();
    $("#cSegundoApellido").show();
    $("#cPass").show();
    $("#cCorreoElectronico").show();
    $("#iIDPerfil").show();

    validarInpustInvers();
}


function validarInpust(){
    $("#cNombre").removeClass("mui--is-empty mui--is-pristine mui--is-touched");
    $("#cNombre").addClass("mui--is-dirty mui--is-not-empty mui--is-touched");
    $("#cPrimerApellido").removeClass("mui--is-empty mui--is-pristine mui--is-touched");
    $("#cPrimerApellido").addClass("mui--is-dirty mui--is-not-empty mui--is-touched");
    $("#cSegundoApellido").removeClass("mui--is-empty mui--is-pristine mui--is-touched");
    $("#cSegundoApellido").addClass("mui--is-dirty mui--is-not-empty mui--is-touched");
    $("#cCorreoElectronico").removeClass("mui--is-empty mui--is-pristine mui--is-touched");
    $("#cCorreoElectronico").addClass("mui--is-dirty mui--is-not-empty mui--is-touched");
}

function validarInpustInvers(){
    $("#cNombre").addClass("mui--is-empty mui--is-pristine mui--is-touched");
    $("#cNombre").removeClass("mui--is-dirty mui--is-not-empty mui--is-touched");
    $("#cPrimerApellido").addClass("mui--is-empty mui--is-pristine mui--is-touched");
    $("#cPrimerApellido").removeClass("mui--is-dirty mui--is-not-empty mui--is-touched");
    $("#cSegundoApellido").addClass("mui--is-empty mui--is-pristine mui--is-touched");
    $("#cSegundoApellido").removeClass("mui--is-dirty mui--is-not-empty mui--is-touched");
    $("#cCorreoElectronico").addClass("mui--is-empty mui--is-pristine mui--is-touched");
    $("#cCorreoElectronico").removeClass("mui--is-dirty mui--is-not-empty mui--is-touched");
}