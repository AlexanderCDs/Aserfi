@extends('Dashboard.Plantilla.Control')

@section('CSSGenerico')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{asset('plugins/bootstrap-table-master/bootstrap-table.min.css')}}">
@endsection

@section('Contenido')
<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
   <div class="mdl-layout__header-row">
      <span class="mdl-layout-title">Usuarios</span>
      <div class="mdl-layout-spacer"></div>
       <div class="mui-textfield mui-textfield--float-label">
			<input type="text" id="cNombreFiltro" name="cNombreFiltro">
            <label>Nombre(s)</label>
		</div>
        <button class="btn btn-sm btn-info" id="btnBuscar">
			<i class="material-icons" >search</i> Buscar
		</button>
   </div>
</header>
<main class="mdl-layout__content mdl-color--grey-100">
   <div class="mdl-grid demo-content row">
      <div class="col-lg-12 col-md-12 col-sm-12 margin-form-contacto card">
         </br>
         <div class="row">
            <div class="col-lg-12">
               	<button class="btn btn-sm btn-success" id="btnAgregar">
                    <i class="material-icons" >add</i> Agregar
                </button>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               	<table id="gridUsuarios"></table>
            </div>
         </div>
      </div>
   </div>
</main>

<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="modalUsuario" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        	<h5 class="modal-title">Agregar/Editar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          	<form class="mui-form" id="formUsuario" name="formUsuario">
          	<input type="hidden" id="iIDUsuario" name="iIDUsuario" value="0">
            <div class="row">
               <div class="col-lg-12">
                  <div class="mui-textfield mui-textfield--float-label">
                     <input type="text" id="cNombre" name="cNombre">
                     <label>* Nombre(s):</label>
                  </div>
                  <label id="cNombre-error" class="error" for="cNombre">
                  	
                  </label>
               </div>
               <div class="col-lg-12">
                  <div class="mui-textfield mui-textfield--float-label">
                     <input type="text" id="cPrimerApellido" name="cPrimerApellido">
                     <label>* Primer Apellido</label>
                  </div>
                  <label id="cPrimerApellido-error" class="error" for="cPrimerApellido">
                  	
                  </label>
               </div>
               <div class="col-lg-12">
                  <div class="mui-textfield mui-textfield--float-label">
                     <input type="text" id="cSegundoApellido" name="cSegundoApellido">
                     <label>Segundo Apellido</label>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="mui-textfield mui-textfield--float-label">
                    <select id="iIDPerfil" name="iIDPerfil" class="form-control" >
                    </select>
                  </div>
                  <label id="iIDPerfil-error" class="error" for="iIDPerfil">
                  	
                  </label>
               </div>
               <div class="col-lg-12">
                  <div class="mui-textfield mui-textfield--float-label">
                     <input type="text" id="cCorreoElectronico" name="cCorreoElectronico">
                     <label>* Correo electrónico</label>
                  </div>
                  <label id="cCorreoElectronico-error" class="error" for="cCorreoElectronico">
                  	
                  </label>
               </div>
               <div class="col-lg-12">
                  <div class="mui-textfield mui-textfield--float-label">
                     <input type="text" id="cPass" name="cPass">
                     <label>* Contraseña</label>
                  </div>
                  <label id="cPass-error" class="error" for="cPass">
                  	
                  </label>
               </div>
            </div>
         	</form>
        </div>
        <div class="modal-footer">
        	<button class="btn btn-sm btn-danger" data-dismiss="modal">
                <i class="material-icons" >close</i> Cancelar
            </button>
            <button class="btn btn-sm btn-success" id="btnGuardar">
                <i class="material-icons" >check</i> Guardar
            </button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
@endsection

@section('JSGenerico')
<!-- Latest compiled and minified JavaScript -->
<script src="{{asset('plugins/bootstrap-table-master/bootstrap-table.min.js')}}"></script>
<!-- Latest compiled and minified Locales -->
<script src="{{asset('plugins/bootstrap-table-master/locale/bootstrap-table-es-MX.min.js')}}"></script>

<script src="{{asset('js/Dashboard/Usuarios.js')}}"></script>
@endsection