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
    <link href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plugins/slick-1.8.0/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('plugins/icon-font/styles.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('css/Page/main_styles.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('css/Page/responsive.css')}}" rel="stylesheet" media="all">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header d-flex flex-row justify-content-end align-items-center trans_200">
		
		<!-- Logo -->
		<div class="logo mr-auto">
			<a href="#">ASERFI<span></span></a>
		</div>

		<!-- Navigation -->
		<nav class="main_nav justify-self-end text-right">
			<ul>
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#quienessomos">¿Quíenes somos?</a></li>
				<li><a href="#services">Servicios</a></li>
				<li><a href="#beneficios">Beneficios</a></li>
				<li><a href="#ubicanos">Ubícanos</a></li>
				<li><a href="#contacto">Contacto</a></li>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</nav>

		<!-- Hamburger -->
		<div class="hamburger_container bez_1">
			<i class="fas fa-bars trans_200"></i>
		</div>
		
	</header>

	<!-- Menu -->

	<div class="menu_container">
		<div class="menu menu_mm text-right">
			<div class="menu_close"><i class="far fa-times-circle trans_200"></i></div>
			<ul class="menu_mm">
				

				<li class="menu_mm active"><a href="#">Home</a></li>
				<li class="menu_mm"><a href="#quienessomos">¿Quíenes somos?</a></li>
				<li class="menu_mm"><a href="#services">Servicios</a></li>
				<li class="menu_mm"><a href="#beneficios">Beneficios</a></li>
				<li class="menu_mm"><a href="#ubicanos">Ubícanos</a></li>
				<li class="menu_mm"><a href="#contacto">Contacto</a></li>
				<li class="menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li class="menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</div>
	</div>

	<!-- Home begin -->
	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/slider_background.jpg)"></div>
		</div>
		
		<!-- Hero Slider -->
		<div class="hero_slider_container">
			
			<!-- Slider -->
			<div class="owl-carousel owl-theme hero_slider">

				<!-- Slider Item -->
				<div class="owl-item hero_slider_item item_1 d-flex flex-column align-items-center justify-content-center">
					<span> 1 </span>
					<span>LA SITUACIÓN DEL MERCADO</span>
					<span>A TU FAVOR</span>
					<span> </span>
				</div>

				<!-- Slider Item -->
				<div class="owl-item hero_slider_item item_1 d-flex flex-column align-items-center justify-content-center">
					<span> 2 </span>
					<span>LA SITUACIÓN DEL MERCADO</span>
					<span>A TU FAVOR</span>
					<span> </span>
				</div>

				<!-- Slider Item -->
				<div class="owl-item hero_slider_item item_1 d-flex flex-column align-items-center justify-content-center">
					<span> 3 </span>
					<span>LA SITUACIÓN DEL MERCADO</span>
					<span>A TU FAVOR</span>
					<span> </span>
				</div>

			</div>
			
			<!-- Hero Slider Navigation Left -->
			<div class="hero_slider_nav hero_slider_nav_left">
				<div class="hero_slider_prev d-flex flex-column align-items-center justify-content-center trans_200">
					<i class="fas fa-chevron-left trans_200"></i>
				</div>
			</div>

			<!-- Hero Slider Navigation Right -->
			<div class="hero_slider_nav hero_slider_nav_right">
				<div class="hero_slider_next d-flex flex-column align-items-center justify-content-center trans_200">
					<i class="fas fa-chevron-right trans_200"></i>
				</div>
			</div>

		</div>

		
		
		<div class="next_section_scroll">
			<div class="next_section nav_links" data-scroll-to=".services">
				<i class="fas fa-chevron-down trans_200"></i>
				<i class="fas fa-chevron-down trans_200"></i>
			</div>
		</div>	
	</div>
	<!-- Home end -->

	<!-- Services begin -->
	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h1>¿QUÍENES SOMOS?</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
				</div>
				<div class="col-lg-8">
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
					</p>
				</div>
				<div class="col-lg-2">
				</div>
			</div>

			<div class="row">
				<div class="col-lg-2">
				</div>
				<div class="col-lg-4">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
				</div>
				<div class="col-lg-6">
					
					<div class="col-lg-6 v_slider_section_image">
						<div class="">
							<img src="images/v_slider_section.jpg" alt="">
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
	<!-- Services end -->

	<!-- Newsletter begin -->
	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col text-lg-center text-left">
					<div class="newsletter_content">

						<!-- Newsletter Title -->
						
						

						<div class="row">
							<div class="col-lg-2">
							</div>
							<div class="col-lg-8">
								<div class="newsletter_title text-left">
									<h1>Servicios</h1>
								</div>
							</div>
							<div class="col-lg-2">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2">
							</div>
							<div class="col-lg-8">
								<div class="row">
									<div class="col-lg-6">
										<h2 class="text-left" style="color: #FFF;">Great team</h2>
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
										</p>
										<h2 class="text-left" style="color: #FFF;">Great team</h2>
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
										</p>
										<h2 class="text-left" style="color: #FFF;">Great team</h2>
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
										</p>
									</div>
									<div class="col-lg-6">
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
										</p>
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-2">
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Newsletter end -->

	<!-- Services begin -->
	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h1>BENEFICIOS</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					------>
					-------->
					------->
					---->
				</div>
			</div>
		</div>
	</div>
	<!-- Services end -->

	<!-- Google Map Container -->
	<div class="maps">
		<div class="container">
			<div class="row">
				<div class="col">
					<div id="google_map">
						<div class="map_container">
							<div id="map"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Google Map Container -->

	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12 text-center">

					<!-- Footer Intro -->
					<div class="footer_intro">

						<!-- Logo
						<div class="logo footer_logo">
							<a href="#">Ran<span>go</span></a>
						</div> -->

						<!-- Social -->
						<div class="footer_social">
							<ul>
								<!--<li><a href="#"><i class="fab fa-pinterest"></i></a></li>-->
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<!--<li><a href="#"><i class="fab fa-dribbble"></i></a></li>-->
								<!--<li><a href="#"><i class="fab fa-behance"></i></a></li>-->
								<!--<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>-->
							</ul>
						</div>
						
						<!-- Copyright -->
						<div class="footer_cr">
							Copyright &copy; <script>document.write(new Date().getFullYear());</script> 
							ASERFI Todos los derechos reservados
						</div>

					</div>

				</div>
				
				

			</div>

			<div class="row">
				<div class="col">
					<!-- Copyright -->
					<div class="footer_cr_2">
						Copyright &copy; <script>document.write(new Date().getFullYear());</script> 
							ASERFI Todos los derechos reservados
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="{{asset('js/Page/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('css/Page/bootstrap4/popper.js')}}"></script>
<script src="{{asset('css/Page/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('plugins/slick-1.8.0/slick.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('js/Page/custom.js')}}"></script>
</body>

</html>