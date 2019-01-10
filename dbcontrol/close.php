
<?php

include 'dbcon.php';


?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="margin-left: 100px; margin-right: 100px; margin-top: 20px;">
<?php


include 'header.php';

?>
<?php

$id = $_GET['id'];

$sql4 = "SELECT * FROM first WHERE id = $id";
$res = mysqli_query($conn,$sql4);
  while ($row = mysqli_fetch_array($res)) 
  {
     $link = $row['link'];
     $linkid = $row['id'];
  }

?>
<script src="/vendor/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
<div>
	<h2>Organization</h2>
	<h3>
		<?php echo $link ?>
	</h3>
</div>
<div style="border: 1px solid red;">
<div style="margin-left: 20px; margin-right: 20px;  "> 
	<h3>Deal details</h3>
<form action="deal.php" method="post">

	<input type="text"name="link_id" value="<?php echo $linkid ?>" style="display: none;"></input>
   <select id="package" name="package">
							<?php 
                                   
                                   
                   
                                 $sql = "SELECT * FROM services ";
                                 $result = mysqli_query($conn,$sql);
                                            
                                                      while ($row = mysqli_fetch_array($result)) {
                                                   echo "<option value='" . $row['name'] ."'>" . $row['name'] ."</option>";
                                                 }
                                     
                                         ?>
     </select>
<label>Service Package to offer</label>
<div class="form-group">
    <label for="exampleInputPassword1">If other..describe</label>
    <textarea type="text" class="form-control" name="description" placeholder="Enter More details.."></textarea>
  </div>
   
  <div class="form-group">
    <label for="exampleInputPassword1">From</label>
    <input type="date" class="form-control" name="datefrom" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">To</label>
    <input type="date" class="form-control" name="dateto" placeholder="">
  </div>
  <h3>Targets</h3>
   <div class="form-group">

    <label for="exampleInputPassword1">  Traffic</label>
    <input type="number" class="form-control" name="target_traffic" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Other Comments</label>
    <textarea type="text" class="form-control" name="dealdetails" placeholder="Enter More details.."></textarea>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Done?,Tick then click submit</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</body>
</html>
 