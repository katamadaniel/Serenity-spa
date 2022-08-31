<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<title>Spa</title>
	<meta charset="utf-8"> 
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" href="images/logo.png">

	<!--[if IE 6]>
		<link href="css/ie6.css" rel="stylesheet" type="text/css">
	<![endif]-->
	<!--[if IE 7]>
		<link href="css/ie7.css" rel="stylesheet" type="text/css">	
	<![endif]-->
</head>
<body>
<div id="page"> 
<br>
	<table id="spa">
	<tr>
	<td>
	<div id="body"> <a id="logo" href="#"><img src="images/logo.gif" width="272" height="201" alt="spa" title="spa"></a>
		<div class="content">		
			<div align="center"> 
			<br><br> 
			<table width="90%" id="table-2"> 
			<tr>
			<th colspan="3">Admin Panel</th>
			</tr> 
			<tr>
			<th width="75%">Current Appointments</th> 
			<td width="11%"><a href="admin.php">Home</a></td>
			<td width="14%">(Admin)<a href="connection/logout.php"> Log out</a></td>
			</tr>
			</table>
			<br>
	  <table id="table-2">
	  <tr>
	  <th>Appointment Number</th>		
	  <th>Full Names</th>
	  <th>E-mail</th>
	  <th>Phone Number</th>
	  <th>Service Booked</th>
	  <th>Date and Time</th>
	  <td colspan="2">Manage Appointments</td>
	  </tr>
			<?php
$mysql_hostname = "localhost";
    $mysql_user = "myspa";
    $mysql_password = "myspa";
    $mysql_database = "myspa";
    $prefix = "";
    $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
    mysql_select_db($mysql_database, $bd) or die("Could not select database");

$query="SELECT * FROM appointments";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();
 
$i=0;
while ($i < $num) {
$id=mysql_result($result,$i,"id");
$name=mysql_result($result,$i,"full_names");
$email=mysql_result($result,$i,"email");
$phone=mysql_result($result,$i,"phone_no");
$service=mysql_result($result,$i,"service"); 
$datetime=mysql_result($result,$i,"time");   

echo ' 
	  <tr>
	  <td>'.$id.'</td>
	  <td>'.$name.'</td>
	  <td>'.$email.'</td> 
	  <td>'.$phone.'</td> 
	  <td>'.$service.'</td> 
	  <td>'.$datetime.'</td>
	  <th><a href="update.php?id='.$id.'">Update</a></th>
	  <th><a href="connection/delete.php?id='.$id.'">Delete</a></th></tr>';

$i++;
}

?>
</table> 
<br>
<table width="90%" id="table-2">  
			<tr>
			<th>Manage Appointments</th> 
			</tr>
			</table>			
	</div>  
	</div>
	</div>
	</td>
	</tr>
	</table>
<br>
	<table id="table-2">
			<tr>
			<th><a class="facebook" href="#">Facebook</a></th>
			<td><p>serenity@gmail.com</p></td>
			<td><p>Cell: 0702 789 321</p></td>
			<td><a class="twitter" href="#">Twitter</a></td> 
			<td>SERENITY &copy; Copyright &copy; 2017 All rights reserved </td>  
			</tr>
			</table>   
			<br>
</body>
</html>