<?php

$servername = "db4free.net";
$username = "geofrey";
$password = "geofrey7543";
$dbname = "ourtrick";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

  
$sql = "SELECT  * FROM `constants`";
 $result = mysqli_query($conn,$sql) or die (mysqli_error());

 while($rows = mysqli_fetch_assoc($result))
    {
    	$key = $rows['apipass'];

    }


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="home.js"></script>
</head>
<body>

</body>
</html>