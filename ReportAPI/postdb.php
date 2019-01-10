<?php 
$servername = "db4free.net";
$username = "geofrey";
$password = "geofrey7543";
$dbname = "ourtrick";

 
$info = $_POST["postvisits"];
$tlink = $_POST["postlink"];
$trank = $_POST["postrank"];
$contact =$_POST["postcontact"];
$scontact = $_POST["postscontact"];
$email = $_POST["postemail"];
$details = $_POST["postdetails"];
$comments = $_POST["postcomments"];
$googlest = $_POST["postgst"];
$directt = $_POST["postdt"];
$emailt = $_POST["postet"];
$socialt = $_POST["postft"];
$othert = $_POST["postot"];
$datet = $_POST["posttt"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 
$sql2 = " INSERT INTO `report`(`link`,`visits`,`rank`,`organics_traffic`,`direct_traffic`,`email_traffic`,`social_traffic`,`other_traffic`,`date`,`comments`) VALUES ('$tlink','$info','$trank','$googlest','$directt','$emailt','$socialt','$othert','$datet','$comments')";
 


if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

 
$conn->close();
?>