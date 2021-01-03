<?php
session_start();
error_reporting(1);
include_once('inc/db-con.php');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="google-site-verification" content="oxQ9sYnWMfM4spiWUA9gHZw3rndEOoOQDIZABr8No_E" />
	<title>UKG One Way Cab | Taxi One Way | One Way Car Rentals India | UKG Tours & Travel Enterprises</title>
	<meta name="description" content="India's Leading One Way Inter-City Cab Service provider. Why pay for return journey, if you are traveling one-way.">
	<meta name="keywords" content="UKG Cab, One Way Cab, One Way Taxi Service , One Way Car Rental, Car Rental One Way, One Side Car Hire in India, Taxi One Way, Book One Way Car on Rent, One Way Car Rental, India One Way Taxi Service, One Way Taxi Hire in India, Taxi Booking One Way" />
	<meta name="author" content="UKG Tours & Travels">
	<link rel="stylesheet" href="css/theme-new.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<!-- add custom css -->
	<link rel="stylesheet" href="css/whatsapp.css" />
	<link rel="stylesheet" href="css/topbutton.css" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <!-- //add custom css -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
  
<body class="home">
		
	<!-- Header -->
	   <?php include_once('inc/header.php'); ?>
	<!-- //Header -->
	
	<!-- Main -->
	<main class="main" role="main">
		
			<!-- Intro -->
		<div class="intro">
			<div class="wrap">
				<div class="textwidget">
					<h1 class="wow fadeInDown">Need a ride?</h1>
					<h2 class="wow fadeInUp">You've come to the right place.</h2>
					<div class="actions">
						<a href="index.php" title="One Way Taxi" class="btn ">One Way</a>
						<a href="outstation.php" title="Outstation Taxi" class="btn dkactive">Outstation</a>
						<a href="#booking" title="Local Taxi" class="btn">Local</a>
					</div>  
				</div>
			</div>
		</div>
		<!-- //Intro -->
		
			<!-- Search -->
		<div class="advanced-search color" id="booking">
			<div class="wrap">
				<form role="form" action="results.php" method="post">
					<!-- Row -->
					<div class="f-row">
						<div class="form-group datepicker one-fourth">
							<label for="dep-date">Departure date and time</label>
							<input type="text" name="pick_time" id="dep-date" placeholder="yyyy/mm/dd hh:mm" required/>
						</div>
						<div class="form-group datepicker one-fourth">
							<label for="ret-date">Return date and time</label>
							<input type="text" name="return_time" id="ret-date" placeholder="yyyy/mm/dd hh:mm" required/>
						</div>
						<div class="form-group select one-fourth">
							<label>Pick up location</label>
							<select id="pickloc" name="pick_city" onchange="showDropOff(this.value);">
								<option value="0">Select Pickup Location</option>
								<!-- <option value="ahmedabad airport">Ahmedabad Airport</option>
								<option value="ahmedabad city">Ahmedabad City</option>
								<option value="ahmednagar">Ahmednagar</option>
								<option value="anand">Anand</option>
								<option value="ankleshwar">Ankleshwar</option>
								<option value="aurangabad">Aurangabad</option>
								<option value="aamby valley">Aamby valley</option>
								<option value="adlabs imagica">Adlabs Imagica</option>
								<option value="bharuch">Bharuch</option>
								<option value="bardoli">Bardoli</option>
								<option value="boisar">Boisar</option> -->
								<option value="dahanu">Dahanu</option>
								<option value="daman">Daman</option>
								<option value="della resort">Della Resort</option>
								<option value="deolali">Deolali</option>
								<option value="dahej">Dahej</option>
								<option value="dhule">Dhule</option>
								<option value="gandhidham">Gandhidham</option>
								<option value="goa">Goa</option>
								<option value="jalna">Jalna </option>							
                                <option value="jalgaon">Jalgaon</option>
								<option value="karad">Karad</option>
								<option value="kolhapur">Kolhapur</option>
								<option value="kalyan">Kalyan</option>
								<option value="lavasa">Lavasa</option>
								<option value="lonavla">Lonavla</option>
								<option value="mahableshwar">Mahableshwar</option>
								<option value="matheran">Matheran</option>
								<option value="malegaon">Malegaon</option>
								<option value="mumbai airport">Mumbai Airport</option>
								<option value="mumbai city">Mumbai City</option>
								<option value="navi mumbai">Navi Mumbai</option>
								<option value="nadiad">Nadiad</option>
								<option value="nashik">Nashik</option>
								<option value="navsari">Navsari</option>
								<option value="pune">Pune</option>
								<option value="palghar">Palghar</option>
								<option value="panchgani">Panchgani</option>
								<option value="rajkot">Rajkot</option>
								<option value="shirdi">Shirdi</option>
								<option value="surat">Surat</option>
								<option value="satara">Satara</option>
								<option value="silvassa">Silvassa</option>
								<option value="thane">Thane</option>
								<option value="trimbakeshwar ">Trimbakeshwar </option>
								<option value="udaipur">udaipur</option>
								<option value="vadodara">Vadodara</option>
								<option value="vapi">Vapi</option>
								<option value="vallabh vidyanagar anand">V V Nagar Anand</option>
							</select>
						</div>
						
						<div class="form-group select one-fourth">
							<label>Drop off location</label>
							<div id="divDropOff">
							<select id="droploc" name="drop_city">
							   	<option value="0">Select Drop Location</option>
								<option value="pune">Pune</option>
								<option value="vadodara">Vadodara</option>
								<option value="ahmedabad">Ahmedabad</option>
								<option value="mumbai">Mumbai</option>
							</select>
							</div>
						</div>
					</div>
					<!-- //Row -->
					
					<!-- Row -->
					<div class="f-row">
					</div>
					<!-- //Row -->
					
					<!-- Row -->
					<div class="f-row">
						<div class="form-group spinner">
							<label for="people">How many people <small>(including children)</small>?</label>
							<input type="number" id="people" min="1"  />
						</div>
						
						<div class="form-group right">
							<button type="submit" id="bookoneway" class="btn large">Book Now</button>
						</div>
					</div>
					<!--// Row -->
					
				</form>
			</div>
		</div>
		<!-- //Search -->
			<!-- About Us -->
		<div class="partners grey">
			<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="full-width content textongrey">
					<h2 style="text-align: center; font-size: 36px; padding-top: 32px;color:#0C18A6; text-shadow: 2px 2px;">WELCOME TO UKG TOURS & TRAVELS</h2>
					<p class="lead">I travelled a lot before starting UKG and today also travel to expand my business and also with my family once a while as family trip.. So I being a traveller also experience the same thing which other would have. I also feel that travel should be comfortable and affordable at the same.</p>
					<p class="lead">Travel Industry is evolving hasty these days. A good traveler has no fixed plans and is not intent on arriving. Till now, one had to pay a two-side fare for the ride, which included the cost of travelling to the destination and estimated cost of returning to the same place, making it twice as expensive.</p>
				</div>
				<!--- //Content -->
			</div>
		</div>
		</div>
		<!--//About Us -->
		<!-- Testimonials -->
		<div class="testimonials center black" style="padding:155px 0 70px">
			<div class="wrap">
				<h6 class="wow fadeInDown">Wow, UKG Tours & Travels is outstanding!</h6>
				<p class="wow fadeInUp"></p>
				<p class="meta wow fadeInUp" style="text-align:center;">UKG Tours&Travels Team</p>
			</div>
		</div>
		<!-- //Testimonials -->
		
		
		
		<div class="partners white center">
			<div class="wrap">
				<h2 class="wow fadeIn" style="color:#0C18A6; text-shadow: 2px 2px;">One Way Taxi Services</h2>
				
				
				  <div class="one-third">
				     <p style="text-align:center;font-weight:bold;">
					    <a href="mumbai-airport-to-imagica-taxi">
						   Mumbai Airport To Imagica Cab
						</a>
					</p>
                    <p style="text-align:center;font-weight:bold;">
					    <a href="mumbai-airport-to-lonavala-cab-taxi">
						   Mumbai Airport To Lonavla Cab
						</a>
					</p>
                    <p style="text-align:center;font-weight:bold;">
					   <a href="pune-to-mumbai-airport-taxi">
					      Pune to Mumbai Airport Cab
					   </a>
					</p>
                    <p style="text-align:center;font-weight:bold;">
					    <a href="mumbai-airport-to-pune-taxi">
						  Mumbai Airport To Pune Cab
						</a>
					</p>
                    <p style="text-align:center;font-weight:bold;">
					    <a href="mumbai-to-kolhapur-cabs-taxi">
						   Mumbai to Kolhapur Cabs Taxi
						</a>
					</p>
                    <p style="text-align:center;font-weight:bold;">
					    <a href="mumbai-airport-to-solapur-cabs-bom-ac-taxi">
						   Mumbai Airport to Solapur Cabs
						</a>
					</p>
                  </div>
				  
				  <div class="one-third">
                    <p style="text-align:center;font-weight:bold;">
					    <a href="nashik-to-mumbai-car-rental-taxi">
						  Nashik to Mumbai Airport Cab
						</a>  
					</p>
					<p style="text-align:center;font-weight:bold;">
					   <a href="mumbai-airport-to-nasik-taxi">
					      Mumbai Airport to Nasik Cab
					   </a>	  
					</p>
                    <p style="text-align:center;font-weight:bold;">
					    <a href="mumbai-to-shirdi-one-way-cabs-taxi">
						   Mumbai to Shirdi Taxi One Way
						</a>   
					</p>
                    <p style="text-align:center;font-weight:bold;">
					   <a href="shirdi-to-mumbai-airport-cabs-taxi">  
						 Shirdi to Mumbai Airport Cabs
					   </a>	 
					</p>
                    <p style="text-align:center;font-weight:bold;">
					   <a href="mumbai-to-surat-cabs-taxi">
					     Mumbai to Surat One Way Cab
					   </a>	  
					</p>
					<p style="text-align:center;font-weight:bold;">
					   <a href="mumbai-to-goa-cabs-taxi">
					     Mumbai to Goa Cab Services
					   </a>	  
					</p>
                  </div>
				 
				  <div class="one-third">
                    <p style="text-align:center;font-weight:bold;">
					  <a href="surat-to-mumbai-taxi">
					    Surat to Mumbai One Way Cab
					  </a>  
					</p>
                    <p style="text-align:center;font-weight:bold;">
					  <a href="thane-to-pune-oneside-taxi">
					     Thane to Pune oneside Taxi
					  </a>	 
					</p>
                    <p style="text-align:center;font-weight:bold;">
					   <a href="kalyan-to-shirdi-cab-taxi">
					      Kalyan To Shirdi Cab
					   </a>	  
					</p>
                    <p style="text-align:center;font-weight:bold;">
					  <a href="navi-mumbai-to-shirdi-cab-taxi">
					     Navi Mumbai To Shirdi Cab
					  </a>	 
					</p>
                    <p style="text-align:center;font-weight:bold;">
					  <a href="Mumbai-airport-to-shirdi-car-rentals-taxi">
					    Mumbai Airport To Shirdi Car Rentals
					  </a>	
					</p>
					<p style="text-align:center;font-weight:bold;">
					  <a href="mumbai-to-Varanasi-taxi">
					    Mumbai to varanasi One Way cab
					  </a>	
					</p>
                  </div>
				
		   </div>
		</div>
		<!-- Call to action -->
		<div class="color cta">
			<div class="wrap">
				<p class="wow fadeInLeft">India's No.1 Largest Intercity and Local Cab Services</p>
				<a href="tel:+919820439169" class="btn huge black right wow fadeInRight" style="color: #fff;">Call Now</a>
			</div>
		</div>
		<!-- //Call to action -->
	</main>
	<!-- //Main -->
	<!-- Footer -->
	   <?php include_once('inc/footer.php'); ?>
	<!-- //Footer -->
	
	<!-- Preloader -->
	<!--<div class="preloader">
		<div id="followingBallsG">
			<div id="followingBallsG_1" class="followingBallsG"></div>
			<div id="followingBallsG_2" class="followingBallsG"></div>
			<div id="followingBallsG_3" class="followingBallsG"></div>
			<div id="followingBallsG_4" class="followingBallsG"></div>
		</div>
	</div>-->
	<!-- //Preloader -->
	 <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
	<script src="js/jquery.uniform.min.js"></script>
	<script src="js/jquery.datetimepicker.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/search.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/topbutton.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
		  $('#bookoneway').click(function() { 		
			if($('#pickloc').val()==0){
				alert('Enter PickUp Location');
				return false;	  	
			} 
			else if($('#droploc').val()==0){
				alert('Enter Drop Location');
				return false;
			}
			else {
				 return true;
			 }
		  });
		});
	</script>
	
	<script src="js/location.js"></script>
   
  </body>
</html>