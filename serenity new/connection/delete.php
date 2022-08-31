<?php 
include("conn.php");
$id = $_GET['id'];

mysql_query("DELETE FROM appointments WHERE id = '$id' ");
mysql_close();
 
header("Location:../admin.php");
?>
 