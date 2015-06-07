<?php
session_start();
require 'conn.php';
 
 
//Check if the visitor has already submitted the registration form
if(isset($_POST['register'])){
    
    //Retrieve the field values from the registration form.
    $rfid = null;
    $name = null;
    $birthdate = null;
    $createddate = date('Y-m-d');
    $balancetotal = null;
    $entered = null;
    $sex = null;
    $camping = null;
    $ticketid = null;
    $ticketcode = null;
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;
    $email = !empty($_POST['Email']) ? trim($_POST['Email']) : null;
    //check if the supplied username already exists.
    $sql = "SELECT COUNT(username) AS num FROM customer_festival WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':username', $username);
    $stmt->execute();
    //Fetch the row.
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //If the provided username already exists - display error.
    if($row['num'] > 0){
        header('location: InvalidLogin.php');
    }
    else{
        $passwordHash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));
    $sql = "INSERT INTO customer_festival (RFID, Name, BirthDate, Sex, Balance_Total, DateCreated, Entered, Camping, TicketID, TicketCode, username, password,email)"
            . " VALUES (:RFID, :Name, :BirthDate, :Sex,:Balance_Total, :DateCreated, :Entered, :Camping, :TicketID, :TicketCode, :username, :password, :email)";
    $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':RFID', $rfid);
    $stmt->bindValue(':Name', $name);
    $stmt->bindValue(':BirthDate', $birthdate);
        $stmt->bindValue(':Sex', $sex);
    $stmt->bindValue(':Balance_Total', $balancetotal);
    $stmt->bindValue(':DateCreated', $createddate);
            $stmt->bindValue(':Entered', $entered);
    $stmt->bindValue(':Camping', $camping);
    $stmt->bindValue(':TicketID', $ticketid);
    $stmt->bindValue(':TicketCode', $ticketcode);
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $passwordHash);
    $stmt->bindValue(':email', $email);
    
    //Execute the statement and insert the new account.
    $result = $stmt->execute();
        if($result){
        header('location: buytickets.php');
    }
    }

    
}
 
?>
