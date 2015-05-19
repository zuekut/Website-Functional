<?php 

$link = mysql_connect("localhost", "root", "") or die(mysql_error());

//select database
mysql_select_db("festival", $link);

//counting bars. currently percentage of TOTAL AMOUNT of tickets

$all_tickets = mysql_query("SELECT * FROM ticket", $link);
$all_tickets_count = mysql_num_rows($all_tickets);

//ticket availabilities
$type1 = mysql_query("SELECT * FROM ticket WHERE Type = 1", $link);
$type1_available = mysql_query("SELECT * FROM ticket WHERE Type = 1 AND Available = 1", $link);
$type1_available_count = mysql_num_rows($type1_available);
$type1_count = mysql_num_rows($type1);
$type1_percent = ($type1_available_count / $type1_count) * 100;

$type2 = mysql_query("SELECT * FROM ticket WHERE Type = 2", $link);
$type2_available = mysql_query("SELECT * FROM ticket WHERE Type = 2 AND Available = 1", $link);
$type2_available_count = mysql_num_rows($type2_available);
$type2_count = mysql_num_rows($type2);
$type2_percent = ($type2_available_count / $type2_count) * 100;

$type3 = mysql_query("SELECT * FROM ticket WHERE Type = 3", $link);
$type3_available = mysql_query("SELECT * FROM ticket WHERE Type = 3 AND Available = 1", $link);
$type3_available_count = mysql_num_rows($type3_available);
$type3_count = mysql_num_rows($type3);
$type3_percent = ($type3_available_count / $type3_count) * 100;

//change color of progress bar according to availability. Currently yellow = 75% or less. Red = 25% or less.
$progressbar_type1 = "progress-bar-success";
if($type1_percent < 75){
    $progressbar_type1 = "progress-bar-warning";
}
if($type1_percent < 25){
    $progressbar_type1 = "progress-bar-danger";
}

$progressbar_type2 = "progress-bar-success";
if($type2_percent < 75){
    $progressbar_type2 = "progress-bar-warning";
}
if($type2_percent < 25){
    $progressbar_type2 = "progress-bar-danger";
}

$progressbar_type3 = "progress-bar-success";
if($type3_percent < 75){
    $progressbar_type3 = "progress-bar-warning";
}
if($type3_percent < 25){
    $progressbar_type3 = "progress-bar-danger";
}



//testing purposes
//echo "$type1_count Rows\n";
//echo "$type2_count Rows\n";
//echo "$type3_count Rows\n";
//echo "$all_tickets_count Total Tickets\n";
//echo "$type1_percent %\n";
//echo "$type1_available_count \n";
?>