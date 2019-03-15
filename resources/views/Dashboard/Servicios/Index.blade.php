@extends('Dashboard.Plantilla.Control')
@section('Contenido')
<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
   <div class="mdl-layout__header-row">
      <span class="mdl-layout-title">Servicios</span>
      <div class="mdl-layout-spacer"></div>
   </div>
</header>
<main class="mdl-layout__content mdl-color--grey-100">
   <div class="mdl-grid demo-content row">
      <div class="col-lg-12 col-md-12 col-sm-12 margin-form-contacto card">
      	 </br>
         <form class="mui-form" id="formServicios" name="formServicios">
         <div class="row">
            <div class="col-lg-12">
               <div class="mui-textfield mui-textfield--float-label">
                  <input type="hidden" id="claveFinanciamiento">
                  <textarea id="cFinanciamiento" name="cFinanciamiento" rows="3"></textarea>
                  <label>Financiamiento</label>
               </div>
               <label id="cFinanciamiento-error" class="error" for="cFinanciamiento">
                  <span class="text-danger"></span>
               </label>
            </div>
            <div class="col-lg-12">
               <div class="mui-textfield mui-textfield--float-label">
                  <input type="hidden" id="claveGrafica1">
                  <input type="text" id="cGrafica1" name="cGrafica1">
                  <label>Texto Grafíca 1</label>
               </div>
               <label id="cGrafica1-error" class="error" for="cGrafica1">
                  <span class="text-danger"></span>
               </label>
            </div>
            <div class="col-lg-12">
               <div class="mui-textfield mui-textfield--float-label">
                  <input type="hidden" id="claveGrafica2">
                  <input type="text" id="cGrafica2" name="cGrafica2">
                  <label>Texto Grafíca 2</label>
               </div>
               <label id="cGrafica2-error" class="error" for="cGrafica2">
                  <span class="text-danger"></span>
               </label>
            </div>
            <div class="col-lg-12">
               <div class="mui-textfield mui-textfield--float-label">
                  <input type="hidden" id="claveGrafica3">
                  <input type="text" id="cGrafica3" name="cGrafica3">
                  <label>Texto Grafíca 3</label>
               </div>
               <label id="cGrafica3-error" class="error" for="cGrafica3">
                  <span class="text-danger"></span>
               </label>
            </div>
            <div class="col-lg-12">
               <div class="mui-textfield mui-textfield--float-label">
                  <input type="hidden" id="claveInversion">
                  <textarea id="cInversion" name="cInversion" rows="3"></textarea>
                  <label>Inversiones</label>
               </div>
               <label id="cInversion-error" class="error" for="cInversion">
                  <span class="text-danger"></span>
               </label>
            </div>
            <div class="col-lg-12">
               <div class="mui-textfield mui-textfield--float-label">
                  <input type="hidden" id="clavePatrimonio">
                  <textarea id="cPatrimonio" name="cPatrimonio" rows="3"></textarea>
                  <label>Patrimonio</label>
               </div>
               <label id="cPatrimonio-error" class="error" for="cPatrimonio">
                  <span class="text-danger"></span>
               </label>
            </div>
            <div class="col-lg-12 text-right" style="margin: 5px;">
                  <button class="btn btn-sm btn-success" id="btnGuardar">
                     <i class="material-icons" >check</i> Guardar
                  </button>
               </div>
         </div>
         </form>
      </div>
   </div>
</main>
@endsection


@section('JSGenerico')
<script src="{{asset('js/Dashboard/Servicios.js')}}"></script>
@endsection