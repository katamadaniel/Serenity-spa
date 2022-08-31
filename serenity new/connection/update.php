<?php
include("conn.php");

$id = $_POST['id'];
 
$name=trim(mysql_real_escape_string($_POST["full_names"]));
$email=trim(mysql_real_escape_string($_POST["email"]));
$phone=trim(mysql_real_escape_string($_POST["phone_no"]));
$service=trim(mysql_real_escape_string($_POST["service"])); 
$datetime=trim(mysql_real_escape_string($_POST["time"]));  
		
$rsUpdate = mysql_query("UPDATE appointments
	SET  full_names = '$name',  email = '$email',  phone_no = '$phone',  time = '$datetime' WHERE id = '$id' ");

if($rsUpdate) { header("location:../admin.php"); } else { die('Invalid query: '.mysql_error()); }
?>