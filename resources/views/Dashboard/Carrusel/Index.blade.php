@extends('Dashboard.Plantilla.Control')
@section('CSSGenerico')
<link rel="stylesheet" href="{{asset('css/Dashboard/styles_file_input.css')}}">
@endsection
@section('Contenido')
<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
   <div class="mdl-layout__header-row">
      <span class="mdl-layout-title">Carrusel</span>
      <div class="mdl-layout-spacer"></div>
   </div>
</header>
<main class="mdl-layout__content mdl-color--grey-100">
   <div class="mdl-grid demo-content row"> 
      <div class="col-lg-12 col-md-12 col-sm-12 margin-form-contacto card">
         </br>
         <form class="mui-form" id="formCarrusel" name="formCarrusel">
         <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="hidden" value="0" id="claveNombreImagen1">
                        <input type="text" id="cNombreImagen1" name="cNombreImagen1">
                        <label>Nombre imagen 1</label>
                     </div>
                     <label id="cNombreImagen1-error" class="error" for="cNombreImagen1">
                     </label>
                  </div>
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="hidden" value="0" id="claveTextoFila11">
                        <input type="text" id="cTextoFila11" name="cTextoFila11">
                        <label>Texto fila 1</label>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="hidden" value="0" id="claveTextoFila21">
                        <input type="text" id="cTextoFila21" name="cTextoFila21">
                        <label>Texto fila 2</label>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4">
               <div class="file-field">
                  <div class="z-depth-1-half mb-4">
                     <img id="img_slider_1" src="{{asset('img/placeholder.jpg')}}" class="img-fluid" alt="example placeholder">
                  </div>
                  <div class="d-flex justify-content-center">
                     <div class="btn btn-mdb-color btn-rounded float-left">
                        <span>Seleccione una imagen</span>
                        <input type="hidden" value="0" id="claveImagen1">
                        <input type="file" id="fImagen1" name="fImagen1">
                     </div>
                  </div>
                  <label id="fImagen1-error" class="error" for="fImagen1">
                  </label>
               </div>
            </div>


            <div class="col-lg-9 col-md-8 col-sm-8">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="hidden" value="0" id="claveNombreImagen2">
                        <input type="text" id="cNombreImagen2" name="cNombreImagen2">
                        <label>Nombre imagen 2</label>
                     </div>
                     <label id="cNombreImagen2-error" class="error" for="cNombreImagen2">
                     </label>
                  </div>
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="hidden" value="0" id="claveTextoFila12">
                        <input type="text" id="cTextoFila12" name="cTextoFila12">
                        <label>Texto fila 1</label>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="hidden" value="0" id="claveTextoFila22">
                        <input type="text" id="cTextoFila22" name="cTextoFila22">
                        <label>Texto fila 2</label>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4">
               <div class="file-field">
                  <div class="z-depth-1-half mb-4">
                     <img id="img_slider_2" src="{{asset('img/placeholder.jpg')}}" class="img-fluid" alt="example placeholder">
                  </div>
                  <div class="d-flex justify-content-center">
                     <div class="btn btn-mdb-color btn-rounded float-left">
                        <span>Seleccione una imagen</span>
                        <input type="hidden" value="0" id="claveImagen2">
                        <input type="file" id="fImagen2" name="fImagen2">
                     </div>
                  </div>
                  <label id="fImagen2-error" class="error" for="fImagen2">
                  </label>
               </div>
            </div>


            <div class="col-lg-9 col-md-8 col-sm-8">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="hidden" value="0" id="claveNombreImagen3">
                        <input type="text" id="cNombreImagen3" name="cNombreImagen3">
                        <label>Nombre imagen 3</label>
                     </div>
                     <label id="cNombreImagen3-error" class="error" for="cNombreImagen3">
                     </label>
                  </div>
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="hidden" value="0" id="claveTextoFila13">
                        <input type="text" id="cTextoFila13" name="cTextoFila13">
                        <label>Texto fila 1</label>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="hidden" value="0" id="claveTextoFila23">
                        <input type="text" id="cTextoFila23" name="cTextoFila23">
                        <label>Texto fila 2</label>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4">
               <div class="file-field">
                  <div class="z-depth-1-half mb-4">
                     <img id="img_slider_3" src="{{asset('img/placeholder.jpg')}}" class="img-fluid" alt="example placeholder">
                  </div>
                  <div class="d-flex justify-content-center">
                     <div class="btn btn-mdb-color btn-rounded float-left">
                        <span>Seleccione una imagen</span>
                        <input type="hidden" value="0" id="claveImagen3">
                        <input type="file" id="fImagen3" name="fImagen3">
                     </div>
                  </div>
                  <label id="fImagen3-error" class="error" for="fImagen3">
                  </label>
               </div>
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
<script src="{{asset('js/Dashboard/Carrusel.js')}}"></script>
@endsection