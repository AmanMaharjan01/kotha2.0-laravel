@extends('template')


@section('content')


<!-- Home -->
	<div class="container" style="height: 250px;">
		
	</div>

	<div class="row">
		<div class="col-md-3">
			
		</div>

		<div class="col-md-6">			
		<form action="/action_page.php">
		<label for="loc">Select Location of Kotha</label>
        <select class="form-control" id="district" name="district" onchange="abc();">
        <option value="Taplejung" >Taplejung</option>
        <option value="Panchthar">Panchthar</option>
        <option value="Illam">Illam</option>
        <option>Default select</option>
        <option>Default select</option>
        <option>Default select</option>
        <option>Default select</option>
        <option>Default select</option>
      </select>
      <br>
      <div class="form-group">
      <label for="detailedLoc" id="detloc">Detailed Location of Taplejung</label>
        <input type="text" class="form-control" placeholder="Enter the detailed Location">
      </div>
      <div class="form-group">
          <label for="rooms">No of Rooms</label>
          <input type="number" class="form-control" placeholder="Enter No of Rooms">
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" class="form-control" placeholder="Enter the price of Kotha">
        </div>
        <div class="form-group">
          <label for="contact">Contact Information</label>
          <input type="text" class="form-control" placeholder="Enter your contact information">
        </div>
        <div class="form-group">
          <label for="desc">Description</label>
          <textarea class="form-control" maxlength="255" placeholder="Describe the Kotha"></textarea>
        </div>
         <div class="form-group">
          <label for="picture">Upload a photo of Kotha</label>
          <input type="file" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-color">Submit</button>
		</form>
		</div>

		<div class="col-md-3">
			
		</div> 		
	</div>

@endsection