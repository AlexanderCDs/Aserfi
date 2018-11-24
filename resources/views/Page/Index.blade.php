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
				<li><a href="about.html">About Us</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="contact.html">Contact</a></li>
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
				<li class="menu_mm"><a href="about.html">About Us</a></li>
				<li class="menu_mm"><a href="services.html">Services</a></li>
				<li class="menu_mm"><a href="portfolio.html">Portfolio</a></li>
				<li class="menu_mm"><a href="blog.html">Blog</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li>
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
			<div class="next_section nav_links" data-scroll-to=".icon_boxes">
				<i class="fas fa-chevron-down trans_200"></i>
				<i class="fas fa-chevron-down trans_200"></i>
			</div>
		</div>	
	</div>
	<!-- Home end -->

	<!-- Icon Boxes begin-->
	<div class="icon_boxes">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="icon_box_title">
						<h1>Build your entire website in minutes</h1>
					</div>
					<div class="button icon_box_button trans_200">
						<a href="#" class="trans_200">discover more</a>
					</div>
				</div>

				<div class="col-lg-4 icon_box_col">

					<!-- Icon Box Item -->
					<div class="icon_box_item">
						<h2>Great team</h2>
						<p>Etiam euismod sapien nec est tempus consequat. Nullam eget pretium mi. Curabitur rhoncus finibus quam quis sodales.</p>
					</div>

					<!-- Icon Box Item -->
					<div class="icon_box_item">
						<h2>Modern Design</h2>
						<p>Etiam euismod sapien nec est tempus consequat. Nullam eget pretium mi. Curabitur rhoncus finibus quam quis sodales.</p>
					</div>

				</div>

				<div class="col-lg-4 icon_box_col">

					<!-- Icon Box Item -->
					<div class="icon_box_item">
						<h2>Online Marketing</h2>
						<p>Etiam euismod sapien nec est tempus consequat. Nullam eget pretium mi. Curabitur rhoncus finibus quam quis sodales.</p>
					</div>

					<!-- Icon Box Item -->
					<div class="icon_box_item">
						<h2>Easy to use</h2>
						<p>Etiam euismod sapien nec est tempus consequat. Nullam eget pretium mi. Curabitur rhoncus finibus quam quis sodales.</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- Icon Boxes end -->

	<!-- Vertical Slider Section begin -->
	<div class="v_slider_section">
		<div class="container fill_height">
			<div class="row fill_height">

				<div class="col-lg-6 v_slider_section_image">
					<div class="v_slider_image">
						<img src="images/v_slider_section.jpg" alt="">
					</div>
				</div>

				<div class="col-lg-5 offset-lg-1 v_slider_content d-flex flex-column justify-content-center">
					<div class="v_slider_container">

						<!-- Vertical Slider -->
						<div class="v_slider">

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<h1>Fast support</h1>
								<h1>to all our</h1>
								<h1>clients. Just give</h1>
								<h1>us a shout</h1>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<h1>Fast support</h1>
								<h1>to all our</h1>
								<h1>clients. Just give</h1>
								<h1>us a shout</h1>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<h1>Fast support</h1>
								<h1>to all our</h1>
								<h1>clients. Just give</h1>
								<h1>us a shout</h1>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<h1>Fast support</h1>
								<h1>to all our</h1>
								<h1>clients. Just give</h1>
								<h1>us a shout</h1>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<h1>Fast support</h1>
								<h1>to all our</h1>
								<h1>clients. Just give</h1>
								<h1>us a shout</h1>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<h1>Fast support</h1>
								<h1>to all our</h1>
								<h1>clients. Just give</h1>
								<h1>us a shout</h1>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<h1>Fast support</h1>
								<h1>to all our</h1>
								<h1>clients. Just give</h1>
								<h1>us a shout</h1>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Vertical Slider Section end -->

	<!-- Services begin -->
	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h1>ASERFI. We take care of your business</h1>
						<span>Explore our services</span>
					</div>
				</div>
			</div>
		</div>

		<div class="h_slider_container services_slider_container">
			<div class="service_slider_outer">
				<!-- Services Slider -->
				<div class="owl-carousel owl-theme services_slider">
					
					<!-- Services Slider Item-->
					<div class="owl-item services_item">
						<div class="services_item_inner">
							<div class="service_item_content">
								<div class="service_item_title">
									<div class="service_item_icon">
										<div data-icon="&#xe083;" class="icon"></div>
									</div>
									<h2>Amazing service</h2>
								</div>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vesti bul mattis effic iturut magna.</p>
								<div class="button service_item_button trans_200">
									<a href="#" class="trans_200">discover more</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Services Slider Item-->
					<div class="owl-item services_item">
						<div class="services_item_inner">
							<div class="service_item_content">
								<div class="service_item_title">
									<div class="service_item_icon">
										<div data-icon="&#xe059;" class="icon"></div>
									</div>
									<h2>Management</h2>
								</div>
								<p>Odio vestibulum est mattis effic iturut magna. Pellente sque sit am et tellus blandit. Etiam nec odio vesti bul.</p>
								<div class="button service_item_button trans_200">
									<a href="#" class="trans_200">discover more</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Services Slider Item-->
					<div class="owl-item services_item">
						<div class="services_item_inner">
							<div class="service_item_content">
								<div class="service_item_title">
									<div class="service_item_icon">
										<div data-icon="&#xe024;" class="icon"></div>
									</div>
									<h2>Risk Evaluation</h2>
								</div>
								<p>Odio vestibulum est mattis effic iturut magna. Pellente sque sit am et tellus blandit. Etiam nec odio vesti bul.</p>
								<div class="button service_item_button trans_200">
									<a href="#" class="trans_200">discover more</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Services Slider Item-->
					<div class="owl-item services_item">
						<div class="services_item_inner">
							<div class="service_item_content">
								<div class="service_item_title">
									<div class="service_item_icon">
										<div data-icon="&#xe05e;" class="icon"></div>
									</div>
									<h2>Assesment</h2>
								</div>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pel lentesque sit am et tellus bla ndit. Etiam nec odio vestibul.</p>
								<div class="button service_item_button trans_200">
									<a href="#" class="trans_200">discover more</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Services Slider Item-->
					<div class="owl-item services_item">
						<div class="services_item_inner">
							<div class="service_item_content">
								<div class="service_item_title">
									<div class="service_item_icon">
										<div data-icon="&#xe059;" class="icon"></div>
									</div>
									<h2>Great team</h2>
								</div>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pel lentesque sit am et tellus bla ndit. Etiam nec odio vestibul.</p>
								<div class="button service_item_button trans_200">
									<a href="#" class="trans_200">discover more</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Services Slider Item-->
					<div class="owl-item services_item">
						<div class="services_item_inner">
							<div class="service_item_content">
								<div class="service_item_title">
									<div class="service_item_icon">
										<div data-icon="&#xe040;" class="icon"></div>
									</div>
									<h2>Amazing service</h2>
								</div>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vesti bul mattis effic iturut magna.</p>
								<div class="button service_item_button trans_200">
									<a href="#" class="trans_200">discover more</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Services Slider Item-->
					<div class="owl-item services_item">
						<div class="services_item_inner">
							<div class="service_item_content">
								<div class="service_item_title">
									<div class="service_item_icon">
										<div data-icon="&#xe020;" class="icon"></div>
									</div>
									<h2>Amazing service</h2>
								</div>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vesti bul mattis effic iturut magna.</p>
								<div class="button service_item_button trans_200">
									<a href="#" class="trans_200">discover more</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			
				<div class="services_slider_nav services_slider_nav_left"><i class="fas fa-chevron-left trans_200"></i></div>
				<div class="services_slider_nav services_slider_nav_right"><i class="fas fa-chevron-right trans_200"></i></div>

			</div>
		</div>
	</div>
	<!-- Services end -->

	<!-- Features begin -->
	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col text-center">

					<div class="section_title">
						<h1>Modern features</h1>
					</div>

				</div>
			</div>
			<div class="row features_row">

				<div class="col-lg-4 text-lg-right features_col order-lg-1 order-2">
					
					<!-- Features Item-->
					<div class="features_item">
						<h2>Responsive</h2>
						<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pel lentesque sit am et tellus.</p>
					</div>

					<!-- Features Item-->
					<div class="features_item">
						<h2>Clean code</h2>
						<p>Nec odio vestibulum est mattis effic iturut magna. Pel lentesque sit am et tellus bla ndit.</p>
					</div>

				</div>

				<div class="col-lg-4 d-flex flex-column align-items-center order-lg-2 order-1">
					<div class="features_image">
						<img src="images/features.png" alt="">
					</div>
					<div class="button features_button trans_200">
						<a href="#" class="trans_200">discover more</a>
					</div>
				</div>

				<div class="col-lg-4 features_col order-lg-3 order-3">
					
					<!-- Features Item-->
					<div class="features_item">
						<h2>Retina ready</h2>
						<p>Nec odio vestibulum est mattis effic iturut magna. Pel lentesque sit am et tellus bla ndit.</p>
					</div>

					<!-- Features Item-->
					<div class="features_item">
						<h2>Great team</h2>
						<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pel lentesque sit am et tellus.</p>
					</div>

					<div class="button features_button_2 trans_200">
						<a href="#" class="trans_200">discover more</a>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Features end -->

	<!-- Call to action begin -->
	<div class="cta">
		<div class="cta_background" style="background-image:url(images/cta_background.jpg)"></div>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-5 order-lg-1 order-2">
					<div class="cta_content">
						<h1>We love our customers</h1>
						<p>Cursus, enim a ultrices venenatis, ante magna varius felis, ac sodales turpis lectus a odio. Quisque facilisis lacus vitae leo tincidunt, id cursus dui blandit.</p>
					</div>
				</div>

				<div class="col-lg-6 offset-lg-1 order-lg-2 order-1">
					<div class="cta_image d-flex flex-column justify-content-end">
						<img src="images/cta.png" alt="image by https://unsplash.com/@heysupersimi">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Call to action end -->

	<!-- Text Line begin -->
	<div class="text_line">
		<div class="container">
			<div class="row">

				<div class="col-lg-5 text-lg-right text-center">
					<div class="text_line_image">
						<img src="images/line.jpg" alt="">
					</div>
				</div>

				<div class="col-lg-5 offset-lg-2">
					<div class="text_line_content">
						<h1>We integrate the future</h1>
						<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
						<div class="button text_line_button trans_200">
							<a href="#" class="trans_200">discover more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Text Line end -->

	<!-- Newsletter begin -->
	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col text-lg-center text-left">
					<div class="newsletter_content">

						<!-- Newsletter Title -->
						<div class="newsletter_title">
							<h1>Subscribe to our newsletter</h1>
							<span>Cursus, enim a ultrices venenatis, ante magna varius.</span>
						</div>
						
						<!-- Newsletter Form -->
						<div class="newsletter_form_container">
							<form action="#">
								<div class="input-group">
									<input type="email" class="newsletter_email" placeholder="Your e-mail address here" required="required" data-error="Valid email address is required.">
									<button id="newsletter_form_submit" type="submit" class="button newsletter_submit_button trans_200" value="Submit">
										subscribe
									</button>
								</div>
									
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Newsletter end -->

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