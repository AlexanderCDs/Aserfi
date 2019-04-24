<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Somos una firma de profesionales especializados en el sector financiero, nuestro modelo de negocios se basa en capitalizar la competencia entre instituciones bancarias, para obtener las condiciones más rentables para nuestros clientes, así como los mejores tiempos de respuesta posibles.">
    <meta name="author" content="Arthur CD & Cindy CV">
    <meta name="keywords" content="au theme template">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('img/logo_azul.png')}}">

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

	<nav class="navbar fixed-top navbar-expand-lg navbar-dark background-nav">
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
	        			<a class="scroll-car nav-link color-nav-text smooth line-nav" href="#carrusel">Inicio</a>
    	  			</li>
     			 	  <li class="nav-item">
        				<a class="scroll-qs nav-link color-nav-text smooth" href="#quienesSomosNav">Quiénes Somos</a>
      				</li>
	      			<li class="nav-item">
    	    			<a class="scroll-s nav-link color-nav-text smooth" href="#servicios">Servicios</a>
      				</li>
      				<li class="nav-item">
        				<a class="scroll-b nav-link color-nav-text smooth" href="#beneficiosNav">Beneficios</a>
	      			</li>
    	  			<li class="nav-item">
        				<a class="scroll-c nav-link color-nav-text smooth" href="#contacto">Contacto</a>
      				</li>
      				<li class="nav-item nav-item-margin">
        				<a class="nav-link color-nav-text" href="#"></a>
      				</li>
      				<li class="nav-item">
        				<a class="scroll-u nav-link color-nav-text smooth" href="#ubicanosNav">
        					<i class="fas fa-map-marker-alt"></i>
        				</a>
      				</li>
      				<li class="nav-item">
	        			<a class="nav-link color-nav-text" href="https://www.facebook.com/AserfiMX/" target="_blank">
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
				<div id="carouselIndicators" class="carousel carousel-index slide" data-ride="carousel">
  					<ol class="carousel-indicators">
    					<!--<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>-->
	  				</ol>
  					<div class="carousel-inner carousel-inner-index">
    					<div class="carousel-item active">
      						<img id="s1" class="d-block w-100" src="{{asset('img/slider/Banner_1_Seccion1.png')}}" alt="First slide">
      						<div class="carousel-caption center-text-carousel">
                    <h1 id="ht11" class="bounceIn animated h1-class">LA SITUACIÓN DEL MERCADO</h5>
                    <h1 id="ht21" class="bounceIn animated h1-class"><b>A TU FAVOR</b></h5>
                    <p></p>
                  </div>
    					</div>
              <div class="carousel-item ">
                  <img id="s2" class="d-block w-100" src="{{asset('img/slider/Banner_1_Seccion1.png')}}" alt="First slide">
                  <div class="carousel-caption center-text-carousel">
                    <h1 id="ht12" class="bounceIn animated h1-class">LA SITUACIÓN DEL MERCADO</h5>
                    <h1 id="ht22" class="bounceIn animated h1-class"><b>A TU FAVOR</b></h5>
                    <p></p>
                  </div>
              </div>
              <div class="carousel-item ">
                  <img id="s3" class="d-block w-100" src="{{asset('img/slider/Banner_1_Seccion1.png')}}" alt="First slide">
                  <div class="carousel-caption center-text-carousel">
                    <h1 id="ht13" class="bounceIn animated h1-class">LA SITUACIÓN DEL MERCADO</h5>
                    <h1 id="ht23" class="bounceIn animated h1-class"><b>A TU FAVOR</b></h5>
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
      <a href="#quienesSomosNav" id="btnQuienesSomos" class="btn btn-success btn-aserfi btn-round-inicio smooth">
        <i class="fas fa-angle-double-down"></i>
      </a>
    </div>
    	
	</div>
  <div id="quienesSomosNav">
  </div>
	<!-- Quienes Somos -->
	<div id="quienessomos">
		<div class="container">
			<div class="col-lg-12">
				<h1 class="text-center hover-title-seccion zoomIn animated"><b class="titulo-secciones-azul">¿QUIÉNES SOMOS?</b></h1>

				<div class="row">
          <div class="col-lg-1"> </div>
          <div class="col-lg-10">
            <p id="p" class="p-quienes">
              Somos una firma de profesionales especializados en el sector financiero, nuestro modelo de negocios se basa en capitalizar la competencia entre instituciones bancarias, para obtener las condiciones más rentables para nuestros clientes, así como los mejores tiempos de respuesta posibles.
            </p>
          </div>
          <div class="col-lg-1"> </div>
				</div>
       
			</div>
		</div>
     <div class="row row-qs" style="padding-top: 40px">
          <div class="col-lg-3"> </div>
          <div class="col-lg-6">
            <div id="fundadores">
              <div class="col-lg-12">
                <div class="">
                  <div id="indicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img id="f1" class="d-block w-100" src="{{asset('img/fundadores/fundador_slider01.png')}}" alt="First slide">
                        <div class="carousel-caption carousel-caption-fundadores">
                          <p><b id="t1">Fernando González de Salceda Urbina</b></p>
                          <p id="p1" >Egresado de la Universidad de la Iberoamericana en Administración de Empresas con Maestría en Finanzas en el ITAM. Con 36 años de experiencia en el sector financiero.</p>
                        </div>
                      </div>

                      <div class="carousel-item">
                        <img id="f2" class="d-block w-100" src="{{asset('img/fundadores/fundador_slider02.png')}}" alt="First slide">
                        <div class="carousel-caption carousel-caption-fundadores">
                          <p><b id="t2">Fernando González de Salceda Heshem</b></p>
                          <p id="p2" >Egresado del Tecnológico de monterrey Campus Monterrey de la carrera de Ingeniería industrial con certificación en figura 3 de la Asociación Mexicana de Intermediario Bursátiles</p>
                        </div>
                      </div>
                    </div>

                    <a class="carousel-control-prev carousel-control-prev-qs" href="#indicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon carousel-control-prev-icon-fundadores" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next carousel-control-next-qs" href="#indicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon carousel-control-next-icon-fundadores" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3"> </div>
        </div>
	</div>

    <!-- Quienes Somos -->
  <div id="video-aserfi" class="bg-aserfi-video" style="margin-top: 50px; margin-bottom: 1px;">
    <div class="container">
      <div id="divVideo" class="col-lg-12 divNotActive">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe id="iframeVideo" width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
      </div>
      <div id="divBtn" class="col-lg-12">
        <div class="row">
          <div class="container-video">
            <img class="d-block w-100" src="{{asset('img/fundadores/video.png')}}" alt="">
            <svg version="1.1" id="btn-play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="100px" width="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
              <path class="stroke-solid" fill="none" stroke="white"  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
              <path class="stroke-dotted" fill="none" stroke="white"  d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7C97.3,23.7,75.7,2.3,49.9,2.5"/>
              <path class="icon" fill="white" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>

	<!-- Servicios -->
	<div id="servicios" class="background-service">
		<div class="container color-nav-text">
			<div class="col-lg-12" >
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1 class="hover-title-seccion "><b class="titulo-secciones-blanco">SERVICIOS</b></h1>
          </div>
        </div>
				<div class="row" >
          <div class="col-lg-1"> </div>
          <div class="col-lg-5" >
            <h1 class="h1-servivios h1-smt"><b>Financiamiento</b></h1>
            <p id="pServivios" class="p-servivios">Nos encargamos de la elaboración y estructuración de proyectos de inversión para conseguir las mejores condiciones crediticias de acuerdo al mercado actual</p>
          </div>
          <div class="col-lg-5">
            <p >
              <p id="pSGrafia1" class="p-graficas">
              ELABORACIÓN DE PROYECTOS DE INVERSIÓN</p>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated progress-aserfi" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>   
            </p>
            <p>
              <p id="pSGrafia2" class="p-graficas">
              CRÉDITOS A LA MEDIDA</p>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated progress-aserfi" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div> 
            </p>
            <p>
              <p id="pSGrafia3" class="p-graficas">
              MEJORA DE CONDICIONES</p>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated progress-aserfi" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div> 
            </p>
          </div>
          <div class="col-lg-1"> </div>
				</div>

        <div class="row" >
          <div class="col-lg-1"> </div>
          <div class="col-lg-5">
            <h1 class="h1-servivios"><b>Inversiones</b></h1>
            <p id="pSInversiones" class="p-servivios">Instrumentos y búsqueda de socios inversionistas</p>
          </div>
          <div class="col-lg-5">
            <img class="d-block w-100 img-inversiones" style="width: 75%" src="{{asset('img/servicios/imagen-01.PNG')}}" alt="image1">
          </div>
          <div class="col-lg-1"> </div>
        </div>

        <div class="row" >
          <div class="col-lg-1"> </div>
          <div class="col-lg-5">
            <h1 class="h1-servivios"><b>Patrimonio</b></h1>
            <p id="pSPatrimonio" class="p-servivios">Trabajamos como consejeros y coach financieros</p>
          </div>
          <div class="col-lg-5" style="padding-top: 50px;" >
            <img class="d-block w-100" style="width: 75%" src="{{asset('img/servicios/imagen-02.PNG')}}" alt="imagen2">
          </div>
          <div class="col-lg-1"> </div>
        </div>

			</div>
		</div>
	</div>

  <div id="beneficiosNav">
    
  </div>

	<!-- Beneficios -->
	<div id="beneficios">
		<div class="">
			<div class="col-lg-12 ">
				<h1 class="text-center hover-title-seccion "><b class="titulo-secciones-azul">BENEFICIOS</b></h1>
          
					<ul class="nav nav-fill nav-tabs nav-beneficios" id="tabBeneficios" role="tablist" style="margin-top: 40px; margin-bottom: 39px;">
  						<li class="nav-item">
  							<a class="nav-link active" id="financiamiento-tab" data-toggle="tab" href="#financiamiento" role="tab" aria-controls="financiamiento" aria-selected="true">Financiamiento </a>
  						</li>
  						<li class="nav-item">
  							<a class="nav-link" id="inversiones-tab" data-toggle="tab" href="#inversiones" role="tab" aria-controls="inversiones" aria-selected="true">Inversiones </a>
  						</li>
  						<li class="nav-item">
  							<a class="nav-link" id="patrimonio-tab" data-toggle="tab" href="#patrimonio" role="tab" aria-controls="patrimonio" aria-selected="true">Patrimonio </a>
  						</li>
  				</ul>

				<div class="tab-content">
					<div class="tab-pane active" id="financiamiento" role="tabpanel" aria-labelledby="financiamiento-tab">
						
						<div class="row hover-title fadeInLeft animated">
							<div class="rectangle-md">
								<div id="divFlecha1" class="col-lg-12 arrow-center">
									AHORROS EN TIEMPO DE RESPUESTA
								</div>
							</div>
							<div class="arrow-md" style="border-left: 50px solid #152C50 !important"></div>
						</div>
						<div class="row hover-title fadeInLeft animated">
							<div class="rectangle-md" style="background-color: #284778 !important; width: 63% !important;">
								<div id="divFlecha2" class="col-lg-12 arrow-center">
									ELABORACIÓN DE PROYECTOS A LA MEDIDA
								</div>
							</div>
							<div class="arrow-md" style="border-left: 50px solid #284778 !important"></div>
						</div>
						<div class="row hover-title fadeInLeft animated">
							<div class="rectangle-md" style="background-color: #284778 !important; width: 67% !important;">
								<div id="divFlecha3" class="col-lg-12 arrow-center">
									SELECCIÓN DE INSTITUCIÓN ESPECIALIZADA
									</div>
								</div>
							<div class="arrow-md" style="border-left: 50px solid #284778 !important"></div>
						</div>
						<div class="row hover-title fadeInLeft animated">
							<div class="rectangle-md" style="background-color: #4275B1 !important; width: 75% !important;">
								<div id="divFlecha4" class="col-lg-12 arrow-center">
									MEJORA DE TÉRMINOS Y CONDICIONES
								</div>
							</div>
							<div class="arrow-md" style="border-left: 50px solid #4275B1 !important"></div>
						</div>
						<div class="row hover-title fadeInLeft animated">
							<div class="rectangle-md" style="background-color: #4E74B1 !important; width: 70% !important;">
								<div id="divFlecha5" class="col-lg-12 arrow-center">
									MITIGACIÓN DE RIESGOS
								</div>
							</div>
							<div class="arrow-md" style="border-left: 50px solid #4E74B1 !important"></div>
						</div>

					</div>

					<div class="tab-pane" id="inversiones" role="tabpanel" aria-labelledby="inversiones-tab">
            <div class="row fadeInLeft animated">
              <div class="col-lg-2"></div>
              <div class="col-lg-8">
                <img id="fInversion" class="d-block w-100" src="{{asset('img/beneficios/inversiones.png')}}" alt="Inversiones Aserfi">
              </div>
              <div class="col-lg-2"></div>
            </div>
					</div>
  				<div class="tab-pane" id="patrimonio" role="tabpanel" aria-labelledby="patrimonio-tab">
						<div class="row hover-title fadeInLeft animated">
              <div class="rectangle-cute-md" style="background-color: #284778 !important; width: 50% !important;">
                <div id="divBarra1" class="col-lg-12 arrow-center">
                  ASESORAMIENTO
                </div>
              </div>
            </div>
            <div class="row hover-title fadeInLeft animated">
              <div class="rectangle-cute-md" style="background-color: #4275B1 !important; width: 60% !important;">
                <div id="divBarra2" class="col-lg-12 arrow-center">
                  DIVERSIFICACIÓN
                </div>
              </div>
              
            </div>
            <div class="row hover-title fadeInLeft animated">
              <div class="rectangle-cute-md" style="background-color: #4E74B1 !important; width: 70% !important;">
                <div id="divBarra3" class="col-lg-12 arrow-center">
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
                <legend style="margin-left: 10px;"><b>CONTACTO</b></legend>
               
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

  							
  						</form>
              <div class="">
                  <button id="btnEmail" href="#" class="btn btn-success btn-aserfi">
                    Enviar
                  </button>
                </div>
					</div>
					<div class="col-lg-5 margin-form-contacto">
						<ul class="margin-contacto" >
    	  					<a href="#" class="btn btn-success btn-aserfi btn-round">
    	  						<i class="fas fa-map-marker-alt"></i>
    	  					</a>
        					<span id="" style="margin-left: 15px;">
                    <ol id="contacto1" class="size-text" style="margin-left: 20px; margin-top: -32px;">
                     San Antonio Cinta. Mérida, Yucatán.
                  </ol></span>
        					
      						
      						<a href="#" class="btn btn-success btn-aserfi btn-round">
    	  						<i class="fas fa-phone"></i>
    	  					</a>
        					<span class="size-text" id="contacto2" style="margin-left: 15px;">(999) 422 5312</span>
        					
        					<ol class="size-text" id="contacto3" style="margin-left: 20px;">
        						(999) 322 8638
        					</ol>

      						<a href="#" class="btn btn-success btn-aserfi btn-round">
    	  						<i class="fas fa-envelope"></i>
    	  					</a>
        					<span class="size-text" id="contacto4" style="margin-left: 15px;">fgonzalez@aserfi.mx</span>
        					
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
	
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="{{asset('plugins/mui-0.9.41/js/mui.min.js')}}"></script>
  <script src="{{asset('plugins/aos/aos.js')}}"></script>
  <script src="{{asset('js/Dashboard/JSGenerico.js')}}"></script>
  <script src="{{asset('js/Page/JSGeneric.js')}}"></script>
  <script src="{{asset('js/Page/Page.js')}}"></script>
</body>

</html>