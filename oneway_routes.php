<?php 
include_once("inc/siteurl.php");
//echo "come here";exit; 
//print_r($_REQUEST);exit;

$page = $_REQUEST['page'];
$page1 = explode("-to-",$page);

$pick_city1 = $page1[0];
$pick_city2 = str_replace("-"," ",$pick_city1); 
$pickcity = ucwords($pick_city2); // PickUp City

$drop_city1 = $page1[1]; 
$drop_city2 = explode("-taxi",$drop_city1);
$drop_city3 = $drop_city2[0];
$drop_city4 = str_replace("-"," ",$drop_city3);
$dropcity = ucwords($drop_city4); // Drop City

?>

<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	
	<title><?php echo $pickcity; ?> To <?php echo $dropcity; ?> Cabs | Book <?php echo $pickcity; ?> to <?php echo $dropcity; ?> One Way Taxi</title>
	<meta name="description" content="Book <?php echo $pickcity; ?> to <?php echo $dropcity; ?> cabs - Car Rental Service from <?php echo $pickcity; ?> To <?php echo $dropcity; ?> at 30-50% discount as compared to return fare. Book a cab From <?php echo $pickcity; ?> To <?php echo $dropcity; ?> at UKG Cab. Call us On +91-9819592338 to book  a One Way Taxi.">
	<meta name="keywords" content="Taxi from <?php echo $pickcity; ?> To <?php echo $dropcity; ?>, <?php echo $pickcity; ?> to <?php echo $dropcity; ?> Taxi, Car rental <?php echo $pickcity; ?> to <?php echo $dropcity; ?>, <?php echo $pickcity; ?> to <?php echo $dropcity; ?> One Way Taxi, <?php echo $pickcity; ?> To <?php echo $dropcity; ?> One Way Cab, <?php echo $pickcity; ?> to <?php echo $dropcity; ?> cab, Book a Cab From <?php echo $pickcity; ?> to <?php echo $dropcity; ?>" />
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
		<!-- Page info -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1 class="text-center"><?php echo $pickcity; ?> to <?php echo $dropcity; ?> Cabs</h1>
				</div>
			</div>
		</header>
		<!-- //Page info -->
		<div class="wrap">
			<div class="row">
				
				<!--- Content -->
				<div class="full-width content">
					<!-- Post -->
					<article class="single hentry">
						<div class="entry-content">
							<h2>One Way, Outstation, Local, Airport Transfer Taxi From <?php echo $pickcity; ?> to <?php echo $dropcity; ?></h2>
							<br/>
						 <div>
						     <h3 style="color:#fff;">Check Fare</h3>
						     <a href="index.php#booking" title="One Way Taxi" class="btn">One Way</a>
						     <a href="outstation-fare.php" title="Outstation Taxi" class="btn ">Outstation</a>
						     <a href="local-fare.php" title="Local Taxi" class="btn">Local</a>
						     <a href="airport-fare.php" title="Airtport" class="btn">Airport</a>
					      </div> 
					      <br/>
							<p class="lead">UKG Tours & Travels is one of the leading Cab Service aggregator. We allocate Peer to Peer Inter City, Airport Transfers. Taxi Services for Safe, Comfortable and Hassel free One Way Travelling.</p> 
							<br/>
							<p class="lead">UKG Cab provides One Way Car Rental from <?php echo $pickcity; ?> to <?php echo $dropcity; ?>, which includes the pick from anywhere in <?php echo $pickcity; ?> including city / <?php echo $pickcity; ?> Airport and drop off to <?php echo $dropcity; ?> City. We provide instant confirmation and flexibility to book 24x7.</p> 
							<br/>
							<p class="lead">One Way, Outstation, Local, Airport Transfer Taxi from <?php echo $pickcity; ?> to <?php echo $dropcity; ?> is the best option for travelers who would like to travel One Way, Outstation, Local, Airport Transfer from <?php echo $pickcity; ?> to <?php echo $dropcity; ?>. Cab/Taxi would easily pick you up and drop you at your preferred location anywhere in <?php echo $dropcity; ?>. It is not a shared Cab. It will be a dedicated cab for you.</p> 
							<br/>
							<p class="lead"><?php echo $pickcity; ?> to <?php echo $dropcity; ?> one way car rental packages are designed in such a way, so user could avail more benefits by just paying one way drop off charges. So why to wait more, hurry up, you are just few step away to grab this deal.</p>
							<br/>
							<p class="lead">You are just few steps Away to Book a Car from <?php echo $pickcity; ?> to <?php echo $dropcity; ?>. Hurry Up, Grab the opportunity and Get This Amazing Deal.</p>
							<br/>
							<!-- Call to action -->
			<div class="wrap">
			    <h2 style="color: #fff;">UKG Tours & Travel Enterprises Services</h2>
				<h2 style="color: #fff;"><?php echo $pickcity; ?> to <?php echo $dropcity; ?> Taxi</h2>
				<h2 style="color: #fff;"><?php echo $pickcity; ?> to <?php echo $dropcity; ?> Cab</h2>
				<h2 style="color: #fff;"><?php echo $pickcity; ?> to <?php echo $dropcity; ?> Cab Price</h2>
				<h2 style="color: #fff;"><?php echo $pickcity; ?> to <?php echo $dropcity; ?> Car Rental Services</h2>
				<h2 style="color: #fff;"><?php echo $pickcity; ?> to <?php echo $dropcity; ?> Innova On Rent Cabs</h2>
				<h2 style="color: #fff;"><?php echo $pickcity; ?> to <?php echo $dropcity; ?> Car On Hire</h2>
				<h2 style="color: #fff;"><?php echo $pickcity; ?> to <?php echo $dropcity; ?> Car On Rent</h2>
				<h2 style="color: #fff;"><?php echo $pickcity; ?> to <?php echo $dropcity; ?> Round Trip Taxi</h2>
				<h2 style="color: #fff;"><?php echo $pickcity; ?> to <?php echo $dropcity; ?> Local Taxi</h2>
				<h2 style="color: #fff;"><?php echo $pickcity; ?> to <?php echo $dropcity; ?> Airport Transfer Taxi</h2>
				<h2 style="color: #fff;"><?php echo $pickcity; ?> to <?php echo $dropcity; ?> Outstation Taxi</h2>
				<h2 style="color: #fff;"><?php echo $pickcity; ?> to <?php echo $dropcity; ?> Cheap Taxi</h2>
				<h2 style="color: #fff;"><?php echo $pickcity; ?> to <?php echo $dropcity; ?> Hatchback Cabs</h2>
				<h2 style="color: #fff;"><?php echo $pickcity; ?> to <?php echo $dropcity; ?> AC Sedan</h2>
		</div>
		<!-- //Call to action -->
							<p class="lead">Apart from <?php echo $pickcity; ?> to <?php echo $dropcity; ?> we Provide Car Hire Services to various other <a href="routes" style="color:white;">Routes</a></p>
						    <br/>
							<p class="lead">We provide easy and hassle free bookings, So what are you Waiting for Book your Taxi or Cab now and get instant confirmation, We are open 24X7 (365 Days)</a></p>
                            </br>
							<p class="lead"><a href="http://www.ukgcab.com" style="color:white">BOOK YOUR CAB NOW.....!</a></p>
							<br/>
							<p class="lead">Why travel with www.ukgcab.com find out your <a href="faq" style="color:white">answers.</a></p>
						</div>
					</article>
					<!-- //Post -->
				</div>
				<!--- //Content -->
				
			</div>
		</div>
	</main>
	<!-- //Main -->
	
	<!-- Footer -->
	    <?php include_once('inc/footer.php'); ?>
	<!-- //Footer -->
	
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