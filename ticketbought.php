<?php
session_start();
require 'conn.php';
require_once 'libs/PHPMailer/PHPMailerAutoload.php';
$m = new PHPMailer;
        $m ->isSMTP();
        $m->SMTPAuth = true;
        $m -> SMTPDebug = 0;
        $m -> Host = 'smtp.gmail.com';
        $m-> Port = 587;
      $m -> Username = 'rj.festival.2015@gmail.com';
        $m -> Password = 'rjfestival2015';
if (isset($_SESSION['Email'])) {

    $balancetotal = null;
    $entered = null;
    $camping = $_SESSION['Camping'];
    $firstname = $_SESSION['FirstName'];
    $lastname = $_SESSION['LastName'];
    $ticketid = $_SESSION['TicketId'];
    $sex = $_SESSION['Sex'];
    $ticketname = $_SESSION['TicketName'];
    $name = NULL;
    $priceticket = $_SESSION['TicketPrice'];
    $email_message = NULL;
    $dberror = null;
    $ticketcode = $_SESSION['TicketCode'];
    $checkifbought = NULL;
    $birthdate = $_SESSION['BirthDay'];
    $email = $_SESSION['Email'];
    $name .= $firstname;
    $name .= ' ';
    $name .= $lastname;
    //check if the supplied email already exists.
    $sql = "SELECT COUNT(Email) AS num FROM customer_festival WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    //Fetch the row.
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $sql = "SELECT Count(TicketId) AS ticket FROM customer_festival WHERE email = :email and TicketID is Null";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $checkifbought = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($checkifbought['ticket'] == 0) {
        if ($row['num'] > 0) {
            $sql = "Update customer_festival "
                    . "Set Name = :Name, BirthDate = :BirthDate, Sex = :Sex, Camping = :Camping, TicketID = :TicketID, TicketCode=:TicketCode "
                    . "Where Email = :email;";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':Name', $name);
            $stmt->bindValue(':BirthDate', $birthdate);
            $stmt->bindValue(':Sex', $sex);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':Camping', $camping);
            $stmt->bindValue(':TicketID', $ticketid);
            $stmt->bindValue(':TicketCode', $ticketcode);
            //EMAIL FOR SENDING
            
            function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:");
	  return str_replace($bad,"",$string);
	}
        $m ->addEmbeddedImage('img/festivalwood_logo.png', 'logo_rj');
            $email_message .= "<p><b>           RJ Festival 2015!</b></p>\r\n";
            $email_message .= "<img src = 'cid:logo_rj'>";
            $email_message .= "<p>Full Name: ".clean_string($name)."</p>\r\n";
	$email_message .= "<p>BirthDate: ".clean_string($birthdate)."</p>\r\n";
	$email_message .= "<p>Sex: ".clean_string($sex)."</p>\r\n";
        $email_message .= "<p>Ticket type: ".clean_string($ticketname)."</p>\r\n";
        $email_message .= "<p>Price: ".clean_string($priceticket)."$</p>\r\n";
	$email_message .= "<p>Ticket code: <b>".clean_string($ticketcode)."</b></p>\r\n";
        $email_message .= " \r\n";
        $email_message .= "<b style = 'color:red'>Print this e-mail, because you will need to provide your ticket code at the entrance"
                . "in order to enter the festival! The staff of RJ Festival wishes you a nice time!</b>\r\n";
       $m->setFrom('rj.festival.2015@gmail.com', 'RJ Festival');
        $m -> FromName = 'RJ Festival';
        $m ->addReplyTo('rj.festival.2015@gmail.com','RJ Festival');
        $m ->addAddress($email, $name);
$m ->isHTML(true);
        $m ->Body = $email_message;
        
     if(!$m->Send())
{
echo "Mailer Error: " . $m->ErrorInfo;
}

            try {
                $result = $stmt->execute();
            } catch (Exception $dberror) {
                echo 'Exception -> ';
                var_dump($e->getMessage());
            }
        }
    }
    else{
        header('location: ticketalreadybought.php');
    }
}
?>

