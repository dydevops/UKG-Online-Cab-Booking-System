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
	<title>Booking Details | UKG Tours & Travels</title>
	<meta name="description" content="">
	<meta name="keywords" content="" />
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
	<main class="main" role="main" style="background-color:#2b2a29;">
		
		<div class="wrap">
			<div class="row">
				
				<!--- Content -->
				<div class="full-width content" style="color:#fff;">
					<h2 style="padding:0px;">Fill Booking Detail Form</h2></br>
					<p>Please ensure all of the required fields are completed at the time of booking. This information is imperative to ensure a smooth journey.<br />All fields are required.</p>
				</div>
				<!--- //Content -->
				
				<div class="three-fourth">
					
					<form role="form" action="booking-confirm.php" method="post" onSubmit="return form_checking();">
						
						<div class="f-row">
							<div class="one-half">
								<label for="name">Name and Surname</label>
								<input type="text" name="fullname" id="fullname" required />
								<span id="efullname" style="color:red;display:none;">* Enter Name and Surname</span>
							</div>
							<div class="one-half">
								<label for="mobile number">Mobile number</label>
								<input type="text" maxlength="13" id="mobile_number" name="mobile_number" required />
								<span id="emobile_number" style="color:red;display:none;">* Enter Mobile Number</span>
							</div> 
						</div>
						
						<div class="f-row">
							<div class="one-half">
								<label for="email">Email address</label>
								<input type="email" id="email" name="email" required />
								<span id="eemail" style="color:red;display:none;">* Enter Email Address</span>
							</div>
						</div>
						
						<div class="f-row">
							<div class="full-width">
								<label for="pick-up address">pick-Up address</label>
								<input type="text" id="pick_address" name="pick_address" required />
								<span id="epick_address" style="color:red;display:none;">* Enter Pick-Up Address</span>
							</div>
						</div>
						
						<div class="f-row">
						    <div class="full-width">
								<label for="drop address">Drop Address</label>
								<input type="text" id="drop_address" name="drop_address" required />
								<span id="edrop_address" style="color:red;display:none;">* Enter Drop Address</span>
							</div>
						</div>	
						
						<div class="f-row">
							<div class="full-width">
								<label for="Special Remarks">Special Remarks</label>
								<input type="text" id="sp_remarks" name="sp_remarks" />
								<span id="esp_remarks" style="color:red;display:none;">* Enter Special Remarks</span>
							</div>
						</div>
						
						<div class="f-row">
							<div class="one-half">
								<label for="payment">Payment type</label>
								<input type="text" id="payment" name="payment" value="CASH" disabled />
							</div>
						</div>
						
						<div class="actions">
							<button type="submit" class="btn medium color right">Continue</button>
						</div>
						
					</form>
				</div>
				
				<!--- Sidebar -->
				<aside class="one-fourth sidebar right">
				</aside>
				<!--- //Sidebar -->
				
				<!--- Sidebar -->
				<aside class="one-fourth sidebar right">
					<!-- Widget -->
					<div class="widget">
						<h4>Booking summary</h4>
						<div class="summary">
							
							<div>
								<h5>DEPARTURE</h5>
								<dl>
									<dt>Date</dt>
									<dd><?php echo $_SESSION['s_pick_time']; ?></dd>
									<dt>From</dt>
									<dd><?php echo ucfirst($_SESSION['s_pick_city']); ?></dd>
									<dt>To</dt>
									<dd><?php echo ucfirst($_SESSION['s_drop_city']); ?></dd>
									<dt>Cab Type</dt>
									<dd><?php echo ucfirst($_REQUEST['cab_type']); ?></dd>
								</dl>
							</div>

							<!--<dl class="total">
								<dt>Total</dt>
								<dd>840,00 usd</dd>
							</dl>-->
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
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/topbutton.js"></script>
	<script src="js/bootstrap.min.js"></script>
   </body>
</html>