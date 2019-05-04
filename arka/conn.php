<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","earned_vote");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>