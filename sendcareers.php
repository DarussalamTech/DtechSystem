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

$user_reply_body = "Thank you for applying job , We will process your application as soon as ".
				   " possbile and reply you immediately <br/> Thanks and Regards <br/>".
				   " Dtech Systems.";

$add_addresses = array(
				  "info@dtechsystems.co.uk",
				  //"ali.abbas@darussalampk.com",
				  "zain@darussalampk.com",
				  "talha@dtechsystems.co.uk"
				  );

$file_size = 0;
$file_extensions = array("doc","pdf","docx","DOCX","PDF","DOC","odt");
$file_ext = "";
if(isset($_FILES['file'])){
	$file_size = $_FILES['file']['size'];
	$filename =  $_FILES['file']['name'];
	$info = new SplFileInfo($filename);
	$file_ext = $info->getExtension();
} 

if($file_size <=0 || $file_size >5242880){
	session_start();
	$_SESSION['message'] = "Either you have not provided your cv ".
						   "or your file size is greater than our limit";
	header('Location: career.php');
}
else if (!in_array($file_ext,$file_extensions)){
	session_start();
	$_SESSION['message'] = "Your Provided file is not supported";
	header('Location: career.php');
}
else {
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

	$mail->Subject    = $_POST['job_designation']." CV has been submitted By ".$_POST['name'];

	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$body = " Hi admin Following Mr ".$_POST['name'].
			" has sent you cv for job of ".$_POST['job_designation']."<br/>";
	$body.= " Candidate Name  ".$_POST['name'];
	$body.= "<br/> Candidate Name  ".$_POST['name'];
	$body.= "<br/> Job Designation  ".$_POST['job_designation'];
	$body.= "<br/> Job Type ".$_POST['job_type'];		
	$mail->MsgHTML($body);


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
	
	$mail->AddAttachment( $_FILES['file']['tmp_name']);


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

		$mail->Subject    = "Your Cv has been sent to hr ".
							"regarding job of ".$_POST['job_designation'];

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
	$_SESSION['message'] = "Your application has been recieved";

	//send message to user that his or her email has been recieved

  }
  header('Location: career.php');
}



//sen

?>