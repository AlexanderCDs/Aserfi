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
        				<a class="nav-link color-nav-text" href="#quienessomos">Quiénes somos</a>
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
			<div class="col-lg-12 margin-servicos">
				<h1 class="text-center">¿Quiénes Somos?</h1>
					<div class="row">
						<div class="col-lg-2 "></div>
						<div class="col-lg-8 ">
							Somos una firma de profecionales especializados en el sector financiero, nuestro momdelo de negocios se basa en capacitar la competecia entre instituciones bancarias, para obtener las condiciones más rentables para nuestros clientes, así como los mejores tiempos de respuesta posible.
						</div>
						<div class="col-lg-2 "></div>
				</div>
				<div class="row margin-servicos">
					<div class="col-sm-7">
						<h4 class="text-center">TII PROMEDIO ANUALES 28 DÍAS</h4>
						<div class="row">
							<div class="col-lg-4">
								<canvas id="doughnut-chart-1" width="50" height="50"></canvas>
							</div>
							<div class="col-lg-4">
								<canvas id="doughnut-chart-2" width="50" height="50"></canvas>
							</div>
							<div class="col-lg-4">
								<canvas id="doughnut-chart-3" width="50" height="50"></canvas>
							</div>
						</div>
						<div class="row">	
							<div class="col-lg-2">
								
							</div>						
							<div class="col-lg-4">
								<canvas id="doughnut-chart-4" width="50" height="50"></canvas>
							</div>
							<div class="col-lg-4">
								<canvas id="doughnut-chart-5" width="50" height="50"></canvas>
							</div>

							<div class="col-lg-2">
								
							</div>	
						</div>
						
					</div>
					<div class="col-sm-2">Imagen</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Servicios -->
	<div id="servicios" class="background-service">
		<div class="container color-nav-text">
			<div class="col-lg-12 ">
				<h1>Servicios</h1>
				<div class="row margin-servicos">
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
		<div class="">
			<div class="col-lg-12 ">
				<h1 class="text-center">Beneficios</h1>

					<ul class="nav nav-fill nav-tabs nav-beneficios" id="tabBeneficios" role="tablist">
  						<li class="nav-item">
  							<a class="nav-link active" id="financiamiento-tab" data-toggle="tab" href="#financiamiento" role="tab" aria-controls="financiamiento" aria-selected="true">Financiamiento</a>
  						</li>
  						<li class="nav-item">
  							<a class="nav-link" id="inversiones-tab" data-toggle="tab" href="#inversiones" role="tab" aria-controls="inversiones" aria-selected="true">Inversiones</a>
  						</li>
  						<li class="nav-item">
  							<a class="nav-link" id="patrimonio-tab" data-toggle="tab" href="#patrimonio" role="tab" aria-controls="patrimonio" aria-selected="true">Patrimonio</a>
  						</li>
  					</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="financiamiento" role="tabpanel" aria-labelledby="financiamiento-tab">
						
						<div class="row arrow-trans">
							<div class="rectangle-md">
								<div class="col-lg-12 arrow-center">
									AHORROS EN TIEMPO DE RESPUESTA
								</div>
							</div>
							<div class="arrow-md" style="border-left: 50px solid #152C50 !important"></div>
						</div>
						<div class="row arrow-trans">
							<div class="rectangle-md" style="background-color: #284778 !important; width: 55% !important;">
								<div class="col-lg-12 arrow-center">
									ELABORACIÓN DE PROYECTOS A LA MEDIDA
								</div>
							</div>
							<div class="arrow-md" style="border-left: 50px solid #284778 !important"></div>
						</div>
						<div class="row arrow-trans">
							<div class="rectangle-md" style="background-color: #284778 !important; width: 65% !important;">
								<div class="col-lg-12 arrow-center">
									SELECCIÓN DE INSTITUCIÓN ESPECIALIZADA
									</div>
								</div>
							<div class="arrow-md" style="border-left: 50px solid #284778 !important"></div>
						</div>
						<div class="row arrow-trans">
							<div class="rectangle-md" style="background-color: #4275B1 !important; width: 75% !important;">
								<div class="col-lg-12 arrow-center">
									MEJORA DE TÉRMINOS Y CONDICIONES
								</div>
							</div>
							<div class="arrow-md" style="border-left: 50px solid #4275B1 !important"></div>
						</div>
						<div class="row arrow-trans">
							<div class="rectangle-md" style="background-color: #4E74B1 !important; width: 70% !important;">
								<div class="col-lg-12 arrow-center">
									MITIGACIÓN DE RIESGOS
								</div>
							</div>
							<div class="arrow-md" style="border-left: 50px solid #4E74B1 !important"></div>
						</div>

					</div>

					<div class="tab-pane" id="inversiones" role="tabpanel" aria-labelledby="inversiones-tab">
						Inversiones
					</div>
  					<div class="tab-pane" id="patrimonio" role="tabpanel" aria-labelledby="patrimonio-tab">
						Patrimonio
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contacto -->
	<div id="ubicanos">
		<div class="container">
			<div class="col-lg-12">
				<div id="map"></div>
			</div>
		</div>
	</div>

	<!-- Contacto -->
	<div id="contacto" class="bg-contacto">
		<div class="container">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-5 margin-form-contacto">
						<form>
							<h1>Contacto</h1>
  							<div class="form-group">
  								<input type="text" class="form-control" id="cNombre" name="cNombre" placeholder="Nombre">
  							</div>
  							<div class="form-group">
    							<input type="email" class="form-control" id="cEmail" name="cEmail" placeholder="Correo">
  							</div>
  							<div class="form-group">
    							<input type="text" class="form-control" id="cAsunto" name="cAsunto" placeholder="Asunto">
  							</div>
  							<div class="form-group">
  								<textarea class="form-control" id="cMensaje" name="cMensaje" placeholder="Mensaje" rows="3"></textarea>
  							</div>
  							<div class="">
  								<a href="#" class="btn btn-success btn-aserfi">
  									<i class="fas fa-check"></i> Enviar
  								</a>
  							</div>
  						</form>
					</div>
					<div class="col-lg-5 margin-form-contacto">
						<ul class="margin-contacto" >
    	  					<a href="#" class="btn btn-success btn-aserfi btn-round">
    	  						<i class="fas fa-map-marker-alt"></i>
    	  					</a>
        					<span>Ubicación</span>
        					<ol>
        						Calle 16 No. 61A x 3 y 5 C.P. 97139 San Antonio Cinta. Mérida, Yucatán.
        					</ol>
      						
      						<a href="#" class="btn btn-success btn-aserfi btn-round">
    	  						<i class="fab fa-whatsapp"></i> 
    	  					</a>
        					<span>Teléfono</span>
        					
        					<ol>
        						(999) 422 5312
        					</ol>
        					<ol>
        						(999) 322 8638
        					</ol>

      						<a href="#" class="btn btn-success btn-aserfi btn-round">
    	  						<i class="fas fa-envelope"></i>
    	  					</a>
        					<span>Correo</span>
        					
        					<ol>
        						fgonzales@aserfi.mx
        					</ol>
    	  				</ul>
					</div>
					<div class="col-lg-1"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div id="footer" class="bg-footer text-center">
		Copyright &copy; <script>document.write(new Date().getFullYear());</script> ASERFI Todos los derechos reservados
	</div>

	<script src="{{asset('js/Page/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('css/Page/bootstrap4/popper.js')}}"></script>
	<script src="{{asset('css/Page/bootstrap4/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/Page/moment/moment.js')}}"></script>
	<script src="{{asset('js/Page/moment/moment-with-locales.js')}}"></script>
	<script src="{{asset('js/Page/chart-2.7.3/chart.js')}}"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWuHgTNUdHd2A5oUq7Kw0qDeCtSL7tAZA&callback=initMap"></script>
	<script type="text/javascript">
		function initMap() {
  			// The location of Uluru
  			var uluru = {lat: -25.344, lng: 131.036};
  			// The map, centered at Uluru
  			var map = new google.maps.Map(
     		 document.getElementById('map'), {zoom: 4, center: uluru});
  			// The marker, positioned at Uluru
  			var marker = new google.maps.Marker({position: uluru, map: map});
		}

		$( document ).ready(function() {
			new Chart(document.getElementById("doughnut-chart-1"), {
    			type: 'doughnut',
    			data: {
      				labels: ["item-1", "item-2"],
      				datasets: [
        				{
          					backgroundColor: ["#DFDFDF", "#00528A"],
          					data: [2478,5267]
        				}
      				]
    			},
    			options: {
    				responsive: true,
      				title: {
        				display: true,
        				text: '2014'
      				}
    			}
			});

			new Chart(document.getElementById("doughnut-chart-2"), {
    			type: 'doughnut',
    			data: {
      				labels: ["item-1", "item-2"],
      				datasets: [
        				{
          					backgroundColor: ["#DFDFDF", "#00528A"],
          					data: [247,267]
        				}
      				]
    			},
    			options: {
      				responsive: true,
      				title: {
        				display: true,
        				text: '2015'
      				}
    			}
			});

			new Chart(document.getElementById("doughnut-chart-3"), {
    			type: 'doughnut',
    			data: {
      				labels: ["item-1", "item-2"],
      				datasets: [
        				{
          					backgroundColor: ["#DFDFDF", "#00528A"],
          					data: [278,527]
        				}
      				]
    			},
    			options: {
      				responsive: true,
      				title: {
        				display: true,
        				text: '2016'
      				}
    			}
			});

			new Chart(document.getElementById("doughnut-chart-4"), {
    			type: 'doughnut',
    			data: {
      				labels: ["item-1", "item-2"],
      				datasets: [
        				{
          					backgroundColor: ["#DFDFDF", "#00528A"],
          					data: [2478,5267]
        				}
      				]
    			},
    			options: {
      				responsive: true,
      				title: {
        				display: true,
        				text: '2017'
      				}
    			}
			});

			new Chart(document.getElementById("doughnut-chart-5"), {
    			type: 'doughnut',
    			data: {
      				labels: ["item-1", "item-2"],
      				datasets: [
        				{
          					backgroundColor: ["#DFDFDF", "#00528A"],
          					data: [78,57]
        				}
      				]
    			},
    			options: {
      				responsive: true,
      				title: {
        				display: true,
        				text: '2018'
      				}
    			}
			});

			
		});
	</script>
</body>

</html>