<?php session_start();  ?>
<?php 
//Turn off all error reporting
error_reporting(1); 
include_once('inc/db-con.php');

//print_r($_POST);exit; 

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $spicktime = $_POST["pick_time"];
    $spickcity = $_POST["pick_city"];
    $sdropcity = $_POST["drop_city"];
    //$name3 = $_POST['name'];
    
    $_SESSION["s_pick_time"] = $spicktime;
    $_SESSION["s_pick_city"] = $spickcity; 
    $_SESSION["s_drop_city"] = $sdropcity;
}

$pick_time = $_POST["pick_time"];
$pick_city = $_POST["pick_city"];
$drop_city = $_POST["drop_city"];

?>

<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	
	<title>Search results | UKG Tours & Travels</title>
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
		<!-- Search -->
		<div class="advanced-search color">
			<div class="wrap">
				
		            <!-- Row -->
					<div class="f-row">
						<div class="form-group datepicker one-third">
							<label for="dep-date">Departure date and time</label>
							<input type="text" value="<?php echo $pick_time; ?>" readonly/>
						</div>
						
						<div class="form-group select one-third">
							<label>Pick up location</label>
							<input type="text" value="<?php echo ucfirst($pick_city); ?>" readonly/>
						</div>
						
						<div class="form-group select one-third">
							<label>Drop off location</label>
							<input type="text" value="<?php echo ucfirst($drop_city); ?>" readonly/>
						</div>
					</div>
					<!-- //Row -->
		
				
			</div>
		</div>
		<!-- //Search -->
		
		<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="full-width content">
					<h2 style="color: #000; font-size:32px;">One Way Taxi from <?php echo ucfirst($pick_city); ?> to <?php echo ucfirst($drop_city); ?></h2>
					<?php //print_r($_SESSION);exit; ?>
					
				<form action="booking-details.php" method="post" >
					
					<input type="hidden" name="h_pick_city" value="<?php echo $pick_city; ?>" />
					
					<div class="results">
						<?php 
						  $rs = $mysqli->query("select * from fare where pickcity='".$pick_city."' and dropcity='".$drop_city."'");
						  while($res = $rs->fetch_array()){
						  $cabtype = $res['cabtype'];
						  $cabrate = $res['cabrate'];
						  $person = $res['person'];
						  $luggage = $res['luggage'];
						  $travel_time = $res['travel_time'];
						  $image = $res['image'];
						?>
						
						<!-- Item -->
						<article class="result">
							<div class="one-fourth heightfix"><img src="images/<?php echo $image; ?>" alt="Taxi" /></div>
							
							<div class="one-half heightfix">
								<h3><?php echo $cabtype; ?> <a href="javascript:void(0)" class="trigger color" title="Read more">?</a></h3>
								<ul>
									<li>
										<span class="ico people"></span>
										<p>Max <strong><?php echo $person; ?> people</strong> <br/>per vehicle</p>
									</li>
									<!--<li>
										<span class="ico luggage"></span>
										<p>Max <strong><?php echo $luggage; ?> suitcases</strong> <br />per vehicle</p>
									</li>-->
									<li>
										<span class="ico time"></span>
										<p>Estimated time <br /><strong><?php echo $travel_time; ?> hour</strong></p>
									</li>
								</ul>
							</div>
							<div class="one-fourth heightfix">
								<div>
									<div class="price">Rs <?php echo $cabrate; ?> </div>
									<span class="meta"> (All Including)</span>
									<a href="booking-details.php?cab_type=<?php echo $cabtype; ?>" class="btn grey large">select</a>
								</div>
							</div>
							<div class="full-width information">	
								<a href="javascript:void(0)" class="close color" title="Close">x</a>
								<p><?php echo "Basic Fare : ".$cabrate." + Parking (if applicable) Toll & all other charges Included"; ?></p>
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