 <?php
include 'dbcon.php';
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
 <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Imprint Africa</title>

    <!-- Bootstrap core CSS -->
    <link href="../reports/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="../reports/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../reports/css/resume.min.css" rel="stylesheet">



  </head>

  <body id="page-top" >

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav" style="background-color: rgba(15, 16, 51, 1) !important">
      <a class="navbar-brand js-scroll-trigger" href="#page-top" >
        <span class="d-block d-lg-none">Imprint Africa Report Generating System</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="logo2.jpeg" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../dbcontrol/ourdeals.php">Deals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger"href="../dbcontrol/view.php">Audited</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../dbcontrol/ourreports.php">Reports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../reports/main.php">Home-Page</a>
          </li>
          
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
         
<div style="width: 100%; margin-left: 2px; margin-right: 2px; margin-top: 2px; margin-bottom:2px; border-style: dashed  ">
<div style=" width: 100%;  "> 
  <h3>Organization Name: <?php echo $link;?></h3>
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

      </section>

      <hr class="m-0">

       </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../reports/vendor/jquery/jquery.min.js"></script>
    <script src="../reports/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../reports/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../reports/js/resume.min.js"></script>

  </body>

</html>
