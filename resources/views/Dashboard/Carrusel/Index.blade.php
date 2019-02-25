@extends('Dashboard.Plantilla.Control')
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
         <br>
         <div class="row">
         	<div class="col-lg-12">
         		<a href="" class="btn btn-success">
         			<i class="material-icons">add</i> Agregar
         		</a>
         	</div>
         </div>
         <div class="row">
         	<div class="col-lg-12">
         		<table class="" id="gridCarrusel"></table>
         	</div>
         </div>
      </div>
   </div>
</main>
@endsection