<?php
	include "connection.php";
	$ph = $_POST["phone"];
	$pass = $_POST["password"];
	$sql = "SELECT phone,pass FROM login;";
	$result = mysqli_query($link,$sql);
	if(mysqli_num_rows($result)>0)
	{
		$temp=false;
		while ($row = mysqli_fetch_assoc($result)) 
		{
			if($row["phone"] == $ph && $row["pass"] == $pass)
			{
				$temp = true;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dr. Arth's Dental clinic</title>
  <meta charset="utf-8">



  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script type="text/javascript">
    function phonevalidate(pnum)
    {
      alert("yes called");
      // var ph = document.getElementById('phone').value;
      if(pnum.length() != 10)
      {
        alert("please enter valid phone number");
      } 
    }
  </script>


  


  

  <!-- font-awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font_awesome/font-awesome.css">

 

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



  <link rel="stylesheet" type="text/css" href="CSS/main.css">



</script>
</head>
<body style="overflow-x: hidden;width: 100%;height: 100%;padding: 0;">


<div class="container-fluid home" style="padding-right: 0;padding-left: 0;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    

    <!--navbar-->
   <nav class="navbar navbar-light main-nav navbar-expand-sm" style="z-index: 1000;position: absolute;width: 100%;margin-top: 20px;margin-left: 20px;margin-right: 20px;padding-right: 70px;">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color: black;">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color: white;">
          <img src="Images\logo\logo.jpg" id="logo" alt="logo" class="img-responsive" style="width: 100px;">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active ml-lg-3 drop"><a href="#" id="other" style="color: white;"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li class="ml-lg-7 drop"><a href="#about-us" style="color: white;"><span class="glyphicon glyphicon-user"></span> About Us</a></li>
        <li class="dropdown ml-lg-3 drop">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;"><span class="glyphicon glyphicon-briefcase"></span> Services</a>
          <ul class="dropdown-menu">
            <li class="ml-lg-7"><a href="service_1_tooth_implant.html" style="color: white;">Tooth Implant</a></li>
            <li class="ml-lg-7"><a href="service_2_tooth_filling.html" style="color: white;">Tooth Filling</a></li>
            <li class="ml-lg-7"><a href="service_3_tooth_cleaning.html" style="color: white;">Tooth Cleaning</a></li>
            <li class="ml-lg-7"><a href="service_4_aesthetic_filling.html" style="color: white;">Aesthetic Filling</a></li>
            <li class="ml-lg-7"><a href="service_5_crown.html" style="color: white;">Crowns</a></li>
            <li class="ml-lg-7"><a href="service_6_denture.html" style="color: white;">Dentures</a></li>
            <li class="ml-lg-7"><a href="service_7_painless.html" style="color: white;">Painless Tooth Removal
            </a></li>
            <li class="ml-lg-7"><a href="service_8_pediatric_dentistry.html" style="color: white;">Pediatric Dentistry</a></li>
            <li class="ml-lg-7"><a href="service_9_orthodontic_treatement.html" style="color: white;">Orthodontic Treatement
            </a></li>
          </ul>
        </li>
        <li class="ml-lg-7 drop"><a href="#" style="color: white;"><span class="glyphicon glyphicon-camera  
          "></span> Gallery</a></li>
        <li class="ml-lg-7 drop"><a href="#" style="color: white;"><span class="glyphicon glyphicon-comment"></span> Testimonials</a></li>
        <li class="ml-lg-7 drop"><a href="#" style="color: white;"><span class="glyphicon glyphicon-phone"></span> Contact US</a></li>
        <li class="ml-lg-7">
          <div class="btn-group btn-group-lg">
          <button type="button" class="btn btn-success" onClick="document.location.href='index.html.'">
          	<span class="glyphicon glyphicon-log-in"></span>&nbsp;Logout</button>
          </div>
        </li>
      </ul>
    </div>
    </nav>

   

<!-- Indicators -->

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Images/slider/1.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">

          <!-- Book Appointment -->
        <span style="z-index: 1000;">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookappointment">
            Book Appointment
          </button>
        </span>

          <p>Your care our responsibility</p>

          
        </div>
      </div>

      <div class="item">
        <img src="Images/slider/2.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <span style="z-index: 1000;">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookappointment">
              Book Appointment
            </button>
          </span>
          <p>Your care our responsibility</p>
        </div>
      </div>
    
      <div class="item">
        <img src="Images/slider/3.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <span style="z-index: 1000;">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookappointment">
              Book Appointment
            </button>
          </span>
          <p>Your care our responsibility</p>
        </div>
      </div>
  
    </div>


    


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> 
</div>


<!--Login popup-->
<div class="modal fade" id="login" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body" style="z-index: 1000px;">
        <form name="loginform" action="phplogin.php" method="post">
          <div class="form-group">
            <label for="phone">Phone no.</label>
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter phone no." onblur="phonevalidate(this)">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required>
            <a href="#"><p class="form-control-note">Forgot password?</p></a>
          </div>
          <input type="submit" class="btn btn-success" value="Login">
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="close2">Close</button>
      </div>
    </div>
  </div>
</div>


<!--signup popup-->
<div class="modal fade" id="signup" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Sign up</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body" style="z-index: 1000px;">
        <form name="signupform" action="phpsignup.php" method="post">
          <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone no.: </label>
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" onblur="phonevalidate(this);">
          </div>
          <div class="form-group">
            <label for="city">City: </label>
            <input type="text" id="city" name="city" class="form-control" placeholder="Enter your city" required>
          </div>
          <div class="form-group">
            <label for="pass1">Password</label>
            <input type="password" id="pass1" name="pass1" class="form-control" placeholder="create a password" onblur="passvalidate(this);">
            <p class="form-control-note">length of password must be 6</p>
          </div>
          <div class="form-group">
            <label for="pass2">re-enter Password</label>
            <input type="password" id="pass2" class="form-control" placeholder="re-enter password" onblur="passvalidate1(this,pass1);">
          </div>
          <input type="submit" class="btn btn-success" value="Signup">
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" name="close3">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Book Appointment -->
<div class="modal fade" id="bookappointment" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Book Appoitment Here!!!</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body" style="z-index: 1000px;">
        <form name="appointment" action="php1.php" method="post">
          <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone no.: </label>
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" onblur="phonevalidate(this)">
          </div>
          <div class="form-group">
            <label for="treatment">Treatment :  </label>&nbsp;&nbsp;&nbsp;
              <select name="treatment" id="treatment">
                <option value="Tooth Implant">Tooth Implant</option>
                <option value="Tooth Filling">Tooth Filling</option>
                <option value="Tooth Cleaning">Tooth Cleaning</option>
                <option value="Aesthetic Filling">Aesthetic Filling</option>
                <option value="Crowns">Crowns</option>
                <option value="Dentures">Dentures</option>
                <option value="Painless Tooth Removal">Painless Tooth Removal</option>
                <option value="Pediatric Dentistry">Pediatric Dentistry</option>
                <option value="Orthodontic Treatement">Orthodontic Treatement</option>
              </select>
          </div>
          <div class="form-group">
            <label for="case">Type of case: </label>
              <div class="form-check">
                <label class="form-check-label" for="radio1">
                  <input type="radio" class="form-check-input" id="radio1" name="typeofcase" checked>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New case
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label" for="radio2">
                  <input type="radio" class="form-check-input" id="radio2" name="typeofcase"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;old case
                </label>
              </div>
          </div>
          <div class="form-group">
            <label for="date">Date </label>
            <input type="date" id="date" name="date" class="form-control" onblur="phonevalidate(this)">
          </div>
          <input type="submit" class="btn btn-primary" value="Submit">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="close1">Close</button>
      </div>
    </div>
  </div>
</div>


<!--About us-->
<div class="container-fluid about-us" style="margin-top: 35px;">
  <center><h1 style=" margin-left: -15px;margin-right: -15px;margin-bottom: 20px;font-family: 'Concert One', cursive;">About us</h1></center>
  <div class="row" style="margin-top: 20px;">
    <div class="col-sm-1" style=""></div>
    <div class="col-sm-3" style=" margin-left: -15px;margin-right: -15px;margin-top: 20px;">
        <img class="img-fluid" src="images1/gaurav.jpg" alt="Chania" width="100%" height="100%"> 
    </div>
    <div class="col-sm-7 ml-3" style="padding-top: 40px;padding-left: 40px;padding-right: 40px;font-family: 'Acme', sans-serif;font-size: 16px;">
        <p>US Dental is a dental clinic centrally located in Paldi area of Ahmedabad, Gujarat in India. Pioneered by American trained & licensed dentists and dental implant 
           s urgeon, this state of the art dental & implant center is equipped to provide US standard of quality dental care to our patients. </p>

        <p>
           The state of the art dental clinic leverages cutting edge dental technologies such as Computer Guided Dental Implant Surgery, Fixed Dentures and Cosmetic dentistry procedures such as Teeth Whitening, fix gummy smiles and teeth straightening using Orthodontal treatments etc. A lot of these treatments are done under sedative agent and local anesthesia thus rendering the dental treatment completely painless. Come and experience Pain-free dentistry with US Dental. 
       </p>
        <p>We have USA Licensed specialist in our team of qualified professionals to render unmatched highest quality of care. Our Dental hospital has received rave reviews on Google, Facebook and other social media sites. We have numerous awards and accolades including “Best Dental Clinic” , "Best Dentist in Ahmedabad" and winning the prestigious “Top Dentist” Award in the USA.
        </p>
          <a href="aboutus.html" class="btn btn-primary" style="font-family: 'Concert One', cursive;">More Details</a>
    </div>
    <div class="col-sm-1" style=""></div>
  </div>
</div>



<!-- Services -->
<div class="col-md-12 services" style="margin-top: 50px; margin-bottom: 100px;">
	<center><h1 style="margin-bottom: 60px;font-family: 'Concert One', cursive;">Services</h1></center>

<div class="card-deck" style="margin-top: 20px;">
	<div class="offset-md-1">
		
	</div>
	  <div class="card">
	    <img class="card-img-top" src="Images/services/tooth_implement.jpg" alt="Card image cap">
	    <div class="card-body">
	      <h3 class="card-title">Tooth Implant</h3>
	      <p class="card-text">A Dental Implant is an artificial tooth root made of titanium which looks like a screw or post and is both strong and light. The implant is surgically inserted into the jaw to support a replacement tooth – dental crown, bridge and removable or fixed dentures.</p>
	    </div>
	    <div class="card-footer">
	      <a href="service_1_tooth_implant.html" class="btn btn-primary" style="font-family: 'Concert One', cursive;">Read more</a>
	    </div>
	  </div>
	  <div class="card">
	    <img class="card-img-top" src="Images/services/tooth_filling.jpg" alt="Card image cap">
	    <div class="card-body">
	      <h3 class="card-title">Tooth Filling</h3>
	      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
	    </div>
	    <div class="card-footer">
	      <a href="service_2_tooth_filling.html" class="btn btn-primary" style="font-family: 'Concert One', cursive;">Read more</a>
	    </div>
	  </div>
	  <div class="card">
	    <img class="card-img-top" src="Images/services/tooth_cleaning.jpg" alt="Card image cap">
	    <div class="card-body">
	      <h3 class="card-title">Tooth Cleaning</h3>
	      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
	    </div>
	    <div class="card-footer">
	      <a href="service_3_tooth_cleaning.html" class="btn btn-primary" style="font-family: 'Concert One', cursive;">Read more</a>
	    </div>
	  </div>
	  <div class="offset-md-1">
	  	
	  </div>
</div>


<div class="card-deck" style="margin-top: 20px;">
	<div class="offset-md-1 offset-sm-1">
		
	</div>
	  <div class="card">
	    <img class="card-img-top" src="Images/services/asthetic_filling.jpg" alt="Card image cap">
	    <div class="card-body">
	      <h3 class="card-title">Aesthetic Filling</h3>
	      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	    </div>
	    <div class="card-footer">
	      <a href="service_4_aesthetic_filling.html" class="btn btn-primary" style="font-family: 'Concert One', cursive;">Read more</a>
	    </div>
	  </div>
	  <div class="card">
	    <img class="card-img-top" src="Images/services/crowns.jpg" alt="Card image cap">
	    <div class="card-body">
	      <h3 class="card-title">Crowns</h3>
	      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
	    </div>
	    <div class="card-footer">
	      <a href="service_5_crown.html" class="btn btn-primary" style="font-family: 'Concert One', cursive;">Read more</a>
	    </div>
	  </div>
	  <div class="card">
	    <img class="card-img-top" src="Images/services/dentures.jpg" alt="Card image cap">
	    <div class="card-body">
	      <h3 class="card-title">Dentures</h3>
	      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
	    </div>
	    <div class="card-footer">
	      <a href="service_6_denture.html" class="btn btn-primary" style="font-family: 'Concert One', cursive;">Read more</a>
	    </div>
	  </div>
	  <div class="offset-md-1 offset-sm-1">
	  	
	  </div>
</div>


<div class="card-deck" style="margin-top: 20px;">
	<div class="offset-md-1 offset-sm-1">
		
	</div>
	  <div class="card">
	    <img class="card-img-top" src="Images/services/teeth_removal.jpg" alt="Card image cap">
	    <div class="card-body">
	      <h3 class="card-title">Painless Tooth Removal</h3>
	      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	    </div>
	    <div class="card-footer">
	      <a href="service_7_painless.html" class="btn btn-primary" style="font-family: 'Concert One', cursive;">Read more</a>
	    </div>
	  </div>
	  <div class="card">
	    <img class="card-img-top" src="Images/services/pediatric_dentist.jpg" alt="Card image cap">
	    <div class="card-body">
	      <h3 class="card-title">Pediatric Dentistry</h3>
	      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
	    </div>
	    <div class="card-footer">
	      <a href="service_8_pediatric_dentistry.html" class="btn btn-primary" style="font-family: 'Concert One', cursive;">Read more</a>
	    </div>
	  </div>
	  <div class="card">
	    <img class="card-img-top" src="Images/services/orthodontic.png" alt="Card image cap">
	    <div class="card-body">
	      <h3 class="card-title">Orthodontic Treatement</h3>
	      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
	    </div>
	    <div class="card-footer">
	      <a href="service_9_orthodontic_treatement.html" class="btn btn-primary" style="font-family: 'Concert One', cursive;">Read more</a>
	    </div>
	  </div>
	  <div class="offset-md-1 offset-sm-1">
	  	
	  </div>
</div>


</div>


<!-- Contact us -->

  <div class="contact-us">
    <div style="text-align:center;font-family: 'Concert One', cursive;">
    	<h2 style="font-family: 'Concert One', cursive;">Contact Us</h2>
    </div>

  <div class="col-md-12 col-sm-12" style="margin-top: 0px;">
    <div class="col-md-12 col-sm-12" style="margin-top: 20px;width: 100%;">
      <center><h3 style="font-family: 'Concert One', cursive;">Location</h3></center>
      <div style="height: 100%;margin-top: 20px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58956.92602726218!2d72.90971443346093!3d22.548868609766032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e4e7efd0c8885%3A0xa9a0b93c0c4b5215!2sAnand%2C+Gujarat!5e0!3m2!1sen!2sin!4v1532786209658" width="100%;" height="350px" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-md-12 col-sm-12">
	    <div class="col-md-6 col-sm-12" style="margin-top: 20px;">
	      <center>
	      	<h3 style="font-family: 'Concert One', cursive;">Feedback</h3></center>

	      	<form action="#" class="" style="">
	            <div class="form-group" style="">
	              <fieldset class="form-group">
	                <label for="first_name">Full Name</label>
	                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full name">
	              </fieldset>
	              <fieldset class="form-group">
	                <label for="email">Email</label>
	                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
	               </fieldset>
	            </div>
	              <div>
	                <label for="comment">Comment:</label>
	                <textarea class="form-control" rows="5" id="comment"></textarea>
	              </div>
	            <button type="submit" class="btn btn-primary">Submit</button>
	          </form>
	      
	          
	    </div>

    <div class="col-md-6 col-sm-3" style="margin-top: 20px;">
      <div class="one-1">
        <center><h3 style="font-family: 'Concert One', cursive;">Timing</h3></center>
        <div style="">
          <div class="days">
            <table class="table">
			    <thead class="thead-light">
			      <tr>
			        <th>Days</th>
			        <th>Morning</th>
			        <th>Afternoon</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td>Monday</td>
			        <td><center>9 to 2</center></td>
			        <td><center>4 to 10</center></td>
			      </tr>
			      <tr>
			        <td colspan="3"><center>TO</center></td>
			      </tr>
			      <tr>
			        <td>Saturday</td>
			        <td><center>9 to 2</center></td>
			        <td><center>Close</center></td>
			      </tr>
			    </tbody>
  			</table>
          </div>
        </div>
      </div>


	  <center>
	  	<div class="two-2 col-md-12 col-sm-9" style="margin-top: 20px;">
	      	<center><h3 style="font-family: 'Concert One', cursive;">Social</h3></center>
	        <div  style="margin-left: 10%;margin-top: 20px;">
	          <i class="fa fa-envelope fa-lg" aria-hidden="true">&nbsp;&nbsp;:-&nbsp;&nbsp;&nbsp;dental@gmail.com</i><br>
	          <i class="fa fa-phone-square fa-lg" aria-hidden="true" style="margin-left: -50px;">&nbsp;&nbsp;:-&nbsp;&nbsp;&nbsp;8238414709</i>
	        </div>
	        <center>
	          <div style="margin-top: 20px;">
	            <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
	            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
	            <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
	            <i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i>
	          </div>
	        </center>
	      </div>
	  </center>
      </div>
    </div>
   </div>
</div>
</div>

</body>
</html>
<?php
			}	
		}
	}
	if($temp == false)
	{
		echo "noooooo";
	}
	else
	{
		echo "<br>no result is fetched";
	}

?>