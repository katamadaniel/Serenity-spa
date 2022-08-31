<?php
include("conn.php");

$fname = trim(mysql_real_escape_string($_POST["fname"]));
		$lname = trim(mysql_real_escape_string($_POST["lname"]));
		$username = trim(mysql_real_escape_string($_POST["username"]));
		$password = trim(mysql_real_escape_string($_POST["password"]));
		$contacts = trim(mysql_real_escape_string($_POST["contacts"]));
		$address = trim(mysql_real_escape_string($_POST["address"]));
		
$results = mysql_query("INSERT INTO members (id, fname, lname, username, password, contacts, address)
	VALUES ('', '$fname', '$lname', '$username', '$password', '$contacts', '$address')");

if($results) { header("location:../index.html"); } else { die('Invalid query: '.mysql_error()); }

?>