<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Samira hotel template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="/styles/responsive.css">
<script type="text/javascript">
   function abc() {
    var district = document.getElementById("district");
    var selectedValue = district.options[district.selectedIndex].value;
    document.getElementById('detloc').innerHTML='Detailed Location of '+ selectedValue;
   }
  </script>
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_content">

			<!-- Logo -->
			<div class="logo_container d-flex flex-column align-items-center justify-content-center">
				<div class="logo">
					<a href="#" class="text-center">
						<div class="logo_title">KOTHA</div><br>
						<div class="logo_subtitle">A room finder</div>
					</a>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_inner d-flex flex-row align-items-center justify-content-start">
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li class="{{Request::is('/') ? 'active' : ' ' }}"><a href="/"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>home</span></div></a></li>
									<li class="{{Request::is('aboutus') ? 'active' : ' ' }}"><a href="/aboutus"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>about us</span></div></a></li>
									<li class="{{Request::is('contact') ? 'active' : ' ' }}"><a href="/contact"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>contact</span></div></a></li>
									<li class="{{Request::is('create') ? 'active' : ' ' }}"><a href="/create"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Create Ad</span></div></a></li>
								</ul>
							</nav>
							<a href="/signin" class="button_container header_button ml-auto"><div class="button text-center"><span>Sign In</span></div></a>
							<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="background_image" style="background-image:url(images/menu.jpg)"></div>
		<div class="menu_content d-flex flex-column align-items-center justify-content-center">
			<ul class="menu_nav_list text-center">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<div class="menu_review"><a href="#">Add your review</a></div>
		</div>
	</div>

	<!-- Menu -->
@yield('content')


<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Logo -->
				<div class="col-lg-3 footer_col">
					<div class="footer_logo_container">
						<div class="footer_logo">
							<a href="#" class="text-center">
								<div class="footer_logo_title">KOTHA</div><br>
								<div class="footer_logo_subtitle">A Room Finder</div>
							</a>
						</div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">SmartTech</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
					</div>
				</div>

				<!-- Footer Menu -->
				<div class="col-lg-5 footer_col">
					<div class="footer_menu">
						<ul class="d-flex flex-row align-items-start justify-content-start">
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About us</a></li>
							<li><a href="rooms.html">Rooms</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
						<div class="footer_menu_text">
							<p>Praesent fermentum ligula in dui imperdiet, vel tempus nulla ultricies. Phasellus at commodo ligula.</p>
						</div>
					</div>
				</div>

				<!-- Footer Contact -->
				<div class="col-lg-4 footer_col">
					<div class="footer_contact clearfix">
						<div class="footer_contact_content float-lg-right">
							<ul>
								<li>Address: <span>Kathmandu</span></li>
								<li>Phone: <span>+977 9860432244</span></li>
								<li>Email: <span>kotha@gmail.com</span></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>