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
    <link rel="icon" href="{{asset('img/logo.png')}}">

    <!-- Title Page-->
    <title>Aserfi</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/Page/bootstrap4/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plugins/mui-0.9.41/css/mui.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" ">
    <link href="{{asset('plugins/aos/aos.css')}}" rel="stylesheet" type="text/css" ">
    <link href="{{asset('css/Page/style_main.css')}}" rel="stylesheet" media="all">
</head>

<body>
	<!-- Navegador -->

	<nav class="navbar fixed-top navbar-expand-lg navbar-light background-nav">
		<div class="container">
  			<a class="navbar-brand color-nav-text" href="#">
  				<img src="{{asset('img/logo.png')}}" width="50" height="50" class="d-inline-block align-top" alt="">
  			</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navegador" aria-controls="navegador" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
 	 		</button>

  			<div class="collapse navbar-collapse pull-right pull-right-nav" id="navegador">
    			<ul class="navbar-nav mr-auto">
 	     			<li class="nav-item active">
	        			<a class="scroll-car nav-link color-nav-text" href="#carrusel">Inicio</a>
    	  			</li>
     			 	<li class="nav-item">
        				<a class="scroll-qs nav-link color-nav-text" href="#">Quiénes somos</a>
      				</li>
	      			<li class="nav-item">
    	    			<a class="scroll-s nav-link color-nav-text" href="#servicios">Servicios</a>
      				</li>
      				<li class="nav-item">
        				<a class="scroll-b nav-link color-nav-text" href="#beneficiosNav">Beneficios</a>
	      			</li>
    	  			<li class="nav-item">
        				<a class="scroll-c nav-link color-nav-text" href="#contacto">Contacto</a>
      				</li>
      				<li class="nav-item nav-item-margin">
        				<a class="nav-link color-nav-text" href="#"></a>
      				</li>
      				<li class="nav-item">
        				<a class="scroll-u nav-link color-nav-text" href="#ubicanosNav">
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
    					<!--<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>-->
	  				</ol>
  					<div class="carousel-inner">
    					<div class="carousel-item active">
      						<img class="d-block w-100" src="{{asset('img/slider/seccion1.png')}}" alt="First slide">
      						<div class="carousel-caption d-none d-md-block center-text-carousel">
    							<h1 class="bounceIn animated">LA SITUACIÓN DEL MERCADO</h5>
    							<h1 class="bounceIn animated"><b>A TU FAVOR</b></h5>
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
    <div class="text-center">
      <a href="#" id="btnQuienesSomos" class="btn btn-success btn-aserfi btn-round-inicio">
        <i class="fas fa-angle-double-down"></i>
      </a>
    </div>
    	
	</div>
  <div id="quienesSomosNav" style="padding-top: 55px">
  </div>
	<!-- Quienes Somos -->
	<div id="quienessomos">
		<div class="container">
			<div class="col-lg-12">
				<h1 class="text-center fadeInLeft animated"><b>¿QUIÉNES SOMOS?</b></h1>
				<div class="row">
					<div class="col-lg-2 "></div>
					<div class="col-lg-8 ">
						Somos una firma de profesionales especializados en el sector financiero, nuestro modelo de negocios se basa en capitalizar la competencia entre instituciones bancarias, para obtener las condiciones más rentables para nuestros clientes, así como los mejores tiempos de respuesta posibles.
					</div>
					<div class="col-lg-2 "></div>
				</div>
				<div class="row margin-servicos">
					<div class="col-sm-7">
						<h4 class="text-center">TIIE PROMEDIO ANUALES 28 DÍAS</h4>
						
						<div class="row">	
							<div class="col-lg-2">
								
							</div>						
							<div class="col-lg-8">
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
                  <div class="col-lg-2" >
                    
                  </div> 
                   <a href="http://www.banxico.org.mx/">Funte: Banxico, Banco de México </a>
                </div>
							</div>

							<div class="col-lg-2 col-sm-12" >
								<img class="img-fluid" src="{{asset('img/quienessomos/quienessomos.png')}}" alt="Quienes somos 01">
							</div>	
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

  <div id="fundadores" style="display: none;">
    <div class="container">
      <div class="col-lg-12">
        <h1 class="text-center fadeInLeft animated">FUNDADORES</h1>
        <div class="row">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-3"> </div>
              <div class="col-lg-8 text-center">
                  <h4>Fernando Gonzalez de Salceda Urbina</h4>
                  <img class="img-fluid rounded" src="{{asset('img/fundadores/fundador01.png')}}" alt="Fundador 1">
                  <span class="">
                    Egresado de la Universidad de la Iberoamericana en
                    Administración de Empresas con Maestría en Finanzas en el ITAM. Con 36 años de
                    experiencia en el sector financiero.
                  </span>
              </div>
              <div class="col-lg-1"> </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-1"> </div>
              <div class="col-lg-8 text-center">
                  <h4>Fernando Gonzalez de Salceda Heshem</h4>
                  <img class="img-fluid rounded" src="{{asset('img/fundadores/fundador02.png')}}" alt="Fundador 2">
                  <span class="">
                    Egresado del Tecnológico de monterrey Campus
                    Monterrey de la carrera de Ingeniería industrial con certificación en figura 3 de la
                    Asociación Mexicana de Intermediario Bursátiles.
                  </span>
              </div>
              <div class="col-lg-3"> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

	<!-- Servicios -->
	<div id="servicios" class="background-service">
		<div class="container color-nav-text">
			<div class="col-lg-12 margin-servicos" >
				<div class="row">
					<div class="col-sm-6">
            <h2 class="margin-servicos-t1"><b>SERVICIOS</b></h2>
						<h3 class="margin-servicos-t2">Financiamiento</h3>
						<p>Nos encargamos de la elaboración y estructuración de proyectos de inversión para conseguir las mejores condiciones crediticias de acuerdo al mercado actual</p>
						<h3 class="margin-servicos-t2">Inversiones</h3>
						<p>Instrumentos y búsqueda de socios inversionistas</p>
						<h3 class="margin-servicos-t3">Patrimonio</h3>
						<p>Trabajamos como consejeros y coach financieros</p>
					</div>
					<div class="col-sm-6">
						<p class="margin-servicos-p">
              ELABORACIÓN DE PROYECTOS DE INVERSIÓN
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated progress-aserfi" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>   
            </p>
            <p class="">
              CRÉDITOS A LA MEDIDA
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated progress-aserfi" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div> 
            </p>
            <p class="">
              MEJORA DE CONDICIONES
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated progress-aserfi" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div> 
            </p>
            <img class="d-block w-100" style="width: 75%" src="{{asset('img/servicios/imagen-01.PNG')}}" alt="image1">
            <img class="d-block w-100" style="width: 75%" src="{{asset('img/servicios/imagen-02.PNG')}}" alt="imagen2">
					</div>
				</div>
			</div>
		</div>
	</div>

  <div id="beneficiosNav">
    </br>
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
						
						<div class="row fadeInLeft animated">
							<div class="rectangle-md">
								<div class="col-lg-12 arrow-center">
									AHORROS EN TIEMPO DE RESPUESTA
								</div>
							</div>
							<div class="arrow-md" style="border-left: 50px solid #152C50 !important"></div>
						</div>
						<div class="row fadeInLeft animated">
							<div class="rectangle-md" style="background-color: #284778 !important; width: 63% !important;">
								<div class="col-lg-12 arrow-center">
									ELABORACIÓN DE PROYECTOS A LA MEDIDA
								</div>
							</div>
							<div class="arrow-md" style="border-left: 50px solid #284778 !important"></div>
						</div>
						<div class="row fadeInLeft animated">
							<div class="rectangle-md" style="background-color: #284778 !important; width: 67% !important;">
								<div class="col-lg-12 arrow-center">
									SELECCIÓN DE INSTITUCIÓN ESPECIALIZADA
									</div>
								</div>
							<div class="arrow-md" style="border-left: 50px solid #284778 !important"></div>
						</div>
						<div class="row fadeInLeft animated">
							<div class="rectangle-md" style="background-color: #4275B1 !important; width: 75% !important;">
								<div class="col-lg-12 arrow-center">
									MEJORA DE TÉRMINOS Y CONDICIONES
								</div>
							</div>
							<div class="arrow-md" style="border-left: 50px solid #4275B1 !important"></div>
						</div>
						<div class="row fadeInLeft animated">
							<div class="rectangle-md" style="background-color: #4E74B1 !important; width: 70% !important;">
								<div class="col-lg-12 arrow-center">
									MITIGACIÓN DE RIESGOS
								</div>
							</div>
							<div class="arrow-md" style="border-left: 50px solid #4E74B1 !important"></div>
						</div>

					</div>

					<div class="tab-pane" id="inversiones" role="tabpanel" aria-labelledby="inversiones-tab">
            <div class="row">
              <div class="col-lg-4"></div>
              <div class="col-lg-4 jello animated">
                <canvas id="pie-chart-1" width="50" height="50"></canvas>
              </div>
              <div class="col-lg-4"></div>
            </div>
					</div>
  				<div class="tab-pane" id="patrimonio" role="tabpanel" aria-labelledby="patrimonio-tab">
						<div class="row fadeInLeft animated">
              <div class="rectangle-md" style="background-color: #284778 !important; width: 50% !important;">
                <div class="col-lg-12 arrow-center">
                  ASESORAMIENTO
                </div>
              </div>
            </div>
            <div class="row fadeInLeft animated">
              <div class="rectangle-md" style="background-color: #4275B1 !important; width: 60% !important;">
                <div class="col-lg-12 arrow-center">
                  DIVERSIFICACIÓN
                </div>
              </div>
              
            </div>
            <div class="row fadeInLeft animated">
              <div class="rectangle-md" style="background-color: #4E74B1 !important; width: 70% !important;">
                <div class="col-lg-12 arrow-center">
                  RENTABILIDAD  
                </div>
                </div>
              
            </div>
					</div>
				</div>
			</div>
		</div>
	</div>

  <div id="ubicanosNav">
    </br>
  </div>

	<!-- Contacto -->
	<div id="ubicanos" class="bg-ubicanos">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.606494157693!2d-89.6020342850677!3d21.008405286009378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56777e5f469fd9%3A0x1364bbf2f3887df4!2sASERFI!5e0!3m2!1sen!2smx!4v1544496745121" frameborder="0" style="width: 100%;  height: 460px;" allowfullscreen class="bg-ubicanos"></iframe>
	</div>

	<!-- Contacto -->
	<div id="contacto" class="bg-contacto" style="background-image: url('{{asset('img/seccion6.png')}}');">
		<div class="container">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-5 margin-form-contacto card">
						<form class="mui-form">
                <legend><b>CONTACATO</b></legend>
               
                <div class="mui-textfield mui-textfield--float-label">
                  <input type="text" id="cNombre" name="cNombre">
                  <label>Nombre</label>
                </div>
                <div class="mui-textfield mui-textfield--float-label">
                  <input type="email" id="cEmail" name="cEmail" >
                  <label>Correo</label>
                </div>
                <div class="mui-textfield mui-textfield--float-label">
                  <input type="text" id="cAsunto" name="cAsunto">
                  <label>Asunto</label>
                </div>
                <div class="mui-textfield mui-textfield--float-label">
                  <textarea id="cMensaje" name="cMensaje" rows="3"></textarea>
                  <label>Mensaje</label>
                </div>

  							<div class="">
  								<a href="#" class="btn btn-success btn-aserfi">
  									Enviar
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
    	  						<i class="fas fa-phone"></i>
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
        						fgonzalez@aserfi.mx
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
  
  <script src="{{asset('plugins/mui-0.9.41/js/mui.min.js')}}"></script>
  <script src="{{asset('plugins/aos/aos.js')}}"></script>

  <script src="{{asset('js/Page/JSGeneric.js')}}"></script>
</body>

</html>