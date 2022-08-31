
<?php 
include("conn.php");
 
 	$name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $service=$_POST['service'];
    $datetime=$_POST['datetime']; 

$query = "INSERT INTO appointments(full_names, email, phone_no, service, time)VALUES('$name', '$email', '$phone', '$service', '$datetime')";
mysql_query($query);

header("location:../index.html");

mysql_close();
?>