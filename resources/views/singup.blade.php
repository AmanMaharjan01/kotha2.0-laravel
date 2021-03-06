<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <title>Sign Up</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Cinzel&display=swap');
        body
        {   
            padding: 0px;
            background-image: url(img/7.jpg);
            background-size: cover;
            
        }     
      .card
    {
      position: absolute;
      top: 37%;
      left: 50%;
      transform: translate(-50%,-50%);
      width: 670px;
      height: 480px;  
    }
    .log
    {
           font-family: 'Roboto',sans-serif;     
           font-size: 15px;
           text-shadow: 3px;
           color: black;
    }
      .ns
      {
        font-size: 14px;
        margin-left: 10px;
        color: black;
        text-align: center;
      }
      form
      {
        margin-top: 40px;
      }
      .row button
      {
        width: 24rem;
      }
        .word
        {
            font-style: bold;
            font-family: 'Roboto',sans-serif; 

        }
        .head
        {
            font-size: 150px;
            font-weight: 600;
            color: #fff;
            font-family: 'Cinzel', serif;
        }
        p
        {
           color: white;
           font-size: 26px;
           font-weight: 600;
           font-family: 'Poppins', sans-serif;
        }
        #heading
        { 
            background-color: black;
            width: 800px;
            height: 568px;
            position: absolute;
            top: 12%;
            left: 13%;
            text-align: center;
            opacity: .6;
        }
        #logh
        {
            color: #5a2360;
            font-family: 'Cinzel', serif;
            text-align: center;
        }
        .row button
        {
            width: 35rem;
            height: 3.4rem;
            font-size: 1.1rem;
        }
        .row .btn
        {
          background-color: #5a2360;
          color: white;
        }
    </style>
</head>
<body>      
   <div class="card" style="width: 38rem;">   
    <div class="card-body" style="background-color: white;">
        <p id="logh">Join <span style="font-size: 30px;">K</span>OTHA</p>
        <hr>
     <form>
            <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="Name">Full Name:</label>
            <div class="col-sm-9" id="Name">
            <input type="text" class="form-control" placeholder="Enter Your Name">
            </div>
            </div>
            <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="Email">Email Address:</label>
            <div class="col-sm-9" id="Email">
            <input type="Email" class="form-control" placeholder="Enter Email Address">
            </div>
            </div>
            <div class="form-group row">
            <label class="col-sm-3" for="Address">Address</label>
            <div class="col-sm-9" id="cpw">
            <select id="a" class="form-control">
              <option value="" disabled selected>Choose location..</option>
              <option>Kathmandu</option>
              <option>Lalitpur</option>
              <option>Bhaktapur</option>
              <option>Biratnagar</option>
              <option>Dharan</option>
              <option>Pokhara</option>
              <option>Butwal</option>
              <option>Other</option>
            </select>
            </div>          
            </div> 
            <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="Phone">Contact No:</label>
            <div class="col-sm-9" id="Phone">
            <input type="text" class="form-control" placeholder="Enter Contact No">
            </div>
            </div>
            <div class="form-group row">
            <label class="col-sm-3" for="sex">Sex</label>
            <div class="col-sm-3" id="cpw">
            <select id="a" class="form-control">
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
            </div>          
            </div>
            <div class="form-group row">
            <label class="col-sm-3" for="pw">Password</label>
            <div class="col-sm-9" id="pw">
            <input type="Password" id="a" class="form-control" name="Password" placeholder="Password">
            </div>
            </div>
            <div class="form-group row">
            <label class="col-sm-3" for="cpw">Confirm Password</label>
            <div class="col-sm-9" id="cpw">
            <input type="Password" id="a" class="form-control" name="CPassword" placeholder="Confirm Password">
            </div>          
            </div>
            <br>
            <div class="row">
            <div class="col-sm-8">
                     <a href="home.html"><button type="submit" class="btn">Sign Up</button></a>
            </div>
            </div>
            <br>           
            <div class="row">
              <label class="ns"> By clicking “Sign up for Kotha”, you agree to our Terms of Service and Privacy Statement. We’ll occasionally send you account related emails.</label>
            </div>
    </form>
    </div>
</div>






<!--- script part--->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!---End script--->
</body>
</html>