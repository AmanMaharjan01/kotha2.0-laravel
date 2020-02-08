@extends('template')


@section('content')

<!-- Home -->
	<div class="container" style="height: 250px;">
		
	</div>

<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				
				<!-- Contact Content -->
				<div class="col-lg-4">
					<div class="contact_content">
						<div class="section_title_container">
							<div class="section_title"><h3>Say Hello</h3></div>
						</div>
						<div class="contact_text">
							<p>Praesent fermentum ligula in dui imper diet, vel tempus nulla ultricies. Phasellus at commodo ligula.  Praesent fermentum ligula in dui imper diet, vel tempus nulla ultricies. Phasellus at commodo.</p>
						</div>
						<div class="contact_info">
							<ul>
								<li>Address: <span>Kathmandu</span></li>
								<li>Phone: <span>+977 9860432244</span></li>
								<li>Email: <span>kotha@gmail.com</span></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-8">
					<div class="contact_form_container">
	                <form action="/action_page.php">
	                <div class="form-group">
					<input type="text" class="form-control" placeholder="Your Name" name="name">
					</div>
					<div class="form-group">
					<input type="email" class="form-control" placeholder="Your Email" name="email">
					</div>
					<div class="form-group">
					<input type="text" class="form-control" placeholder="Your subject" name="subject">
					</div>
					 <div class="form-group">
					<label for="comment">Message:</label>
					<textarea class="form-control" rows="5" id="comment"></textarea>
					</div> 
			        <button type="submit" class="btn btn-default">Submit</button>
					</form> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>


@endsection