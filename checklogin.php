<?php
require 'conn.php';
session_start();
if(isset($_POST['submit'])){
 $errMsg = '';
 $username = trim($_POST['username']);
 $password = trim($_POST['password']);
 $human = trim($_POST['humancheck']);
if($username == '' || $password == '')
{ 
 $errMsg .= 'Error';
 header('location:register.php');
 }
 if($errMsg == ''){
 $records = $pdo->prepare('SELECT username,password FROM customer_festival WHERE username = :username');
 $records->bindParam(':username', $username);
 $records->execute();
 //Fetch_Assoc returns an array indexed by column name as returned in the result set
 $results = $records->fetch(PDO::FETCH_ASSOC);
 if(count($results) > 0 && password_verify($password, $results['password'])){
 $_SESSION['username'] = $results['username'];
 header('location:buytickets.php');
 exit;
 }
 }
 }
?>