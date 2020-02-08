<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<title>Log In</title>

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Poppins&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Cinzel&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
        body
        {   
            padding: 0px;
            background-image: url(img/7.jpg);
            background-size: cover;
            
        }     
    	.card
		{
			position: absolute;
			top: 50%;
			left: 75%;
			transform: translate(-50%,-50%);
			width: 670px;
			height: 90%;	
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
            color: #cda5e9;
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
        .row .nav-link
        {
            background-color: #5a2360;
            color: white;
        }
        @media screen and (max-width: 500px)
        {
            .card .card-body
            {
                width: 90%;
                padding: 0;
            }
        }
        #container
        {
            width: 1100px;
            height: 580px;
            position: absolute;
            top: 10%;
            left: 9.7%;
            background-color: #5a2360;
            border-radius: 400px 0px 0px 400px;
        }
        .head
        {
            color: white;
            position: absolute;
            top: 15%;
            left: 12%;
            font-size: 100px;
        }
        .hk
        {
           font-size: 180px;
        }
        .hp
        {
           color: white;
           font-size: 22px;
           position: absolute;
           top: 53%;
           left: 20%;
        }
        .line
        {
        	font-size: 17px;
        	font-family: 'Montserrat', sans-serif; 
        	position: absolute;
        	top: 65%;
        	left: 28%;
        }
    </style>
</head>
<body>	   
     <div id="container">
        <img src="img/logo3.png" width="330" height="290" style="position: absolute; top: 18%;left: 15%;">
	 <div class="card" style="width: 27rem;">		
	  <div class="card-body" style="background-color: white;">
        <p id="logh"><span style="font-size: 40px; ">K</span>OTHA</p>
        <hr>
	   <form>
            <div class="form-group row">
            <div class="col-sm-12" id="Email">
            <span class="log" style="color: #5f2c7e">Email</span>
            <input type="email" class="form-control" placeholder="Enter Email Address">
            </div>
            </div>
            <div class="form-group row">        
            <div class="col-sm-12" id="Password">
            <span class="log" style="color: #5f2c7e;">Password</span>
            <input type="password" class="form-control" placeholder="Enter Password">
            </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                     <input type="checkbox" class="radioBtn"> Remember Password
                </div>
            </div>
            <br>
            <div class="row">
            <div class="col-sm-8">
                     <a href="home.html"><button class="nav-link">Log In</button></a>
            </div>
            </div>
            <br>           
            <div class="row">
            	<label class="ns"> Not signed In yet ? Click here to signup, <a href="/signup" style="color: #5f2c7e">Sign Up</a></label>
            </div>
    </form>
    </div>
    </div>
  </div>





<!--- script part--->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!---End script--->
</body>
</html>