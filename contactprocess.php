<?php
if(isset($_POST['Email_Address'])) {
	session_start();
	require_once 'libs/PHPMailer/PHPMailerAutoload.php';
        $m = new PHPMailer;
        $m ->isSMTP();
        $m->SMTPAuth = true;
        $m -> SMTPDebug = 0;
        $m -> Host = 'smtp.gmail.com';
        $m-> Port = 587;
      $m -> Username = 'rj.festival.2015@gmail.com';
        $m -> Password = 'rjfestival2015';
       // $m -> Port = 587;
	function died($error) {
		echo "Sorry, but there were error(s) found with the form you submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}
	
	if(!isset($_POST['Full_Name']) ||
		!isset($_POST['Email_Address']) ||
		!isset($_POST['Telephone_Number']) ||
		!isset($_POST['Your_Message']) 		
		) {
		died('Sorry, there appears to be a problem with your form submission.');		
	}
	
	$full_name = $_POST['Full_Name'];
	$email_from = $_POST['Email_Address'];
	$telephonenumber = $_POST['Telephone_Number'];
	$comments = $_POST['Your_Message'];
	
	$error_message = "";
	
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(preg_match($email_exp,$email_from)==0) {
  	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
  if(strlen($full_name) < 2) {
  	$error_message .= 'Your Name does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
  	$error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  
  if(strlen($error_message) > 0) {
  	died($error_message);
  }	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:");
	  return str_replace($bad,"",$string);
	}
	 
	$email_message .= "<p>Full Name: ".clean_string($full_name)."</p>\r\n";
	$email_message .= "<p>Email: ".clean_string($email_from)."</p>\r\n";
	$email_message .= "<p>Telephone_Number: ".clean_string($telephonenumber)."</p>\r\n";
	$email_message .= "Message: ".clean_string($comments)."\r\n";
      // $m -> From = 'no-reply@fontys.nl';
       $m->setFrom($email_from, 'Maniak');
        $m -> FromName = $full_name;
        $m ->addReplyTo($email_from,$full_name);
        $m ->addAddress('rj.festival.2015@gmail.com', 'RJ');
$m ->isHTML(true);
        $m ->Body = $email_message;
        
     if(!$m->Send())
{
echo "Mailer Error: " . $m->ErrorInfo;
}
else
{
echo "Message has been sent";
header("Location: thankyou.php");
}
?>

<?php
}
die();

