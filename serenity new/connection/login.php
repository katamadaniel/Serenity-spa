
<?php
$username=$_POST['uname'];
$password=$_POST['password']; 

//setup names of database and table to use
$db_name = "myspa";
$table_name = "users";

//connect to server and select database
$connection = @mysql_connect("localhost", "myspa", "myspa")
or die(mysql_error());
$db = @mysql_select_db($db_name, $connection) or
die(mysql_error());



//build and issue the query
$sql = "SELECT * FROM $table_name WHERE username ='$username' AND password = '$password' ";

$result = @mysql_query($sql,$connection) or die(mysql_error());

//get the number of rows in the result set
$num = mysql_num_rows($result);

//print a message or redirect elsewhere, based on result
if ($num != 0) {
   header("Location:../admin.php");
} else {
   header("Location:../blog.html");
   exit;
}
?>