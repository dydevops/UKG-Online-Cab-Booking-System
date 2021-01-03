<?php
$city=$_REQUEST['city'];
//echo $city; 
?>
<select name="drop_city" id="droploc"  class="form-control">


<?php if($city=='aamby valley' || $city=='adlabs imagica' || $city=='deolali'){ ?>
	<option value="mumbai airport">Mumbai Airport</option>
    <option value="mumbai city">Ghatkopar Metro</option>
    <option value="mumbai city">Bank Of Baroda Andheri</option>							
    <option value="mumbai city">Mumbai City</option>							
    <option value="thane">Thane</option>							
    <option value="kalyan">Kalyan</option>							
    <option value="nashik">Nashik</option>							
    <option value="navi mumbai">Navi Mumbai</option>							
    <option value="pune">Pune</option>							
 
<?php } else if($city=='ahmedabad airport' || $city=='ahmedabad city'){ ?>
    <option value="anand">Anand</option>							
    <option value="ankleshwar">Ankleshwar</option>							
    <option value="bharuch">Bharuch</option>							
    <option value="dahej">Dahej</option>							
    <option value="daman">Daman</option>														
    <option value="kalyan">Kalyan</option>							
    <option value="mehsana">Mehsana</option>							
    <option value="morbi">Morbi</option>							
    <option value="mount abu">Mount Abu</option>							
    <option value="mumbai airport">Mumbai Airport</option>							
    <option value="mumbai city">Mumbai City</option>							
    <option value="navi mumbai ">Navi Mumbai </option>							
    <option value="navsari ">Navsari </option>							
    <option value="palanpur ">Palanpur </option>							
    <option value="pune ">Pune </option>							
    <option value="rajkot ">Rajkot </option>							
    <option value="surat ">Surat </option>							
    <option value="thane ">Thane </option>							
    <option value="udaipur ">Udaipur </option>							
    <option value="vadodara ">Vadodara </option>							
    <option value="vapi ">Vapi </option>

<?php } else if($city=='bardoli' || $city=='boisar' || $city=='dahanu' || $city=='della resort' || $city=='palghar'){ ?>
    <option value="kalyan ">Kalyan </option>							
    <option value="mumbai airport ">Mumbai Airport </option>							
    <option value="mumbai city ">Mumbai City </option>							
    <option value="navi mumbai ">Navi Mumbai </option>							
    <option value=thane ">Thane </option>							
	
<?php } else if($city=='karad' || $city=='kolhapur' || $city=='lavasa' || $city=='lonavla' || $city=='mahableshwar' || $city=='matheran' || $city=='panchgani' || $city=='satara' || $city=='silvassa' || $city=='trimbakeshwar'){ ?>
    <option value="kalyan ">Kalyan </option>					
    <option value="mumbai airport ">Mumbai Airport </option>					
    <option value="mumbai city ">Mumbai City </option>					
    <option value="navi mumbai ">Navi Mumbai </option>					
    <option value="pune ">Pune </option>					
    <option value="thane ">Thane </option>	

<?php } else if($city=='jalna'){ ?>
  <option value="aurangabad ">Aurangabad </option>						
  <option value="kalyan">Kalyan </option>						
  <option value="mumbai airport">Mumbai Airport </option>						
  <option value="mumbai city">Mumbai City </option>						
  <option value="navi mumbai">Navi Mumbai </option>						
  <option value="thane">Thane </option>	


<?php } else if($city=='jalgaon'){ ?>
  <option value="aurangabad ">Aurangabad </option>							
  <option value="kalyan ">Kalyan </option>							
  <option value="mumbai airport ">Mumbai Airport </option>							
  <option value="mumbai city ">Mumbai City </option>							
  <option value="nashik ">Nashik </option>							
  <option value="navi mumbai ">Navi Mumbai </option>							
  <option value="thane ">Thane </option>							
								
<?php } else if($city=='mumbai airport' || $city=='mumbai city' || $city=='navi mumbai' || $city=='thane' || $city=='kalyan'){ ?>
    <option value="varanasi">Varanasi UP</option>									
    <option value="aamby valley"> New Delhi</option>									
    <option value="della resorts">Agara Up</option>									
    <option value="lonavla">Allahabad UP</option>									
    <option value="lavasa">Lavasa</option>									
    <option value="matheran">Matheran</option>									
    <option value="pune">Pune</option>									
    <option value="pandharpur">Pandharpur</option>									
    <option value="indapur">Indapur</option>									
    <option value="solapur">Solapur</option>									
    <option value="tuljapur">Tuljapur</option>									
    <option value="igatpuri">Igatpuri</option>									
    <option value="bhandardara">Bhandardara</option>									
    <option value="trimbakeshwar">Trimbakeshwar</option>									
    <option value="nashik">Nashik</option>									
    <option value="shirdi">Shirdi</option>									
    <option value="deolali">Deolali</option>									
    <option value="aurangabad">Aurangabad</option>									
    <option value="ahmednagar">Ahmednagar</option>									
    <option value="malegaon">Malegaon</option>									
    <option value="dhule">Dhule</option>									
    <option value="jalgaon">Jalgaon</option>									
    <option value="mahableshwar">Mahableshwar</option>									
    <option value="panchgani">Panchgani</option>									
    <option value="satara">Satara</option>									
    <option value="karad">Karad</option>									
    <option value="kolhapur">Kolhapur</option>									
    <option value="goa">Goa</option>									
    <option value="jalna">Jalna</option>									
    <option value="palghar">Palghar</option>									
    <option value="boisar">Boisar</option>									
    <option value="dahanu">Dahanu</option>									
    <option value="silvassa">Silvassa</option>									
    <option value="vapi">Vapi</option>									
    <option value="daman">Daman</option>									
    <option value="navsari">Navsari</option>									
    <option value="bardoli">Bardoli</option>									
    <option value="surat">Surat</option>									
    <option value="ankleshwar">Ankleshwar</option>									
    <option value="bharuch">Bharuch</option>									
    <option value="dahej">Dahej</option>									
    <option value="vadodara">Vadodara</option>									
    <option value="anand">Anand</option>									
    <option value="nadiad">Nadiad</option>									
    <option value="ahmedabad airport">Ahmedabad Airport</option>									
    <option value="ahmedabad city">Ahmedabad City</option>									
    <option value="rajkot">Rajkot</option>
 
 <?php }else if($city=='ahmednagar') { ?> 
	<option value="aurangabad ">Aurangabad </option>							
    <option value="kalyan ">Kalyan </option>							
    <option value="mumbai airport ">Mumbai Airport </option>							
    <option value="mumbai city ">Mumbai City </option>							
    <option value="nashik">Nashik</option>							
    <option value="navimumbai ">Navi Mumbai </option>							
    <option value="pune ">Pune </option>							
    <option value="thane ">Thane </option>							
	

<?php } else if($city=='anand') { ?>
	<option value="ahmedabad airport ">Ahmedabad Airport </option>								
    <option value="ahmedabad city ">Ahmedabad City </option>								
    <option value="bharuch ">Bharuch </option>								
    <option value="kalyan ">Kalyan </option>								
    <option value="mumbai airport ">Mumbai Airport </option>								
    <option value="mumbai city ">Mumbai City </option>								
    <option value="navi mumbai ">Navi Mumbai </option>								
    <option value="surat ">Surat </option>								
    <option value="vadodara ">Vadodara </option>								
    <option value="thane ">Thane </option>								


<?php } else if($city=='ankleshwar') { ?>
	<option value="ahmedabad airport ">Ahmedabad Airport </option>								
    <option value="ahmedabad city ">Ahmedabad City </option>								
    <option value="kalyan ">Kalyan </option>								
    <option value="mumbai airport ">Mumbai Airport </option>								
    <option value="mumbai city ">Mumbai City </option>								
    <option value="thane ">Thane </option>								
    <option value="navi mumbai ">Navi Mumbai </option>								
    <option value="vadodaa ">Vadodara </option>								
								
<?php } else if($city=='aurangabad') { ?>
	<option value="ahmednagar ">Ahmednagar </option>							
    <option value="akola ">Akola </option>							
    <option value="amravati ">Amravati </option>							
    <option value="jalgaon ">Jalgaon </option>							
    <option value="jalna ">Jalna </option>							
    <option value="kalyan ">Kalyan </option>							
    <option value="mumbai airport ">Mumbai Airport </option>							
    <option value="mumbai city ">Mumbai City </option>							
    <option value="nanded ">Nanded </option>							
    <option value="nashik ">Nashik </option>							
    <option value="navi mumbai ">Navi Mumbai </option>							
    <option value="shirdi ">Shirdi </option>							
    <option value=thane ">Thane </option>							

	
<?php } else if($city=='bharuch') { ?>
	<option value="ahmedabad airport ">Ahmedabad Airport </option>								
    <option value="ahmedabad city ">Ahmedabad City </option>								
    <option value="kalyan ">Kalyan </option>								
    <option value="mumbai airport ">Mumbai Airport </option>								
    <option value="mumbai city ">Mumbai City </option>								
    <option value="navi mumbai ">Navi Mumbai </option>								
    <option value=thane ">Thane </option>								
    <option value="vadodaa ">Vadodara </option>								


<?php } else if($city=='dahej') { ?>
	<option value="ahmedabad airport ">Ahmedabad Airport </option>								
    <option value="ahmedabad city ">Ahmedabad City </option>								
    <option value="kalyan ">Kalyan </option>								
    <option value="mumbai airport ">Mumbai Airport </option>								
    <option value="mumbai city ">Mumbai City </option>								
    <option value="navi mumbai ">Navi Mumbai </option>								
    <option value="thane ">Thane </option>								


<?php } else if($city=='gandhidham') { ?>
	<option value="ahmedabad airport">Ahmedabad Airport</option>
	<option value="ahmedabad city">Ahmedabad City</option>
	
<!-- deolali -->

<?php }else if($city=='vapi') { ?> 
	<option value="ahmedabad airport">Ahmedabad Airport</option>								
    <option value="ahmedabad cityt">Ahmedabad City</option>								
    <option value="bharuch">Bharuch </option>								
    <option value="daman">Daman </option>								
    <option value="kalyan">Kalyan </option>								
    <option value="mumbai airport">Mumbai Airport </option>								
    <option value="mumbai city">Mumbai City </option>								
    <option value="navi mumbai">Navi Mumbai </option>								
    <option value="pune">Pune </option>								
    <option value="rajkot">Rajkot </option>								
    <option value="surat">Surat </option>								
    <option value="thane">Thane </option>								
    <option value="vadodara">Vadodara</option>

  <?php }else if($city=='daman') { ?> 
	<option value="ahmedabad airport ">Ahmedabad Airport </option>								
    <option value="ahmedabad city ">Ahmedabad City </option>								
    <option value="kalyan ">Kalyan </option>								
    <option value="mumbai airport ">Mumbai Airport </option>								
    <option value="mumbai city ">Mumbai City </option>								
    <option value="navi mumbai ">Navi Mumbai </option>								
    <option value="surat ">Surat </option>								
    <option value="vadodara ">Vadodara </option>								
    <option value="thane ">Thane </option>								
						
  

<?php }else if($city=='dhule') { ?> 
	<option value="kalyan ">Kalyan </option>							
    <option value="mumbai airport ">Mumbai Airport </option>							
    <option value="mumbai city ">Mumbai City </option>							
    <option value="nashik ">Nashik </option>							
    <option value="navi mumbai ">Navi Mumbai </option>							
    <option value="thane ">Thane </option>							


<?php }else if($city=='goa') { ?> 
	<option value="kalyan ">Kalyan </option>							
    <option value="mumbai airport ">Mumbai Airport </option>							
    <option value="mumbai city ">Mumbai City </option>							
    <option value="navi mumbai ">Navi Mumbai </option>							
    <option value="pune ">Pune </option>							
    <option value="surat ">Surat </option>							
    <option value="thane ">Thane </option>							


<?php }else if($city=='malegaon') { ?> 
	<option value="kalyan ">Kalyan </option>							
    <option value="mumbai airport ">Mumbai Airport </option>							
    <option value="mumbai city ">Mumbai City </option>							
    <option value="navi mumbai ">Navi Mumbai </option>							
    <option value="nashik ">Nashik </option>							
    <option value="thane ">Thane </option>							
	

<?php }else if($city=='nadiad') { ?> 
<option value="kalyan">Kalyan </option>							
<option value="mumbai airport">Mumbai Airport </option>							
<option value="mumbai city">Mumbai City </option>							
<option value="navi mumbai ">Navi Mumbai </option>							
<option value="rajkot">Rajkot </option>							
<option value="thane">Thane </option>							
<option value="vadodara">Vadodara </option>							
<option value="vapi">Vapi </option>							

	
<?php } else if($city=='nashik') { ?>
<option value="aamby valley">Aamby Valley</option>							
<option value="adlabs imagica">Adlabs Imagica</option>							
<option value="ahmednagar">Ahmednagar</option>							
<option value="akola">Akola</option>							
<option value="amravati">Amravati</option>							
<option value="aurangabad">Aurangabad</option>							
<option value="bhusawal">Bhusawal</option>							
<option value="dhule">Dhule</option>							
<option value="indore">Indore</option>							
<option value="jalna">Jalna</option>							
<option value="jalgaon">Jalgaon</option>							
<option value="lonavla">Lonavla</option>							
<option value="mahableshwar">Mahableshwar</option>							
<option value="matheran">Matheran</option>							
<option value="malegaon">Malegaon</option>							
<option value="manmad">Manmad</option>							
<option value="nagpur">Nagpur</option>							
<option value="panchgani">Panchgani</option>							
<option value="pune">Pune</option>							
<option value="shirdi">Shirdi</option>							
<option value="surat">Surat</option>							
<option value="vadodara">Vadodara</option>							
<option value="vapi">Vapi</option>							


<?php } else if($city=='navsari') { ?>
	<option value="ahmedabad airport">Ahmedabad Airport</option>								
    <option value="ahmedabad city">Ahmedabad City</option>								
    <option value="kalyan ">Kalyan </option>								
    <option value="mumbai airport ">Mumbai Airport </option>								
    <option value="mumbai city ">Mumbai City </option>								
    <option value="navi mumbai ">Navi Mumbai </option>								
    <option value="thane ">Thane </option>								


<?php } else if($city=='pune') { ?>
<option value="aamby valley lonavla maharashtra">aamby valley lonavla maharashtra</option>							
<option value="adlabs imagica">Adlabs Imagica</option>							
<option value="ahmedabad airport">Ahmedabad Airpot</option>							
<option value="ahmedabad city">Ahmedabad City</option>							
<option value="ahmednagar">Ahmednagar</option>							
<option value="ahmednagar">Ahmednagar</option>							
<option value="akola">Akola</option>							
<option value="alibaug">Alibaug</option>							
<option value="amravati">Amravati</option>							
<option value="ananad">Anand</option>							
<option value="ankleshwar">Ankleshwar</option>							
<option value="aurangabad">Aurangabad</option>							
<option value="baramati">Baramati</option>							
<option value="bardoli">Bardoli</option>							
<option value="bhandardara">Bhandardara</option>							
<option value="bharuch">Bharuch</option>							
<option value="bhusawal">Bhusawal</option>							
<option value="boisar">Boisar</option>							
<option value="chiplun">Chiplun</option>							
<option value="dahanu">Dahanu</option>							
<option value="dahej">Dahej</option>							
<option value="daman">Daman</option>							
<option value="della resorts">Della Resorts</option>							
<option value="deolali">Deolali</option>							
<option value="dhule">Dhule</option>							
<option value="goa">Goa</option>							
<option value="ichhalkaranji">Ichhalkaranji</option>							
<option value="igatpuri">Igatpuri</option>							
<option value="indapur">Igatpuri</option>							
<option value="indore">Indore</option>							
<option value="jalgaon">Jalgaon</option>							
<option value="jalna">Jalna</option>							
<option value="karad">Karad</option>							
<option value="kashid beach">Kashid Beach</option>							
<option value="kolhapur">Kolhapur</option>							
<option value="kalyan">Kalyan</option>							
<option value="lavasa">Lavasa</option>							
<option value="lonavla">Lonavla</option>							
<option value="matheran">Matheran</option>							
<option value="mahableshwar">Mahableshwar</option>							
<option value="malegaon">Malegaon</option>							
<option value="manmad">Manmad</option>							
<option value="matheran">Matheran</option>							
<option value="mumbai airport">Mumbai Airport</option>							
<option value="mumbai city">Mumbai City</option>							
<option value="nashik">Nashik</option>							
<option value="nagpur">Nagpur</option>							
<option value="navsari">Navsari</option>							
<option value="navi mumbai">Navi Mumbai </option>							
<option value="nadiad">Nadiad</option>							
<option value="ozar">Ozar</option>							
<option value="palghar">Palghar</option>							
<option value="pandharpur">Pandharpur</option>							
<option value="panchgani">Panchgani</option>							
<option value="ratnagiri">ratnagiri</option>							
<option value="sangamner">Sangamner</option>							
<option value="sangli">Sangli</option>							
<option value="satara">Satara</option>							
<option value="shirdi">Shirdi</option>							
<option value="silvassa">Silvassa</option>							
<option value="sinnar">Sinnar</option>							
<option value="solapur">Solapur</option>							
<option value="surat">Surat</option>							
<option value="thane">Thane</option>							
<option value="trimbakeshwar">Trimbakeshwar</option>							
<option value="tuljapur">Tuljapur</option>							
<option value="vadodara">Vadodara</option>							
<option value="vapi">Vapi</option>							

	
<?php } else if($city=='rajkot') { ?>
	<option value="ahmedabad airport">Ahmedabad Airport</option>
	<option value="ahmedabad city">Ahmedabad City</option>
	<option value="mumbai airport">Mumbai Airport</option>
	<option value="mumbai city">Mumbai City</option>
	<option value="vadodara">Vadodara</option>

<?php } else if($city=='shirdi') { ?>
	<option value="ahmednagar">Ahmednagar</option>							
    <option value="aurangabad">Aurangabad</option>							
    <option value="kalyan">Kalyan</option>							
    <option value="mumbai airport">Mumbai Airport</option>							
    <option value="mumbai city">Mumbai City</option>							
    <option value="nashik">Nashik</option>							
    <option value="navi mumbai ">Navi Mumbai</option>							
    <option value="pune">Pune</option>							
    <option value="thane">Thane</option>							


<?php } else if($city=='surat') { ?>
	<option value="ahmedabad airport">Ahmedabad Airport</option>							
    <option value="ahmedabad cityt">Ahmedabad City</option>							
    <option value="anandt">Anand </option>							
    <option value="bharuch">Bharuch </option>							
    <option value="daman">Daman </option>							
    <option value="dahej">Dahej </option>							
    <option value="goa">Goa </option>							
    <option value="kalyan">Kalyan</option>							
    <option value="mumbai airport">Mumbai Airport</option>							
    <option value="mumbai city">Mumbai City</option>							
    <option value="nashik">Nashik</option>							
    <option value="navi mumbai ">Navi Mumbai</option>							
    <option value="pune">Pune</option>							
    <option value="thane">Thane</option>							
    <option value="vadodara">Vadodara </option>							
    <option value="vapi">Vapi </option>							

	
<?php } else if($city=='vadodara'){ ?>
	<option value="ahmedabad airport">Ahmedabad Airport</option>							
    <option value="ahmedabad cityt">Ahmedabad City</option>							
    <option value="bharuch">Bharuch </option>							
    <option value="daman">Daman </option>							
    <option value="kalyan">Kalyan </option>							
    <option value="mumbai airport">Mumbai Airport </option>							
    <option value="mumbai city">Mumbai City </option>							
    <option value="navi mumbai">Navi Mumbai </option>							
    <option value="pune">Pune </option>							
    <option value="rajkot">Rajkot </option>							
    <option value="surat">Surat </option>							
    <option value="thane">Thane </option>							
    <option value="vapi">Vapi </option>							


<?php } else if($city=='Rajkot') { ?>
	<option value="ahmedabad airport">Ahmedabad Airport</option>								
     <option value="ahmedabad city">Ahmedabad City</option>								
     <option value="kalyan ">Kalyan </option>								
     <option value="mumbai airport ">Mumbai Airport </option>								
     <option value="mumbai city ">Mumbai City </option>								
     <option value="navi mumbai ">Navi Mumbai </option>								
     <option value="pune ">Pune </option>								
     <option value="thane ">Thane </option>								
     <option value="vadodara ">Vadodara </option>								


<?php } else if($city=='Kanpur') { ?>
<?php } else if($city=='Lucknow') { ?>
<?php } else if($city=='Varanasi') { ?>
<?php } else if($city=='Allahabad') { ?>
<?php } else if($city=='Delhi') { ?>
<?php } else if($city=='Jaipur') { ?>
<?php } else if($city=='Udaipur') { ?>
<?php } else if($city=='Ajmer') { ?>
<?php } else if($city=='Agra') { ?>
<?php } else if($city=='Jodhpur') { ?>
<?php } else if($city=='Indore') { ?>
<?php } else if($city=='Ujjain') { ?>
<?php } else if($city=='Bhopal') { ?>
    	    	
<?php } ?>

</select>