<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
   
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #1D2951;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: grey;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body style=" ">

<div id="mySidenav" class="sidenav">
  <div class="sidebar-header">
    
        <h3 style="color: white;"> Quick Links</h3>
        </div>

         
        <hr/>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../dbcontrol/ourdeals.php"><i class="fa fa-thumbs-up"></i>Deals</a>  
  <a href="../dbcontrol/ourreports.php"><i class="fa fa-file-pdf-o"></i>Reports</a>  
  <a href="../dbcontrol/view.php"><i class="fa fa-hourglass-half "></i>Audited</a> 
  <a href="../reports/main.php"><i class="fa fa-thumbs-up"></i>Home-Page</a>  
 </div>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   


<body >
   
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="main.css">
  <nav class="navbar navbar-inverse" id= "navbar" style="background-color: #1D2951;">
  <div class="container-fluid">
    <div class="navbar-header">
        <img src="../dbcontrol/logo2.jpeg" class="img-circle" alt="Cinque Terre" width="40px" height="40px" width="50px">      
    </div>
     <h3 style="color: white;">Imprint Africa Report Generating System.</h3>
     
    
     <p style="color: white;">geofrey@imprintaf.com</p> 
      <ul class="nav navbar-nav">
       
     
    </ul>
    <ul class="nav navbar-nav navbar-right">

       </ul>

       <span style="font-size:30px;cursor:pointer; color: white;" onclick="openNav()">&#9776; Menu</span>
  </div>
</nav>

</body>
</html>