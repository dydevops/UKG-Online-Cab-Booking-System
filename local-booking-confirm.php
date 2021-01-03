<?php 
session_start();  
error_reporting(1); 

//error_reporting(E_ERROR | E_WARNING | E_PARSE);
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
?>
<?php
include_once('inc/db-con.php');
$cab_type = $_SESSION['bookcab'];
$rs1 = "select * from localfare where cabtype='".$cab_type."'";
$res1 = $mysqli->query($rs1);
$res1_featch = $res1->fetch_array();
$cab_rate = $res1_featch['cab_rate'];
$distance = $res1_featch['distance'];
$details = $res1_featch['details'];
$package_name = $res1_featch['package_name'];
$micro_fare = $res1_featch['micro_fare'];
$rates = $res1_featch['rates'];

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$mobile_number = $_POST['mobile_number'];
$pick_city = $_POST['pick_city'];
$drop_city = $_POST['drop_city'];
$pick_address = $_POST['pick_address'];
$drop_address = $_POST['drop_address'];
$sp_remarks = $_POST['sp_remarks'];

$pick_date_time = $_POST['pick_date_time'];
$explode_pdt = explode(" ",$pick_date_time);
$pick_date = $explode_pdt[0];
$pick_time = $explode_pdt[1];

$rs = "insert into booking(package,fullname,email,mobile_number,pick_city,pick_address,drop_city,drop_address,cab_type,cab_rate,distance,details,package_name,micro_fare,rates,pick_date,pick_time,sp_remark,payment_method,time_now) 
       values('local','$fullname','$email','$mobile_number','$pick_city','$pick_address','$drop_city','$drop_address','$cab_type','$cab_rate','$distance','$details','$package_name','$micro_fare','$rates','$pick_date','$pick_time','$sp_remarks','CASH',now())";
$res = $mysqli->query($rs);

//print_r($res);exit;


include("includes/mailcall.php");

$cust_details = '<table style="font-family:Verdana, Geneva, sans-serif; font-size: 12px; background:#999999; width:700px; border:none;" cellpadding="5" cellspacing="1">
	             
				  
		<tr>
           <th align="left" style="font-weight:bold; font-variant:small-caps; background:#F1C40F;" colspan="8">Booking Details</th>
		</tr>
		<tr>
           <td bgcolor="#ffffff" align="left" colspan="2"><strong>Package Type : </strong></td>
           <td bgcolor="#ffffff" align="left" colspan="6">Local</td>
        </tr>
		<tr>
           <td bgcolor="#ffffff" align="left" colspan="8"><strong>Pick-up City : </strong>'.$pick_city.'</td>
        </tr>

		<tr>
           <td bgcolor="#ffffff" align="left" colspan="8"><strong>Drop City : </strong>'.$drop_city.'</td>
        </tr>

		<tr>
           <td bgcolor="#f2f2f2" align="left" colspan="8"><strong>Pick-up Location : </strong>'.$pick_address.'</td>
        </tr> 
		
		<tr>
           <td bgcolor="#f2f2f2" align="left" colspan="8"><strong>Drop Location : </strong>'.$drop_address.'</td>
        </tr>

        <tr>
           <td bgcolor="#ffffff" align="left" colspan="8"><strong>Pick-up Date : </strong>'.$pick_date.'</td>
        </tr>

		<tr>
           <td bgcolor="#f2f2f2" align="left" colspan="8"><strong>Pick-up Time : </strong>'.$pick_time.'</td>
        </tr>

	   <tr>
           <td bgcolor="#ffffff" align="left" colspan="8"><strong>Cab Type : </strong>'.$cab_type.'</td>
       </tr>
	   <tr>
           <td bgcolor="#f2f2f2" align="left" colspan="8"><strong>Gross Total : </strong>'.$details.'</td>
       </tr>
       <tr>
           <td bgcolor="#f2f2f2" align="left" colspan="8"><strong>Details : </strong>'.$rates.'</td>
       </tr>
	    <tr>
           <td bgcolor="#ffffff" align="left" colspan="8"><strong>One Day Estimated Distance : </strong>'.$distance.'</td>
       </tr>
       <tr>
        <td bgcolor="#ffffff" align="left" colspan="8"><strong>*Note: Ext. Chrg. Pay </strong>'.$micro_fare.' after '.$distance.'</td>
       </tr>
	   <tr>
           <td bgcolor="#ffffff" align="left" colspan="8"><strong>Customer Name: </strong>'.$fullname.'</td>
       </tr>
	    
       <tr>
           <td bgcolor="#f2f2f2" align="left" colspan="8"><strong>Customer Mobile Number : </strong>'.$mobile_number.'</td>
       </tr>
	   
	   <tr>
           <td bgcolor="#ffffff" align="left" colspan="8"><strong>Customer EmailId : </strong>'.$email.'</td>
       </tr>
	   
	   <tr>
           <td bgcolor="#ffffff" align="left" colspan="8"><strong>Special Remark : </strong>'.$sp_remarks.'</td>
       </tr>
	   
		
	   </table>'; 
	
	
	$bsiMail = new bsiMail();
	
	$mail_add = 'booking@ukgcab.com'; 
	
	$mail_sub =  'New Booking UKG Tours&Travels';
	
	$mail_body = "Team,<br><br>";
	$mail_body .= "Please book the following Local Booking for the customer<br><br>";
	$mail_body .= "This booking has been entered by customer at www.ukgcab.com<br><br>";
	$mail_body .= $cust_details;
    //echo $mail_body;exit;  
	  
	$returnMsg = $bsiMail->sendEMail($mail_add, $mail_sub, $mail_body); 
	
	if($returnMsg == true) {		
		
		$Email_Address = $email;
		$Email_Subject = 'ukgcab.com : Booking Confirmation';				
		$Email_Body = "Dear Sir/Madam ,<br><br>";
		$Email_Body .= "Thank you for Booking with ukgcab.com.<br><br>";
		$Email_Body .= $cust_details;
		
		$notifynMsg = $bsiMail->sendEMail($Email_Address, $Email_Subject, $Email_Body);
		
		$sucess = 1;
		
	}else {
		
		$sucess = 2;
	}	
?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="keywords" content="" />
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Local Taxi | UKG Tours & Travels</title>
	
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
					<h1>Thank you. Your Local booking is now confirmed.</h1>
				</div>
			</div>
		</header>
		<!-- //Page info -->
		
		<div class="wrap">
			<div class="row">
				<div class="three-fourth">
				<form class="box readonly">
						<h3>Passenger details</h3>
						<div class="f-row">
							<div class="one-fourth">Name and surname</div>
							<div class="three-fourth"><?php echo $fullname; ?></div>
						</div>
						<div class="f-row">
							<div class="one-fourth">Mobile number</div>
							<div class="three-fourth"><?php echo $mobile_number; ?></div>
						</div>
						<div class="f-row">
							<div class="one-fourth">Email address</div>
							<div class="three-fourth" style="text-transform:none;"><?php echo $email; ?></div>
						</div> 
						
						
						<h3>Local Booking details</h3>
						<div class="f-row">
							<div class="one-fourth">Estimated Distance:</div>
							<div class="three-fourth"><?php echo $distance; ?></div>
						</div>
						<div class="f-row">
							<div class="one-fourth"> Pick Up Date</div>
							<div class="three-fourth"><?php echo $pick_date." ".$pick_time; ?></div>
						</div>
						<div class="f-row">
							<div class="one-fourth">From</div>
							<div class="three-fourth"><?php echo $pick_city; ?></div>
						</div>
						<div class="f-row">
							<div class="one-fourth">To</div>
							<div class="three-fourth"><?php echo $drop_city; ?></div>
						</div>
						
						<div class="f-row">
							<div class="one-fourth">Pick-Up address</div>
							<div class="three-fourth"><?php echo $pick_address; ?></div>
						</div>
						
						<div class="f-row">
							<div class="one-fourth">Drop Address</div>
							<div class="three-fourth"><?php echo $drop_address; ?></div>
						</div>
						
						<div class="f-row">
							<div class="one-fourth">CabType</div>
							<div class="three-fourth"><?php echo $cab_type; ?></div>
						</div>
						<div class="f-row">
							<div class="one-fourth">Special Remarks</div>
							<div class="three-fourth"><?php echo $sp_remarks; ?></div>
						</div>
						<div class="f-row">
							<div class="one-fourth">Basic Fare</div>
							<div class="three-fourth"><?php echo "Rs ".$cab_rate; ?></div>
						</div>
						<b>Gross Total : <?php echo $details; ?> </b>
						<h3>*Note : <?php echo "Ext. Chrg. Pay " .$micro_fare; ?> after <?php echo $distance; ?></h3>
						<h3>Booking Amount Per 30% advance : <a href="pay-now" title="Pay Now" class="btn dkactive">Pay Now</a></h3>
					</form>
				</div>
				
				<!--- Sidebar -->
				<aside class="one-fourth sidebar right">
					<!-- Widget -->
					<div class="widget">
						<h4>Need help booking?</h4>
						<div class="textwidget">
							<p>Call our customer services team on the number below to speak to one of our advisors who will help you with all of your needs.</p>
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
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/topbutton.js"></script>
	<script src="js/bootstrap.min.js"></script>
  </body>
</html>