<?php 

//$link = mysql_connect("localhost", "root", "mitalex123") or die(mysql_error());

define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', 'mitalex123');
define('MYSQL_HOST', 'localhost');
define('MYSQL_DATABASE', 'festival');



$pdo = new PDO("mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DATABASE,
    MYSQL_USER,
    MYSQL_PASSWORD
    );
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

?>