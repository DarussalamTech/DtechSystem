<?php

//send email action here
require_once('phpmailer/class.phpmailer.php');
define("admin_email",     "info@dtechsystems.co.uk");
define("admin_name",     "Dtech Systems");
define("smtp_host",     "smtp.gmail.com");
define("smtp_user",     "darussalamemail2014@gmail.com");
define("smtp_pass",     "abc123AB");
define("smtp_secure",     "ssl");
define("smtp_port",     "465");
define("allowed_host_1",     "localhost");
define("allowed_host_2",     "dtechsystems.co.uk");

$user_reply_body = "Thank you for contacting us , We will process your enquiry as soon as ".
				   " possbile and reply you immediately <br/> Thanks and Regards <br/>".
				   " Dtech Systems.";

$add_addresses = array("info@dtechsystems.co.uk","zain@darussalampk.com");

//email_sent

if(
	 (strstr($_SERVER['HTTP_HOST'],allowed_host_1) || strstr($_SERVER['HTTP_HOST'],allowed_host_2)) &&
	 	isset($_POST['name'])
	){
	
	$mail             = new PHPMailer();


	if(!strstr($_SERVER['HTTP_HOST'],allowed_host_2)){
		$mail->IsSMTP(); // telling the class to use SMTP
		$mail->Host       = smtp_host; // SMTP server
		$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
		                                           // 1 = errors and messages
		                                           // 2 = messages only
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->Host       = smtp_host; // sets the SMTP server
		$mail->Port       = smtp_port;                    // set the SMTP port for the GMAIL server
		$mail->Username   = smtp_user; // SMTP account username
		$mail->Password   = smtp_pass;        // SMTP account password
		$mail->SMTPSecure = smtp_secure;
	}


	$mail->SetFrom($_POST['email'], $_POST['name']);

	$mail->AddReplyTo($_POST['email'], $_POST['name']);

	$mail->Subject    = "Contact Us message from ".$_POST['name'];

	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

	$mail->MsgHTML($_POST['message']);


	if(is_array($add_addresses)){
		foreach($add_addresses as $email){
			if(!empty($email)){
				$mail->AddAddress($email, admin_name);
			}
		}
	}
	else {
		$mail->AddAddress(admin_email, admin_name);
	}
	


	if(!$mail->Send()) {
	  //echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  
	  	//sending customer reply
	  	$mail             = new PHPMailer();

	  	if(!strstr($_SERVER['HTTP_HOST'],allowed_host_2)){
			$mail->IsSMTP(); // telling the class to use SMTP
			$mail->Host       = smtp_host; // SMTP server
			$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
			                                           // 1 = errors and messages
			                                           // 2 = messages only
			$mail->SMTPAuth   = true;                  // enable SMTP authentication
			$mail->Host       = smtp_host; // sets the SMTP server
			$mail->Port       = smtp_port;                    // set the SMTP port for the GMAIL server
			$mail->Username   = smtp_user; // SMTP account username
			$mail->Password   = smtp_pass;        // SMTP account password
			$mail->SMTPSecure = smtp_secure;
		}
		
		$mail->SetFrom("no_reply@dtechsystems.co.uk", "No Reply");

		$mail->AddReplyTo("no_reply@dtechsystems.co.uk", "No Reply");

		$mail->Subject    = "Reply From Dtech Systems";

		$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

		$mail->MsgHTML($user_reply_body);


		$mail->AddAddress($_POST['email'], $_POST['name']);
		

		if(!$mail->Send()) {
		  //echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		  //echo "Message sent!";
		}

	}

	session_start();
	$_SESSION['message'] = "Your enquiry has been recieved";

	//send message to user that his or her email has been recieved

}

header('Location: contact_us.html');
//sen

?>