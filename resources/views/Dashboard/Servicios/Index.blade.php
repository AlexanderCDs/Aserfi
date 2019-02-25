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
         <div class="row">
            <div class="col-lg-12">
               <div class="mui-textfield mui-textfield--float-label">
                  <textarea id="cFinanciamiento" name="cFinanciamiento" rows="3"></textarea>
                  <label>Financiamiento</label>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="mui-textfield mui-textfield--float-label">
                  <input type="text" id="cGrafica1" name="cGrafica1">
                  <label>Texto Grafíca 1</label>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="mui-textfield mui-textfield--float-label">
                  <input type="text" id="cGrafica2" name="cGrafica2">
                  <label>Texto Grafíca 2</label>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="mui-textfield mui-textfield--float-label">
                  <input type="text" id="cGrafica3" name="cGrafica3">
                  <label>Texto Grafíca 3</label>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="mui-textfield mui-textfield--float-label">
                  <textarea id="cInversion" name="cInversion" rows="3"></textarea>
                  <label>Inversiones</label>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="mui-textfield mui-textfield--float-label">
                  <textarea id="cPatrimonio" name="cPatrimonio" rows="3"></textarea>
                  <label>Patrimonio</label>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection