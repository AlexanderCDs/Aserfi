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
         <form class="mui-form">
            <div class="row">
               <div class="col-lg-6">
                  <div class="mui-textfield mui-textfield--float-label">
                     <input type="text" id="cDireccion" name="cDireccion">
                     <label>Dirección</label>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="mui-textfield mui-textfield--float-label">
                     <input type="text" id="cTel1" name="cTel2">
                     <label>Telefono 1</label>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="mui-textfield mui-textfield--float-label">
                     <input type="text" id="cTel2" name="cTel2">
                     <label>Telefono 2</label>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="mui-textfield mui-textfield--float-label">
                     <input type="text" id="cCorreo" name="cCorreo">
                     <label>Correo electrónico</label>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</main>
@endsection