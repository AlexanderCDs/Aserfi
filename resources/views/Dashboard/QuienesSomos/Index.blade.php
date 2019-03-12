@extends('Dashboard.Plantilla.Control')
@section('CSSGenerico')
<link rel="stylesheet" href="{{asset('css/Dashboard/styles_file_input.css')}}">
@endsection
@section('Contenido')
<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
   <div class="mdl-layout__header-row">
      <span class="mdl-layout-title">Quiénes Somos</span>
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
                  <textarea id="cDescricionPrincipal" name="cDescricionPrincipal" rows="3"></textarea>
                  <label>Descrición Principal</label>
               </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-8">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="text" id="cNombreFundador1" name="cNombreFundador1">
                        <label>Nombre Fundador 1</label>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <textarea id="cDescricionFundador1" name="cDescricionFundador1" rows="4"></textarea>
                        <label>Descrición Fundador 1</label>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4">
               <div class="file-field">
                  <div class="z-depth-1-half mb-4">
                     <img id="img_fundador1" src="{{asset('img/placeholder.jpg')}}" class="img-fluid" alt="example placeholder">
                  </div>
                  <div class="d-flex justify-content-center">
                     <div class="btn btn-mdb-color btn-rounded float-left">
                        <span>Seleccione una imagen</span>
                        <input type="file">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-8">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <input type="text" id="cNombreFundador2" name="cNombreFundador2">
                        <label>Nombre Fundador 2</label>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="mui-textfield mui-textfield--float-label">
                        <textarea id="cDescricionFundador2" name="cDescricionFundador2" rows="4"></textarea>
                        <label>Descrición Fundador 2</label>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4">
               <div class="file-field">
                  <div class="z-depth-1-half mb-4">
                     <img id="img_fundador2" src="{{asset('img/placeholder.jpg')}}" class="img-fluid" alt="example placeholder">
                  </div>
                  <div class="d-flex justify-content-center">
                     <div class="btn btn-mdb-color btn-rounded float-left">
                        <span>Seleccione una imagen</span>
                        <input type="file">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@endsection

@section('JSGenerico')
<script src="{{asset('js/Dashboard/QuienesSomos.js')}}"></script>
@endsection