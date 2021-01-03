<?php
error_reporting (0);

class bsiMail 
{
    /* SAM: Do not change the email settings below else MAIL will not work. */

	private $isSMTP 		= false;
	private $emailFrom 		= 'booking@ukgcab.com';
	private $emailReplyTo   = 'booking@ukgcab.com';
    private $smtpHost 		= '';	
	private $smtpPort 		= 587;
	private $smtpUserName 	= '';			
	private $smtpPassword   = '';
	private $emailTo 		= '';
	private $emailSubject   = '';
	private $emailBody 		= '';	
	
	function bsiMail() {

		/** Global Ref: conf.class.php **/

		global $bsiCore;					

		//$this->isSMTP = true;		

		if($this->isSMTP == true){	
			//require_once "Mail.php"; // PEAR Mail package
            require_once ('Mail.php'); // PEAR Mail_Mime package		
			require_once ('Mail/mime.php'); // PEAR Mail_Mime package		

			$this->emailFrom = $bsiCore->config['conf_portal_name']."<booking@ukgcab.com>";		

		} else {

			$this->emailFrom = $bsiCore->config['conf_portal_name']."<booking@ukgcab.com>";
		}

		$this->emailReplyTo 	= $bsiCore->config['conf_portal_email'];

		if(!$this->smtpPort) {
			$this->smtpPort = NULL;
		}			

	}

    public function sendEMail($emailTo, $emailSubject, $emailBody){

		$this->emailTo = $emailTo;

		$this->emailSubject = $emailSubject;

		$this->emailBody = $emailBody;

		return (($this->isSMTP == true)? $this->sendSMTPMail() : $this->sendPHPMail());		

	}

	/* Send Email using PHP Mail Function */	

	public function sendPHPMail() {

		// To send HTML mail, the Content-type header must be set

		$emailHeaders  = 'MIME-Version: 1.0' . "\r\n";

		$emailHeaders .= 'Content-type: text/html; charset=utf-8' . "\r\n";

				

		// Additional headers

		$emailHeaders .= 'reply-to: '.$this->emailReplyTo.'' . "\r\n";

		$emailHeaders .= 'From: '.$this->emailFrom.'' . "\r\n";

		$retmsg = mail($this->emailTo, $this->emailSubject, $this->emailBody, $emailHeaders);		

		// Mail it

		if ($retmsg) {

			return true;

		}else {

			return "Failed to sent Message!";

		}

	}

			

	/* Send Email using SMTP authentication */	

	public function sendSMTPMail() {

		$emailHeaders = array (

			'From' => $this->emailFrom, 

			'To' => $this->emailTo, 			

			'reply-to' => $this->emailReplyTo, 

			'Subject' => $this->emailSubject,

			'Mime-Version' => "1.0",

			'Content-Type' => "text/html",

			'charset' => "utf-8",

			'Content-Transfer-Encoding' => "7bit");

		$smtpAuthData = array (

			'host' => $this->smtpHost, 

			'port' => $this->smtpPort,

			'auth' => true, 

            'localhost' => "ukgcab.com",

            'debug' => false,

			'username' => trim($this->smtpUserName), 

			'password' => trim($this->smtpPassword));

		$smtpMail = Mail::factory('smtp', $smtpAuthData);			

		$smtpMsg = $smtpMail->send($this->emailTo, $emailHeaders, $this->emailBody);

		if (PEAR::isError($smtpMail)) {
			return $smtpMail->getMessage();

		} else {
			return true;

		}	

	} 
		
}
?>