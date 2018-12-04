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
    <link href="{{asset('css/Page/style_main.css')}}" rel="stylesheet" media="all">

</head>

<body>
	<!-- Navegador -->

	<nav class="navbar fixed-top navbar-expand-lg navbar-light background-nav">
		<div class="container">
  			<a class="navbar-brand color-nav-text" href="#">
  				<!--<img src="" width="30" height="30" class="d-inline-block align-top" alt="">-->
  				Aserfi
  			</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navegador" aria-controls="navegador" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
 	 		</button>

  			<div class="collapse navbar-collapse pull-right pull-right-nav" id="navegador">
    			<ul class="navbar-nav mr-auto">
 	     			<li class="nav-item active">
	        			<a class="nav-link color-nav-text" href="#inicio">Inicio</a>
    	  			</li>
     			 	<li class="nav-item">
        				<a class="nav-link color-nav-text" href="#quienessomos">Quíenes somos</a>
      				</li>
	      			<li class="nav-item">
    	    			<a class="nav-link color-nav-text" href="#servicios">Servicios</a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link color-nav-text" href="#beneficios">Beneficios</a>
	      			</li>
    	  			<li class="nav-item">
        				<a class="nav-link color-nav-text" href="#contacto">Contacto</a>
      				</li>
      				<li class="nav-item nav-item-margin">
        				<a class="nav-link color-nav-text" href="#ubicanos"></a>
      				</li>
      				<li class="nav-item">
        				<a class="nav-link color-nav-text" href="#">
        					<i class="fas fa-map-marker-alt"></i>
        				</a>
      				</li>
      				<li class="nav-item">
	        			<a class="nav-link color-nav-text" href="https://www.facebook.com/">
    	    				<i class="fab fa-facebook-f"></i>
        				</a>
      				</li>
    			</ul>
    			<!--<form class="form-inline my-2 my-lg-0">
    	  			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    		</form>-->
	  		</div>
	  	</div>
	</nav>

	<!-- Carrusel -->
	<div id="carrusel">
		<div class="col-lg-12 col-without-padding">
			<div class="">
				<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
  					<ol class="carousel-indicators">
    					<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
   						<li data-target="#carouselIndicators" data-slide-to="1"></li>
    					<li data-target="#carouselIndicators" data-slide-to="2"></li>
	  				</ol>
  					<div class="carousel-inner">
    					<div class="carousel-item active">
      						<img class="d-block w-100" src="{{asset('img/carrusel-01.JPG')}}" alt="First slide">
      						<div class="carousel-caption d-none d-md-block center-text-carousel">
    							<h1>LA SITUACIÓN DEL MERCADO</h5>
    							<h1><b>A TU FAVOR</b></h5>
    							<p></p>
  							</div>
    					</div>
    					<div class="carousel-item">
      						<img class="d-block w-100" src="{{asset('img/carrusel-02.JPG')}}" alt="Second slide">
      						<div class="carousel-caption d-none d-md-block center-text-carousel">
    							<h1>LA SITUACIÓN DEL MERCADO</h5>
    							<h1><b>A TU FAVOR</b></h5>
    							<p></p>
  							</div>
	    				</div>
    					<div class="carousel-item">
      						<img class="d-block w-100" src="{{asset('img/carrusel-03.JPG')}}" alt="Third slide">
      						<div class="carousel-caption d-none d-md-block center-text-carousel">
    							<h1>LA SITUACIÓN DEL MERCADO</h5>
    							<h1><b>A TU FAVOR</b></h5>
    							<p></p>
  							</div>
    					</div>
  					</div>
	  				<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
    					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    					<span class="sr-only">Previous</span>
  					</a>
  					<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
    					<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    				<span class="sr-only">Next</span>
  					</a>
				</div>
			</div>
		</div>	
	</div>

	<!-- Quienes Somos -->
	<div id="quienessomos">
		<div class="container">
			<div class="col-lg-12 ">
				<h1 class="text-center">¿Quíenes Somos?</h1>
				<div class="col-lg-7 col-lg-offset-2">
					Somos una firma de profecionales especializados en el sector financiero, nuestro momdelo de negocios se basa en capacitar la competecia entre instituciones bancarias, para obtener las condiciones más rentables para nuestros clientes, así como los mejores tiempos de respuesta posible.
				</div>
			</div>
		</div>
	</div>

	<!-- Servicios -->
	<div id="servicios" class="background-service">
		<div class="container color-nav-text">
			<div class="col-lg-12">
				<h1>Servicios</h1>
				<div class="row">
					<div class="col-sm-6">
						<h3>Financiamiento</h3>
						<p>Nos encargamos de la elaboración y estructuración de proyectos de inversión para conseguir las mejores condiciones crediticias de acuerdo al mercado actual</p>
						<h3>Inversiones</h3>
						<p>Instrumentos y búsqueda de socios inversionistas</p>
						<h3>Patrimonio</h3>
						<p>Trabajamos como consejeros y coach financieros</p>
					</div>
					<div class="col-sm-6">
						<h3>Another Title Here</h3>
						<p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Beneficios -->
	<div id="beneficios">
		<div class="container">
			<div class="col-lg-12 ">
				<h1 class="text-center">Beneficios</h1>
				<p>
					Financiamiento Inversiones Patrimonio
				</p>
				<div class="arrowed">
					<div class="arrow-1">
						AHORROS EN TIEMPO DE RESPUESTA
					</div>
				</div>
				<div class="arrowed">
					<div class="arrow-2">
						ELABORACIÓN DE PROYECTOS A LA MEDIDA
					</div>
				</div>
				<div class="arrowed">
					<div class="arrow-3">
						SELECCIÓN DE INSTITUCIÓN ESPECIALIZADA
					</div>
				</div>
				<div class="arrowed">
					<div class="arrow-4">
						MEJORA DE TÉRMINOS Y CONDICIONES
					</div>
				</div>
				<div class="arrowed">
					<div class="arrow-5">
						MITIGACIÓN DE RIESGOS
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contacto -->
	<div id="contacto">
		<div class="container">
			<div class="col-lg-12">
				<h1>Contacto</h1>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div id="footer">
	</div>

	<script src="{{asset('js/Page/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('css/Page/bootstrap4/popper.js')}}"></script>
	<script src="{{asset('css/Page/bootstrap4/bootstrap.min.js')}}"></script>
</body>

</html>