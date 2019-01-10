<?php
 
$servername = "db4free.net";
$username = "geofrey";
$password = "geofrey7543";
$dbname = "ourtrick";



 
 //echo "<script>alert('$weblink')</script>";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

} 
else
{
	//echo "connected as successfully";

}
 
  
?>