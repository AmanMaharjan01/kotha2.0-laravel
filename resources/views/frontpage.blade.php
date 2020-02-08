@extends('template')


@section('content')
	
	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<!-- Image credit: https://unsplash.com/@santtd -->
					<div class="background_image" style="background-image:url(images/9.jpg)"></div>
					<div class="home_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_title">Need a Room?<br> Get a Room</div>
										<a href="/rooms" class="button_container home_button"><div class="button text-center"><span>Find Now</span></div></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Search Bar -->

	<div class="search_bar">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="search_bar_container">
						<form action="#" id="search_bar_form" class="search_bar_form d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-between clearfix">
							<div>
								<input class="search_form_select" type="text" name="" placeholder="Enter a place">
							</div>
							<div>
								<select class="search_form_select">
									<option disabled selected>Select Rooms</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div>
							<!-- <div><button class="search_bar_button"><i class="fas fa-search"></i> Find</button></div> -->
							<a href="/rooms"><div class="search_bar_button text-center" style="padding-top: 15px; font-size: 20px;"><i class="fas fa-search"></i> Find </div></a>
							
						</form>
						<div></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Intro Content -->
				<div class="col-lg-5 intro_col">
					<div class="intro_container d-flex flex-column align-items-start justify-content-center magic_up">
						<div class="intro_content">
							<div class="section_title_container">
								<div class="section_title"><h2>Rooms At Affortable Price</h2></div>
							</div>
							<div class="intro_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
							<div class="intro_link"><a href="rooms.html">View Rooms</a></div>
						</div>
					</div>
				</div>

				<!-- Intro Image -->
				<div class="col-lg-7 intro_col">
					<div class="intro_images magic_up">
						<div class="intro_3 intro_img"><img src="images/6.jpg" alt=""></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Big Room -->

	<div class="big_room">
		<div class="container-fluid">
			<div class="row row-xl-eq-height">
				<div class="col-xl-6 order-xl-1 order-2">
					<div class="big_room_slider_container">

						<!-- Big Room SLider -->
						<div class="owl-carousel owl-theme big_room_slider">
							
							<!-- Slide -->
							<div class="owl-item">
								<!-- Image credit: https://unsplash.com/@jbriscoe -->
								<div class="background_image" style="background-image:url(images/6.jpg)"></div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<!-- Image credit: https://unsplash.com/@jbriscoe -->
								<div class="background_image" style="background-image:url(images/img_1.jpg)"></div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<!-- Image credit: https://unsplash.com/@jbriscoe -->
								<div class="background_image" style="background-image:url(images/img_1.jpg)"></div>
							</div>

						</div>
					</div>
				</div>
							
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Room -->

	<div class="rooms">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center magic_up">
						<div class="section_title"><h2>Popular Locations</h2></div>
					</div>
				</div>
			</div>
			<div class="row room_row magic_up">

				<!-- Room -->
				<div class="col-lg-4 room_col">
					<div class="room">
						<div class="room_image"><img src="images/21.jpg" alt="https://unsplash.com/@jonathan_percy"></div>
						<div class="room_content text-center">
							<div class="room_price">From Rs.3000 /month</div>
							<div class="room_title"><a href="rooms.html">Kathmandu</a></div>
							<a href="#" class="button_container room_button"><div class="button text-center"><span>Find Now</span></div></a>
						</div>
					</div>
				</div>
				
				<!-- Room -->
				<div class="col-lg-4 room_col">
					<div class="room">
						<div class="room_image"><img src="images/1.jpg"></div>
						<div class="room_content text-center">
							<div class="room_price">From Rs.2500 /month</div> 
							<div class="room_title"><a href="rooms.html">Pokhara</a></div>
							<a href="#" class="button_container room_button"><div class="button text-center"><span>Find Now</span></div></a>
						</div>
					</div>
				</div>

				<!-- Room -->
				<div class="col-lg-4 room_col">
					<div class="room">
						<div class="room_image"><img src="images/20.jpg" alt="https://unsplash.com/@rhemakallianpur"></div>
						<div class="room_content text-center">
							<div class="room_price">From Rs.2500 /month</div>
							<div class="room_title"><a href="rooms.html">Lalitpur</a></div>
							<a href="#" class="button_container room_button"><div class="button text-center"><span>Find Now</span></div></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>	

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="newsletter_content">
						<div class="newsletter_text">
							<p style="font-size: 30px;">Sign up and we'll send the best deals to you</p>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="newsletter_form_container">
						<form action="#" id="newsletter_form" class="newsletter_form">
							<input type="email" class="newsletter_input" placeholder="Your e-mail" required="required">
							<button class="newsletter_button"><span>Subscribe</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="newsletter_border_container"><div class="container"><div class="row border_row"><div class="col"><div class="newsetter_border"></div></div></div></div></div>
	</div>
@endsection