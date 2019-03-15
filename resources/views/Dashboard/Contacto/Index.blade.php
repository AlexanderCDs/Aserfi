@extends('Dashboard.Plantilla.Control')
@section('Contenido')
<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
   <div class="mdl-layout__header-row">
      <span class="mdl-layout-title">Contacto</span>
      <div class="mdl-layout-spacer"></div>
   </div>
</header>
<main class="mdl-layout__content mdl-color--grey-100 ">
   <div class="mdl-grid demo-content row">
      <div class="col-lg-12 col-md-12 col-sm-12 margin-form-contacto card">
         </br>
         <form class="mui-form" id="formContacto" name="formContacto">
            <div class="row">
               <div class="col-lg-6">
                  <div class="mui-textfield mui-textfield--float-label">
                     <input type="hidden" value="0" id="claveDireccion">
                     <input type="text" id="cDireccion" name="cDireccion">
                     <label>Dirección</label>
                  </div>
                  <label id="cDireccion-error" class="error" for="cDireccion">
                     <span class="text-danger"></span>
                  </label>
               </div>
               <div class="col-lg-6">
                  <div class="mui-textfield mui-textfield--float-label">
                     <input type="hidden" value="0" id="claveTel1">
                     <input type="text" id="cTel1" name="cTel2">
                     <label>Telefono 1</label>
                  </div>
                  <label id="cTel1-error" class="error" for="cTel1">
                     <span class="text-danger"></span>
                  </label>
               </div>
               <div class="col-lg-6">
                  <div class="mui-textfield mui-textfield--float-label">
                     <input type="hidden" value="0" id="claveTel2">
                     <input type="text" id="cTel2" name="cTel2">
                     <label>Telefono 2</label>
                  </div>
                  <label id="cTel2-error" class="error" for="cTel2">
                     <span class="text-danger"></span>
                  </label>
               </div>
               <div class="col-lg-6">
                  <div class="mui-textfield mui-textfield--float-label">
                     <input type="hidden" value="0" id="claveCorreo">
                     <input type="text" id="cCorreo" name="cCorreo">
                     <label>Correo electrónico</label>
                  </div>
                  <label id="cCorreo-error" class="error" for="cCorreo">
                     <span class="text-danger"></span>
                  </label>
               </div>
               
            </div>
         </form>
         <div class="col-lg-12 text-right" style="margin: 5px;">
                  <button class="btn btn-sm btn-success" id="btnGuardar">
                     <i class="material-icons" >check</i> Guardar
                  </button>
               </div>
      </div>
   </div>
</main>
@endsection

@section('JSGenerico')
<script src="{{asset('js/Dashboard/Contacto.js')}}"></script>
@endsection