<?php
session_start();
error_reporting(1);
include_once('inc/db-con.php');
?>

<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	
	<title>Book Outstation Cabs at Best Fares | Hire Outstation Cabs Online | Outstation Cabs Service at ukgcab.com</title>
	<meta name="keywords" content="Car rentals india, book cabs online, book taxi online, airport taxi india, cabs in india, taxi in india, cabs services in India, taxi services in India, car rental services in india, car rentals, taxi, cabs, hire, rent">
    <meta name="keyphrase" content="low cost car rental, car hire in India,  cab hire, airport car rental, cheap cab for hire, radio taxi cab, radio taxi services" />
    <meta name="description" content="Choose from a range of Outstation AC cabs, fares starting at Rs. 10/km. Affordable one way and round trip packages. Now book online at www.ukgcab.com!">
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="">
	
	<link rel="stylesheet" href="css/theme-new.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/whatsapp.css" />
	<link rel="stylesheet" href="css/topbutton.css" />
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700">
	<link rel="shortcut icon" href="images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    	.main{
    		padding-bottom: 0px;
    		background-color:#ecece1;
    		color:#38424a; 
    	}
    </style>

    
	
  </head>
  
  <body>
    <!-- Header -->
	   <?php include_once('inc/header.php'); ?>
	<!-- //Header -->
	
	<!-- Main -->
	<main class="main" role="main">
		<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="full-width content">
					<h2>Round Trip</h2>
					<?php //print_r($_SESSION);exit; ?>
					
				<form action="booking-details.php" method="post" >
					<div class="results">
						<?php 
						  $rs = $mysqli->query("select * from osfare");
						  while($res = $rs->fetch_assoc()){
						  $cabtype = $res['cabtype'];
						  $car = $res['car'];
						  $cab_rate = $res['cab_rate'];
						  $person = $res['person'];
						  $luggage = $res['luggage'];
						  $distance = $res['distance'];
						  $da = $res['da'];
						  $calender_day = $res['calender_day'];
						  $details = $res['details'];
						  $micro_fare = $res['micro_fare'];
						  $travel_time = $res['travel_time'];
						  $image = $res['image'];
						?>
						
						<!-- Item -->
						<article class="result">
							<div class="one-fourth heightfix"><img src="images/<?php echo $image; ?>" alt="Taxi" /></div>
							
							<div class="one-half heightfix">
								<h3 style="font-size: 20px;"><?php echo $car; ?> <a href="javascript:void(0)" class="trigger color" title="Read more">?</a></h3>
								<ul>
									<li>
										<span class="ico people"></span>
										<p>Max <strong><?php echo $person; ?> people</strong> <br/>per vehicle</p>
									</li>
									<!-- <li>
										<span class="ico luggage"></span>
										<p>Max <strong><?php echo $luggage; ?> suitcases</strong> <br />per vehicle</p>
									</li> -->
									<li>
										<span class="ico time"></span>
										<p>Estimated time :<br/> <strong><?php echo $travel_time; ?></strong></p>
									</li>
								</ul>
							</div>
							<div class="one-fourth heightfix">
								<div>
									<div class="price">Rs <?php echo $cab_rate; ?> </div>
									<span class="meta">Base Fare</span>
									<a href="outstation.php?cab_type=<?php echo $cabtype; ?>" class="btn grey large">select</a>
								</div>
							</div>
							<div class="full-width information">
								<a href="javascript:void(0)" class="close color" title="Close">x</a>
								<p>1 - <?php echo "*Note: Ext. Chrg. Pay ".$micro_fare." after  "; ?> <?php echo $distance; ?></p>
								<p>2 - <?php echo $calender_day; ?></p>
								<p>3 - <?php echo $details; ?></p>
							</div>
						</article>
						<!-- //Item -->
						
						<?php }  ?>
					</div>
					
				  </form>
					
				</div>
			    <!--- //Content -->
			</div>
		</div>
			<!-- Call to action -->
		<div class="color cta">
			<div class="wrap">
				<p class="wow fadeInLeft">India's No.1 Largest Intercity and Local Cab Services</p>
				<a href="tel:+919820439169" class="btn huge black right wow fadeInRight">Call Now</a>
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
  </body>
</html>