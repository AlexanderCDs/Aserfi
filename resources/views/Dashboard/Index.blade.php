<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Arthur CD & Cindy CV">
    <meta name="keywords" content="au theme template">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title Page-->
    <title>Aserfi</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/Page/bootstrap4/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('css/Dashboard/main.css')}}" rel="stylesheet" media="all">

</head>

<body>
	<!-- Navegador -->
	<div class="container-fluid fixed-top bg-dark py-3">
    <div class="row">
      <div class="col-lg-2 col-sm-2 col-0 collapse show sidebar">
        <!-- spacer col -->
      </div>
      <div class="col-lg-10 px-3">
      <!-- toggler -->
        <a data-toggle="collapse" href="#" data-target=".collapse" role="button">
          <i class="fa fa-bars fa-lg"></i>
        </a>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row vh-100">
      <div class="col-lg-2 collapse show sidebar bg-dark text-white px-0">
        <ul class="nav flex-column flex-nowrap text-truncate navbar-dark bg-dark position-fixed pt-2 vh-100" id="sidebar">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <i class="fas fa-user"></i> Usuarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="far fa-images"></i> Carrusel 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-cog"></i> Quienes Somos 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-cog"></i> Servicios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-cog"></i> Beneficios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-cog"></i> Contacto
            </a>
          </li>
        </ul>
      </div>
      <div class="col-lg-10 py-3">
        <h3></h3>
      </div>
    </div>
  </div>

	<script src="{{asset('js/Page/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('css/Page/bootstrap4/popper.js')}}"></script>
	<script src="{{asset('css/Page/bootstrap4/bootstrap.min.js')}}"></script>
</body>

</html>