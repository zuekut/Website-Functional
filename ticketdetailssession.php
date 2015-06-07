<?php

session_start();
require 'conn.php';
if (isset($_POST['Email_Address'])) {

    $balancetotal = null;
    $entered = null;
    $camping = null;
    $ticketid = null;
    $sex = null;
    $name = NULL;
    $dberror = null;
    $ticketprice = null;
    $ticketname = NULL;
    $ticketcode = mt_rand(20000,50000);
    if ($_POST["optionsSex"] == 1) {
        $sex = 'M';
        
    }
    else if ($_POST["optionsSex"] == 2) {
        $sex = 'F';
    }
    
    $birthdate = !empty($_POST['Birth_Date']) ? trim($_POST['Birth_Date']) : null;
    $firstname = !empty($_POST['First_Name']) ? trim($_POST['First_Name']) : null;
    $lastname = !empty($_POST['Last_Name']) ? trim($_POST['Last_Name']) : null;
    $email = !empty($_POST['Email_Address']) ? trim($_POST['Email_Address']) : null;
    $name .= $firstname;
    $name .= ' ';
    $name .= $lastname;
    if ($_POST["Day_Option"] == 1) {
        $ticketid = 1;
        $camping = 0;
        $ticketprice = 50;
        $ticketname = '1 Day Ticket';
    }
    else if ($_POST["Day_Option"] == 2) {
        $ticketid = 2;
        $camping = 0;
        $ticketprice = 90;
        $ticketname = '2 Day Ticket';
    }
    else if ($_POST["Day_Option"]== 3) {
        $ticketid = 2;
        $camping = 1;
        $ticketprice = 140;
        $ticketname = '2 Day Ticket + Camping';
    }
    else if ($_POST["Day_Option"] == 4) {
        $ticketid = 3;
        $camping = 0;
        $ticketprice = 130;
        $ticketname = '3 Day Ticket';
    }
    else if ($_POST["Day_Option"]== 5) {
        $ticketid = 3;
        $camping = 1;
        $ticketprice = 210;
        $ticketname = '3 Day Ticket + Camping';
    }
    $sql = "SELECT Count(TicketId) AS ticket FROM customer_festival WHERE email = :email and TicketID is Not Null";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $checkifbought = $stmt->fetch(PDO::FETCH_ASSOC);
    $sql = "SELECT COUNT(Email) AS num FROM customer_festival WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    //Fetch the row.
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //check if the supplied email already exists.
    $sql = "SELECT COUNT(Email) AS num FROM customer_festival WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    //Fetch the row.
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $sql = "SELECT COUNT(ticketcode) AS num FROM customer_festival WHERE ticketcode = :ticketcode";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':ticketcode', $ticketcode);
    $stmt->execute();
    $uniquecode = $stmt->fetch(PDO::FETCH_ASSOC);
    //For checking if the ticketcode doesn't already exist in the db
    if ($uniquecode['num'] > 0) {
        while ($uniquecode['num'] > 0) {
            $ticketcode = mt_rand(20000,50000);
        $sql = "SELECT COUNT(ticketcode) AS num FROM customer_festival WHERE ticketcode = :ticketcode";
        $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':ticketcode', $ticketcode);
    $stmt->execute();
    $uniquecode = $stmt->fetch(PDO::FETCH_ASSOC);
    }  
    }
    
    if ($row['num'] > 0 && $checkifbought['ticket']==0) {
        
    $_SESSION['Sex'] = $sex;
    $_SESSION['TicketId'] = $ticketid;
    $_SESSION['Camping'] = $camping;
    $_SESSION['FirstName'] = $firstname;
    $_SESSION['LastName'] = $lastname;
    $_SESSION['Email'] = $email;
    $_SESSION['TicketCode'] = $ticketcode;
    $_SESSION['TicketName'] = $ticketname;
    $_SESSION['TicketPrice'] = $ticketprice;
    $_SESSION['BirthDay'] = $birthdate;
    header('location: paymentprocessing.php');
        
        }
        else if($checkifbought['ticket']> 0){
        header('location: ticketalreadybought.php');
    }
    }
    else if (empty($_POST['First_Name'])|| empty($_POST['Last_Name'])) {
        header('location: InvalidName.php');
    }
    else {
      header('location: InvalidEmail.php');
    }
 ?>