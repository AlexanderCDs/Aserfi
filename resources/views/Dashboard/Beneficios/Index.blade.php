@extends('Dashboard.Plantilla.Control')
@section('CSSGenerico')
<link rel="stylesheet" href="{{asset('css/Dashboard/styles_file_input.css')}}">
@endsection
@section('Contenido')
<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
   <div class="mdl-layout__header-row">
      <span class="mdl-layout-title">Beneficios</span>
      <div class="mdl-layout-spacer"></div>
   </div>
</header>
<main class="mdl-layout__content mdl-color--grey-100">
   <div class="mdl-grid demo-content row">
      <div class="col-lg-12 margin-form-contacto card">
         </br>
         <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
               <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Financiamiento</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Inversiones</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Patrimonio</a>
            </li>
         </ul>
         <div class="tab-content" id="myTabContent">
            </br>
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
               <form class="mui-form" id="formFinanciamiento" name="formFinanciamiento">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="hidden" id="claveArrow1">
                        <input type="text" id="cArrow1" name="cArrow1">
                        <label>Flecha 1</label>
                     </div>
                     <label id="cArrow1-error" class="error" for="cArrow1">
                        
                     </label>
                  </div>
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="hidden" id="claveArrow2">
                        <input type="text" id="cArrow2" name="cArrow2">
                        <label>Flecha 2</label>
                     </div>
                     <label id="cArrow2-error" class="error" for="cArrow2">
                        
                     </label>
                  </div>
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="hidden" id="claveArrow3">
                        <input type="text" id="cArrow3" name="cArrow3">
                        <label>Flecha 3</label>
                     </div>
                     <label id="cArrow3-error" class="error" for="cArrow3">
                        
                     </label>
                  </div>
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="hidden" id="claveArrow4">
                        <input type="text" id="cArrow4" name="cArrow4">
                        <label>Flecha 4</label>
                     </div>
                     <label id="cArrow4-error" class="error" for="cArrow4">
                       
                     </label>
                  </div>
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="hidden" id="claveArrow5">
                        <input type="text" id="cArrow5" name="cArrow5">
                        <label>Flecha 5</label>
                     </div>
                     <label id="cArrow5-error" class="error" for="cArrow5">
                        
                     </label>
                  </div>
               </div>
               </form>
               <div class="col-lg-12 text-right" style="margin: 5px;">
                  <button class="btn btn-sm btn-success" id="btnGuardarFinanciamiento">
                     <i class="material-icons" >check</i> Guardar Financiamiento
                  </button>
               </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
               <form class="mui-form" id="formInversion" name="formInversion">
               <div class="row">
                  <div class="col-lg-6 col-md-10 col-sm-8">
                     <div class="file-field">
                        <div class="z-depth-1-half mb-4">
                           <img id="img_inversion" src="{{asset('img/placeholder.jpg')}}" class="img-fluid" alt="example placeholder">
                        </div>
                        <div class="d-flex justify-content-center">
                           <div class="btn btn-mdb-color btn-rounded float-left">
                              <span>Seleccione una imagen</span>
                              <input type="hidden" id="claveImagen1">
                              <input type="file" id="fImagen1" >
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               </form>
               <div class="col-lg-12 text-right" style="margin: 5px;">
                  <button class="btn btn-sm btn-success" id="btnGuardarInversion">
                     <i class="material-icons" >check</i> Guardar Inversiones
                  </button>
               </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
               <form class="mui-form" id="formPatrimonio" name="formPatrimonio">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="hidden" id="claveBarra1">
                        <input type="text" id="cBarra1" name="cBarra1">
                        <label>Barra 1</label>
                     </div>
                     <label id="cBarra1-error" class="error" for="cBarra1">
                        
                     </label>
                  </div>
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="hidden" id="claveBarra2">
                        <input type="text" id="cBarra2" name="cBarra2">
                        <label>Barra 2</label>
                     </div>
                     <label id="cBarra2-error" class="error" for="cBarra2">
                        
                     </label>
                  </div>
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="hidden" id="claveBarra3">
                        <input type="text" id="cBarra3" name="cBarra3">
                        <label>Barra 3</label>
                     </div>
                     <label id="cBarra3-error" class="error" for="cBarra3">
                        
                     </label>
                  </div>
               </div>
               </form>
               <div class="col-lg-12 text-right" style="margin: 5px;">
                  <button class="btn btn-sm btn-success" id="btnGuardarPatrimonio">
                     <i class="material-icons" >check</i> Guardar Patrimonio
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection

@section('JSGenerico')
<script src="{{asset('js/Dashboard/Beneficios.js')}}"></script>
@endsection