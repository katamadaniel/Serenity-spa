<!DOCTYPE html>
<html>
<head>
	<title>Spa</title>
	<meta charset="utf-8"> 
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<!--[if IE 6]>
		<link href="css/ie6.css" rel="stylesheet" type="text/css">
	<![endif]-->
	<!--[if IE 7]>
		<link href="css/ie7.css" rel="stylesheet" type="text/css">	
	<![endif]-->
</head>
<body>
<div id="page">
	<div id="header">
	<br>
	<table id="table-2">
			<tr> 
			<td width="88%"><a href="appointments.php">Appointments</a></td>
			<td width="12%">Admin<a href="connection/logout.php"> Log out</a></td>
			</tr>
			</table> 
	</div>
	<table id="spa">
	<tr>
	<td>
	<div id="body"> <a id="logo" href="#"><img src="images/logo.gif" width="272" height="201" alt="spa" title="spa"></a>
		<div class="content">
			<br><br>
			<div align="center"> 
			 
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
include(conn.php);

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
	  <th><a href="connection/update.php?id='.$id.'">Update</a></th>
	  <th><a href="connection/delete.php?id='.$id.'">Delete</a></th></tr>';

$i++;
}

?>
</table> 
<br>
<?php
include("conn.php");
$id = $_GET['id'];

$c_Z = mysql_query("SELECT * FROM appointments WHERE id = '$id' ");
$r_Z = mysql_fetch_array($c_Z);
extract($r_Z);
?>
<br>
<table width="90%" id="table-2">  
			<tr>
			<th>Manage Appointments</th> 
			</tr>
			</table>
<br>			
<form id="FormName" action="connection/update.php" method="post" 
name="FormName">
<table id="table-2">

<tr>
<th width="150" align="right"><label 
for="fullnames">Fullnames</label></th>
<td><input name="full_names" maxlength="50" type="text" 
value="<?php echo stripslashes($full_names) ?>"></td>
</tr>

<tr>
<th width="150" align="right"><label 
for="dob">Email</label></th>
<td><input name="email" maxlength="50" type="text" 
value="<?php echo stripslashes($email) ?>"></td>
</tr>

<tr>
<th width="150" align="right"><label 
for="gender">Phone Number </label></th>
<td><input name="phone_no" maxlength="50" type="text" 
value="<?php echo stripslashes($phone_no) ?>"></td>
</tr>

<tr>
<th width="150" align="right"><label 
for="nationality">Service</label></th>
<td><input name="service" maxlength="50" type="text" 
value="<?php echo stripslashes($service) ?>"></td>
</tr>

<tr>
<th width="150" align="right"><label 
for="passportno">Time</label></th>
<td><input name="time" maxlength="50" type="text" 
value="<?php echo stripslashes($time) ?>"></td>
</tr>
 
<tr>
<th colspan="2" align="center">
<input name="" type="submit" value="Update">
<input name="id" type="hidden" value="<?php echo $id ?>">
</th>
</tr>

</table>
</form>
			
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