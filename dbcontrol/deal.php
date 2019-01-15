<?php
 
 include 'dbcon.php';

 $linkid = $_POST['link_id'];

 
$sql5 = "SELECT * FROM first WHERE id = $linkid";
$res = mysqli_query($conn,$sql5);
  while ($row = mysqli_fetch_array($res)) 
  {
     $link = $row['link'];
     $visits = $row['visits'];
     $rank = $row['rank'];
     $organics_traffic = $row['organics_traffic'];
     $direct_traffic = $row['direct_traffic'];
     $email_traffic = $row['email_traffic'];
     $social_traffic = $row['social_traffic'];
     $other_traffic = $row['other_traffic'];
     $date = $row['date'];
     $contact = $row['contact'];
     $details = $row['details'];
     $comments = $row['comments'];
     $scontact = $row['scontact'];
     $email = $row['e-mail'];
  }


 $package = $_POST['package'];
 $datefrom = $_POST['datefrom'];
 $description = $_POST['description'];
 $dateto = $_POST['dateto'];
 $dealdetails = $_POST['dealdetails'];
 $target_traffic = $_POST['target_traffic'];

 echo $dealdetails;

 $sql = "INSERT INTO `deals`(`link`, `visits`, `rank`, `organics_traffic`, `direct_traffic`, `email_traffic`, `social_traffic`, `other_traffic`, `date`, `contact`,`scontact`,`email`, `details`, `comments`,`package`,`description`,`datefrom`,`dateto`,`dealdetails`,`traffic_target`) VALUES ('$link','$visits','$rank','$organics_traffic','$direct_traffic','$email_traffic','$social_traffic','$other_traffic','$date','$contact','$scontact','$email','$details','$comments','$package','$description','$datefrom','$dateto','$dealdetails','$target_traffic')";

if ($conn->query($sql) === TRUE) {
    
     echo "<script>alert('Record successfully created');</script>";
  

     header("Location:view.php");


} else {
       echo "<script>alert('There seems to have been an error,You will be redirected to an help page')</script>";
        
       sleep(5);
       header("Location:view.php");

}

 

?>

 