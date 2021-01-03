<?php 
error_reporting(1);
?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="keywords" content="" />
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Contact Us | UKG Tours&Travels</title>
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
  
  <body onload="initialize()">
    
	<!-- Header -->
	  <?php include_once('inc/header.php'); ?>
	<!-- //Header -->
	
<?php
if(isset($_REQUEST) && $_REQUEST['submit']=='contactus')
{

	$name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $comments = $_REQUEST['comments'];

	echo $email;exit;
	
    $to = 'info@dkyadav.in';
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= "From:".$email; 
	$subject='Thanks For connecting with us';
	
	$message ="<html>
				<head>
				<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
				<title>Enquiry Mail</title>
				</head>
				
				<body>
				<table width='350' border='0'>
				  <tr>
					<td colspan='3'><strong>Dear Admin,</strong></td>
				  </tr>
				  <tr>
					<td colspan='3' align='right'></td>
				  </tr>
				  <tr>
					<td colspan='3' align='right'>Following are the details regarding the new enquiry :</td>
				  </tr>
				  
				   <tr>
					<td width='72'><strong>Email : </strong></td>
					<td width='132'>".$email."</td>
					<td width='68'>&nbsp;</td>
				  </tr>
				 <tr>
					<td width='72'><strong>Name : </strong></td>
					<td width='132'>".$name."</td>
					<td width='68'>&nbsp;</td>
				  </tr>
				  <tr>
					<td><strong>Message :</strong> </td>
					<td>".$comments."</td>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				  <tr>
					<td><strong>Regards,</strong></td>
				   <td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><strong>Oneway Taxi Team</strong></td>
						 <td>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
				</table>
				
				</body>
				</html>";
	//echo $message;exit;
	@mail($to,$subject,$message,$headers);
			
	$error='Thank you for contacting us. We will get back to you soon';		
	
}
?>
		<!-- Main -->
	<main class="main" role="main" style="background-color:#2b2a29;">
		<!-- Page info -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1 class="text-center">Contact us</h1>
				</div>
			</div>
		</header>
		<!-- //Page info -->
		<div class="wrap">
			<div class="row">
				
				<!--- Content -->
				<div class="full-width content textongrey" style="color:#fff;">
					<h2>Send us a message</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. All fields are required.</p>
				</div>
				<!--- //Content -->
				
				<!-- Form -->
				<div class="three-fourth">
					<form method="post" action="contact_form_message.php" name="contactform" id="contactform">
						<div id="message"></div>
						<div class="f-row">
							<div class="one-half">
								<label for="name">Name and surname</label>
								<input type="text" id="name" />
							</div>
							<div class="one-half">
								<label for="email">Email address</label>
								<input type="email" id="email" />
							</div>
						</div>
						<div class="f-row">
							<div class="one-half">
								<label for="name">Mobile No.</label>
								<input type="text" id="name" />
							</div>
							<div class="one-half">
								<label for="email">Subject</label>
								<input type="email" id="email" />
							</div>
						</div>
						<div class="f-row">
							<div class="full-width">
								<label for="comments">Message</label>
								<textarea id="comments"></textarea>
							</div>
						</div>
						<div class="f-row">
							<input type="submit" value="Submit" id="submit" name="submit" class="btn color medium right" />
						</div>
					</form>
				</div>
				<!-- //Form -->
				
				<!--- Sidebar -->
				<aside class="one-fourth sidebar right">
					<!-- Widget -->
					<div class="widget">
						<h4>Need help booking?</h4>
						<div class="textwidget">
							<p>Call our customer services team on the number below to speak to one of our advisors who will help you with all of your needs.</p>
							<p class="contact-data"><span class="icon icon-themeenergy_call black"></span>  +91-9820439169</p>
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
	<script src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>
	<script src="js/infobox.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/topbutton.js"></script>
  </body>
</html>