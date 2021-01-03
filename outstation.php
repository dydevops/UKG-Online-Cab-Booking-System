<?php 
session_start();
//print_r($_SESSION);
//error_reporting(E_ALL);exit;
//print_r($_REQUEST);exit;
error_reporting(1);

$bookcab1 = $_REQUEST['cab_type'];

$_SESSION['bookcab'] = $bookcab1;
?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Outstation taxi services in india | UKG Cab Services</title>
	<meta name="description" content="UKG Cab provides outstation packages from major city of india like mumbai, pune, nashik, ahmedabad, vadodara, surat, rajkot, bhavnagar">
	<meta name="keywords" content="outstation taxi service, outstation taxi charges , outstation taxi rates, outstation taxi booking, outstation taxi from mumbai, outstation taxi from pune, outstation taxi from nashik, outstation taxi from shirdi, outstation taxi from ahmedabad, outstation taxi from vadodara, outstation taxi from surat, outstation taxi from rajkot, outstation taxi india, outstation taxi available in gujarat, outstation taxi available in maharastra " />
	<meta name="author" content="UKG Tours & Travels">
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
  </head>
  <body>
    <!-- Header -->
	     <?php include_once('inc/header.php'); ?>
	<!-- //Header -->

	<!-- Main -->
	<main class="main" role="main" style="background-color: #2b2a29;">
		<!-- Page info -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1 class="text-center">Outstation Cab Booking</h1>
				</div>
			</div>
		</header>
		<!-- //Page info -->
		<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="full-width content" style="color:#fff;">
					<h2>Send inquiry for your custom made ukgcab.com</h2>
					<p>Here you can order a customized transfer that will be organized according to your wishes and demands.</p>
					<p>To receive an offer, please fill in the following inquiry form and make sure to describe the trip in detail. Specify the date and time of departure from the departure location, the date and time of the arrival to the final destination, all stopovers, their duration and any special requirements. Sending an inquiry does not oblige you to buy the service. You can make your decision after we send you a price offer.</p>
				</div>
				<!--- //Content -->
				
				<div class="three-fourth">
					
					<form method="post" action="outstation-booking-confirm.php">
						<header class="f-title color" style="background-color:#8C7D35;">Contact information</header>
						
						<div class="f-row">
							
							<div class="one-half">
								<label for="name">Name</label>
								<input type="text" name="fullname" id="name" required />
							</div>
							
							<div class="one-half">
								<label for="email">Email address</label>
								<input type="email" name="email" id="email" required />
							</div>
						</div>
						
						<div class="f-row">
							<div class="one-half">
								<label for="number">Phone number</label>
								<input type="number" name="mobile_number" id="number" required />
							</div>
						</div>
						
						<header class="f-title color" style="background-color:#8C7D35;">Booking Info</header>
						
			            <div class="f-row">
							<div class="one-half">
								<label for="dep-date">Pick up date and time</label>
								<input type="text" name="pick_date_time" id="dep-date" placeholder="yyyy/mm/dd hh:mm" required />
							</div>
							
							<!--<div class="one-sixth">
								<label for="passengers">passengers</label>
								<input type="number" id="passengers" min="1" />
							</div>-->
							
							<div class="one-half">
							  <label for="ret-date">Return date and time</label>
							   <input type="text" name="return_date_time" id="ret-date" placeholder="yyyy/mm/dd hh:mm" required/>
							</div>
						</div>
						
						<div class="f-row">
							<div class="one-half">
								<label for="pickuploc">Pick up city</label>
								<input type="text" name="pick_city" id="pickuploc" required />
							</div>
							<div class="one-half">
								<label for="dropoffloc">Drop city</label>
								<input type="text" name="drop_city" id="dropoffloc" required />
							</div>
						</div>
						
						<div class="f-row">
							<div class="one-half">
								<label for="pickuploc">Pick up location</label>
								<input type="text" name="pick_address" id="pickuploc" required />
							</div>
							<div class="one-half">
								<label for="dropoffloc">Drop off location</label>
								<input type="text" name="drop_address" id="dropoffloc" required/>
							</div>
						</div>
						
						<div class="f-row">
							<div class="full-width">
								<label for="extras">Additional information </label>
								<textarea name="sp_remarks" id="extras"></textarea>
							</div>
						</div>
						
						<div class="actions">
                             <!--<a href="#" class="btn medium color right">Submit request</a>-->
							 <input class="btn medium color right" type="submit" value="Outstation" name="Book Now" />
						</div>
					</form>
				</div>
				
				<!--- Sidebar -->
				<aside class="one-fourth sidebar right">
					<!-- Widget -->
					<div class="widget">
						<h4>Need help booking?</h4>
						<dl>
									<dt>Cab Type</dt>
									<dd><?php echo ucfirst($_REQUEST['cab_type']); ?></dd>
								</dl>
						<div class="textwidget">
							<p>Call our customer services team on the number below to speak to one of our advisors who will help you with all of your needs.</p>
							<!--<p class="contact-data"><span class="ico phone black"></span> +91 9377 365 365</p>
							<p class="contact-data"><span class="ico phone black"></span> +91 9376 365 365</p>-->
							<p class="contact-data"><span class="ico phone black"></span> +91-9820439169</p>
						</div>
					</div>
					<!-- //Widget -->
					<!-- Widget -->
					<div class="widget">
						<h4>Advertisment</h4>
						<a href="#"><img src="img/advertisment.jpg" alt="" /></a>
					</div>
					<!-- //Widget -->
				</aside>
				<!--- //Sidebar -->
			</div>
		</div>
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