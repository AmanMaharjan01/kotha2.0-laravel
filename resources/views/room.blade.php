@extends('template')

@section('content')

	<!-- Home -->
	<div class="container" style="height: 250px;">
		
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
									<option>5</option>
								</select>
							</div>
							<div><button class="search_bar_button"><i class="fas fa-search"></i> Find</button></div>
						</form>
						<div></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Rooms -->
<div class="rooms">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center magic_up">
						<div class="section_title"><h2>Searched result</h2></div>
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


@endsection