<?php
require 'conn.php';
session_start();
if(isset($_POST['submit'])){
 $errMsg = '';
 $username = trim($_POST['username']);
 $password = trim($_POST['password']);
 
if($username == '' || $password == '')
{ 
 $errMsg .= 'Error';
 header('location:registerinvalid.php');
 }
 
 if($errMsg == ''){
 $records = $pdo->prepare('SELECT username,password FROM members WHERE username = :username');
 $records->bindParam(':username', $username);
 $records->execute();
 //Fetch_Assoc returns an array indexed by column name as returned in the result set
 $results = $records->fetch(PDO::FETCH_ASSOC);
 if(count($results) > 0 && password_verify($password, $results['password'])){
 $_SESSION['username'] = $results['username'];
 header('location:buytickets.php');
 exit;
 }else{
  header('location:registerinvalid.php');
 }
 }
 }
?>