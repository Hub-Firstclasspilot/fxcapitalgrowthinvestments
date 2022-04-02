<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<title>FX Capital - Investment Company</title>
<meta name="description" content="FX Capital - Investment Company"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="canonical" href="https://www.fxinfoinvestmentgroup.com" />

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Stylesheets -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="FX Capital - Investment Company" />
<meta property="og:url" content="PAGE_URL" />
<meta property="og:site_name" content="SITE_NAME" />
<!-- For the og:image content, replace the # with a link of an image -->
<meta property="og:image" content="#" />
<meta property="og:description" content="FX Capital - Investment Company" />

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Add site Favicon -->
<link rel="shortcut icon" href="{{ asset('images/logos/logo.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('images/logos/logo.png') }}" type="image/x-icon">
<meta name="msapplication-TileImage" content="{{ asset('images/logos/logo.png') }}" />
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- Structured Data  -->
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "name": "Replace_with_your_site_title",
  "url": "Replace_with_your_site_URL"
}
</script>
<script src="//code.tidio.co/ecio1gjafbn7hojxuahycw2sttftj6uf.js" async></script>
@stack('assets')
<style>
    .btn-style-one{
	position: relative;
	display: inline-block;
	font-size: 16px;
	line-height: 1;
	color: #ffffff;
	padding: 20px 30px;
	font-weight: 600;
	overflow: hidden;
	border-radius:15px!important;
	background-color:  #004274;
	font-family: 'Work Sans', sans-serif;
}

.btn-logo {
    background-color: #02CDF7;
}

/*.banner-section {*/
/*    width:100vw;*/
/*    height:100vh;*/
/*    padding-top:4%;*/
/*}*/

/* The hero image */
.hero-image {
  /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://fxcapitalgrowthinvestments.com/images/main-slider/intro-1.jpg");

  /* Set a specific height */
  height: 100%;
  width:100%;

  /* Position and center the image to scale nicely on all screens */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  overflow: hidden;
}

/* Place text in the middle of the image */
.hero-text {
  text-align: left;
  display: flex;
  justify-content: center;
  align-items:center;
}

</style>
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Main Header-->
    <header class="main-header">
    	
			<!-- Header Top -->
	<div class="header-top">
		<div class="auto-container">
			<div class="inner-container clearfix">
				<x-trading-view-widget></x-trading-view-widget>
			</div>
		</div>
	</div>

		
    	<!-- Header Upper -->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="inner-container clearfix">
                	<div class="pull-left logo-box" style="padding-left:3%;">
                    	<div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('images/logos/logo.png') }}" alt="" width="100px" height="80px"/></a></div>
                    </div>
					
                   	<div class="nav-outer pull-left clearfix pl-3">
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class="current"><a href="{{ route('index') }}">Home</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">Contact</a></li>
									<li><a href="{{ route('login') }}">Login</a></li>
									<li><a href="{{ route('register') }}">Register</a></li>
								</ul>
							</div>
							
						</nav>
						
					</div>
					
					<!-- Outer Box -->
					<div class="outer-box">
						<!-- Search Btn -->
						<div style="width: 45%; padding-right:7%;">
						    <div id="google_translate_element"></div>
						</div>
						<!-- Mobile Navigation Toggler -->
                        <!--<div class="mobile-nav-toggler"><span class="icon ti-menu"></span></div>-->
					</div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon lnr lnr-cross"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ route('index') }}"><img src="images/logos/logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
        <!-- End Mobile Menu -->
    </header>
    <!--End Main Header -->
	
	@yield('content')
	
	<!-- Main Footer -->
    <footer class="main-footer" style="background-color: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), #02CDF7; color: #fff; padding: inherit 4%;">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-6 col-12">
						<div class="row clearfix">
						
                        	<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12 mb-2">
                                <div class="footer-widget logo-widget">
									<div class="logo">
										<a href="{{ route('index') }}"><img src="{{ asset('images/logos/logo.png') }}" alt="" width="25%" height="25%"/></a>
									</div>
									<div class="call">
										Call us directly
										<a class="phone" href="tel:+19164609410">+1 916-460-9410</a>
										<a class="email" href="mailto:suppport@fxinfoinvestment.com">suppport@fxinfoinvestment.com</a>
									</div>
								</div>
							</div>
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h5>Company</h5>
									<ul class="list-link" style="color: #fff; padding-left:3%;">
										<li><a href="">About Us</a></li>
										<li><a href="">Team</a></li>
										<li><a href="">Careers</a></li>
										<li><a href="">Investors</a></li>
										<li><a href="">Contact Us</a></li>
										<li><a href="">Offices</a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-6 col-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h5>Quick Links</h5>
									<ul class="list-link" style="color: #fff; padding-left:3%;">
										<li><a href="">FAQS</a></li>
										<li><a href="">Support</a></li>
										<li><a href="">Sitemap</a></li>
										<li><a href="">Community</a></li>
									</ul>
								</div>
							</div>
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget" style=" padding-left:3%;">
									<h5>Our Newsletter</h5>
									<div class="text">Subscribe to our newsletter and we will inform you about latest updates and offers</div>
									<!-- Newsletter Form -->
									<div class="newsletter-form">
										<form method="post" action="contact.html">
											<div class="form-group">
												<input type="email" name="email" value="" placeholder="Email Address..." required>
												<button type="submit" class="theme-btn icofont-arrow-right"></button>
											</div>
										</form>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="auto-container">
					<div class="bottom-inner">
						<div class="row clearfix">
							
							<div class="col-lg-8 col-md-12 col-sm-12">
								<div class="copyright">Copyright ©<script async="" src="https://www.google-analytics.com/analytics.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | Fxinfoinvestment</div>
							</div>
							
							<div class="col-lg-4 col-md-12 col-sm-12">
								<ul class="social-nav">
									<li><a href="https://twitter.com/" class="icofont-twitter"></a></li>
									<li><a href="http://facebook.com/" class="icofont-facebook"></a></li>
									<li><a href="https://www.instagram.com/" class="icofont-instagram"></a></li>
									<li><a href="https://rss.com/" class="icofont-rss"></a></li>
									<li><a href="https://www.youtube.com/" class="icofont-play-alt-1"></a></li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>	
			</div>
			
		</div>
	</footer>
	
</div>
<!--End pagewrapper-->

<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="icofont-brand-nexus"></span></button>
	<button class="close-search"><span class="icofont-arrow-up"></span></button>
	<form method="post" action="blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!-- Scroll To Top -->
<!--<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>-->

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/owl.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/parallax.min.js') }}"></script>
<script src="{{ asset('js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>