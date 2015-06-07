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
    $name .= $firstname;
    $name .= ' ';
    $name .= $lastname;
    $email = !empty($_POST['Email_Address']) ? trim($_POST['Email_Address']) : null;
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
    if ($_POST["Day_Option"] == 1) {
        $ticketid = 1;
        $camping = 0;
    }
    else if ($_POST["Day_Option"] == 2) {
        $ticketid = 2;
        $camping = 0;
    }
    else if ($_POST["Day_Option"]== 3) {
        $ticketid = 2;
        $camping = 1;
    }
    else if ($_POST["Day_Option"] == 4) {
        $ticketid = 3;
        $camping = 0;
    }
    else if ($_POST["Day_Option"]== 5) {
        $ticketid = 3;
        $camping = 1;
    }
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
        
        try{
            $result = $stmt->execute();
             if ($result) {
            header('location: buytickets.php');
        } 
        }
       
        catch(Exception $dberror){
            echo 'Exception -> ';
    var_dump($e->getMessage());
        }
    }
    else if (empty($_POST['First_Name'])|| empty($_POST['Last_Name'])) {
        header('location: InvalidName.php');
    }
    else {
      header('location: InvalidEmail.php');
    }
}
?>