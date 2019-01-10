<?php 
$servername = "db4free.net";
$username = "geofrey";
$password = "geofrey7543";
$dbname = "ourtrick";



$weblink = $_GET["id"];
 
 //echo "<script>alert('$weblink')</script>";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
  
$sql = "SELECT  * FROM `deals` WHERE `link` = '$weblink'";
 $result = mysqli_query($conn,$sql) or die (mysqli_error());

 while($rows = mysqli_fetch_assoc($result))
    {
     $var = $rows['link'];
     $comments = $rows['comments'];
     $visits = $rows['visits'];
     $details = $rows['details'];
     $contacts = $rows['contact'];
     $rank = $rows['rank'];
     //$date = $rows['date'];
     $date = $rows['date'];
     $date2 = "2018-10-2";
     //traffic share
     $gtraffic = $rows['organics_traffic'];
     $dtraffic = $rows['direct_traffic'];
     $etraffic = $rows['email_traffic'];
     $straffic = $rows['social_traffic'];
     $otraffic = $rows['other_traffic'];
     $package = $rows['package'];
     $desc = $rows['description'];
     $traffic_target = $rows['traffic_target'];

     //echo $var;
     //header('Location: main.php');
   

    }

  $sql2 = "SELECT  * FROM `report` WHERE `link` = '$weblink'";
  $result2 = mysqli_query($conn,$sql2) or die (mysqli_error());

 while($rows2 = mysqli_fetch_assoc($result2))
    {
     $rvar = $rows2['link'];
     $rcomments = $rows2['comments'];
     $rvisits = $rows2['visits'];
     //$rdetails = $rows2['details'];
     //$rcontacts = $rows2['contact'];
     $rrank = $rows2['rank'];
     //$date = $rows['date'];
     $rdate = $rows2['date'];
     $rdate2 = "2018-10-2";
     //traffic share
     $rgtraffic = $rows2['organics_traffic'];
     $rdtraffic = $rows2['direct_traffic'];
     $retraffic = $rows2['email_traffic'];
     $rstraffic = $rows2['social_traffic'];
     $rotraffic = $rows2['other_traffic'];
     //$rpackage = $rows2['package'];
     //$rdesc = $rows2['description'];
     $rtraffic_target = '0';

     //echo $var;
     //header('Location: main.php');
   

    }
     
$conn->close();
?>
  
<!DOCTYPE html>
<html>
<head>
	<title>Our Trick</title>
	 
	  <link href="style.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="main.css">
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

	    
</head>
 
<body style="  margin-left:10%;
        margin-right:10%;  id="print">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
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
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
      
    <script type="text/javascript">
      var url = document.URL();
    </script>
   
   
     <a href="javascript:q=(document.location.href);void(open('../dbcontrol/ourreports.php?url='+escape(q),'_self','resizable,location,menubar,toolbar,scrollbars,status'));">New Report</a>
      
     
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
 <button id="pdf" onclick="pdf()" style="text-decoration-color: white; color: white; margin-right: auto;">Print PDF</button>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   


<div id="content">

<nav class="navbar navbar-inverse" id= "navbar" style="background-color: white;">
  <div class="container-fluid">
    <div class="navbar-header">
    		<img src="logo2.jpeg" class="img-circle" alt="Cinque Terre" width="40px" height="40px" width="50px">      
    </div>
     <h3>Imprint Africa Reporting Generating System.</h3>
 
    
     <p></p> 
    <ul class="nav navbar-nav navbar-right">

       </ul>
  </div>
</nav>
<div id="content">
  <h2>Report on <?php echo $_GET['id'];?> by Imprint Africa </h2>
<div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row" style="border: 1px solid #add8e6">
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                  <div class="card-body pb-0">
                     
                    <div class="text-value" style="text-align: center;"><?php $orgtraf = $rgtraffic*$rvisits*100; echo(round($orgtraf));?></div>
                    <div style="text-align: center;">Organic search</div>
                    <h3 style="text-align: center;"><?php echo $rgtraffic*100; ?>%</h3>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart1" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-info">
                  <div class="card-body pb-0">
                     
                    <div class="text-value" style="text-align: center;"><?php $dirtraf = $rdtraffic*$rvisits*100; echo(round($dirtraf)); ?></div>
                    <div style="text-align: center;">Direct Traffic</div>
                    <h3 style="text-align: center;"><?php echo $rdtraffic*100; ?>%</h3>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart2" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                  <div class="card-body pb-0">
                     
                    <div class="text-value" style="text-align: center;"><?php $emtraf = $retraffic*$rvisits*100; echo(round($emtraf));?></div>
                    <div style="text-align: center;">Email Traffic</div>
                    <h3 style="text-align: center;"><?php echo $retraffic*100; ?>%</h3>
                  </div>
                  <div class="chart-wrapper mt-3" style="height:70px;">
                    <canvas class="chart" id="card-chart3" height="70"></canvas>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger">
                  <div class="card-body pb-0">
                     
                    <div class="text-value" style="text-align: center;"><?php $soctraf = $rstraffic*$rvisits*100; echo(round($soctraf));?></div>
                    <div style="text-align: center;">Social Traffic</div>
                    <h3 style="text-align: center;"><?php echo $rstraffic*100; ?>%</h3>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
                    <canvas class="chart" id="card-chart4" height="70"></canvas>
                  </div>
                </div>
              </div>
                
              <!-- /.col-->
            </div>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-5">
                    <h4 class="card-title mb-0">Total Traffic</h4>
                    <div class="small text-muted">Upto Date: <?php echo $rdate;?></div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-7 d-none d-md-block">
                    <button class="btn btn-primary float-right" type="button">
                      <i class="icon-cloud-download"></i>
                    </button>
                     
                    </div>
                  </div>
                  <!-- /.col-->
                </div>
                <!-- /.row-->
                <div class="chart-wrapper" style="height:300px;margin-top:40px;">
                  <div id="chartContainer" style="height: 300px; width: 70%; float:left; position: relative;margin-left: auto;margin-right: auto; margin-right:5px; text-align:center">
  
            </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="row text-center">
                   
                   
                   
                  </div>
                </div>
              </div>
            </div>

              <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-5">
                    <h4 class="card-title mb-0">Traffic Share</h4>
                    <div class="small text-muted">Upto Date: <?php echo $date;?></div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-7 d-none d-md-block">
                    <button class="btn btn-primary float-right" type="button">
                      <i class="icon-cloud-download"></i>
                    </button>
                     
                    </div>
                  </div>
                  <!-- /.col-->
                </div>
                <!-- /.row-->
                <div class="chart-wrapper" style="height:300px;margin-top:40px;">
                  <div id="piechart" style="height: 300px; width: 70%; float:left; position: relative;margin-left: auto;margin-right: auto; margin-right:5px; text-align:center">
  
               </div>
                </div>
              </div>
               <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-5">
                    <h4 class="card-title mb-0">Traffic Share</h4>
                    <div class="small text-muted">Upto Date: <?php echo $rdate;?></div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-7 d-none d-md-block">
                    <button class="btn btn-primary float-right" type="button">
                      <i class="icon-cloud-download"></i>
                    </button>
                     
                    </div>
                  </div>
                  <!-- /.col-->
                </div>
                <!-- /.row-->
                <div class="chart-wrapper" style="height:300px;margin-top:40px;">
                  <div id="piechart2" style="height: 300px; width: 70%; float:left; position: relative;margin-left: auto;margin-right: auto; margin-right:5px; text-align:center">
  
               </div>
              </div>
              </div>
             
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-5">
                    <h4 class="card-title mb-0">Progress Graph</h4>
                    <div class="small text-muted">Upto Date: <?php echo $rdate;?></div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-7 d-none d-md-block">
                    <button class="btn btn-primary float-right" type="button">
                      <i class="icon-cloud-download"></i>
                    </button>
                     
                    </div>
                  </div>
                  <!-- /.col-->
                </div>
                <!-- /.row-->
                <div class="chart-wrapper" style="height:300px;margin-top:40px;">
                  <div id="chartContainer3" style="height: 300px; width: 70%; float:left; position: relative;margin-left: auto;margin-right: auto; margin-right:5px; text-align:center">
  
            </div>
            </div>
               
          </div>
           <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-5">
                    <h4 class="card-title mb-0">Website Rank</h4>
                    <div class="small text-muted">Upto Date: <?php echo $rdate;?></div>
                  </div>
                  <!-- /.col-->
                  <div class="col-sm-7 d-none d-md-block">
                    <button class="btn btn-primary float-right" type="button">
                      <i class="icon-cloud-download"></i>
                    </button>
                     
                    </div>
                  </div>
                  <!-- /.col-->
                </div>
                <!-- /.row-->
                <div class="chart-wrapper" style="height:300px;margin-top:40px;">
                  <div id="chartContainer2" style="height: 300px; width: 70%; float:left; position: relative;margin-left: auto;margin-right: auto; margin-right:5px; text-align:center">
  
            </div>
            </div>
               
          </div>
            </div>

 
<div style=" margin: 1rem;
  background: white;
  box-shadow: 2px 4px 25px rgba(0, 0, 0, .1);
  border-radius: 12px;
  overflow: hidden;
  transition: all .2s linear;
  text-align:center;
  

  border: 2px solid black;"> 
<div>
  <div >
    <div>
        <img src="logo2.jpeg" class="img-circle" alt="Cinque Terre" width="40px" height="40px" width="50px">  
    </div>
    <p>Report By Imprint Africa</p>
     <ul class="nav navbar-nav navbar-right">

       </ul>
        <p id="date"></p>
    <script type="text/javascript">
      var date = new Date();
      var tday = date.getDate();
      var month = date.getMonth();
      var year = date.getFullYear();

       document.getElementById("date").innerHTML = "Report Compiled on: "+ tday+ "/" + month +"/"+ year;

    </script>
  </div>
</div>
</div>
</div>
	 
   
	  
 
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">
//total traffic grap
window.onload = function () {
	 var vst =  "<?php echo $visits ?>"/1;
   var rankn = "<?php echo $rank ?>"/1;
   var name ="<?php echo $var ?>";
   var dates = "<?php echo $date ?>";
   var traffic_target = "<?php echo $traffic_target ?>"/1;

   if (traffic_target===0)
   {
    traffic_target = vst;
   }

   //traffic share
  
   var gt = "<?php echo $gtraffic ?>"*100;
   var dt = "<?php echo $dtraffic ?>"*100;
   var et = "<?php echo $etraffic ?>"*100;
   var st = "<?php echo $straffic ?>"*100;
   var ot = "<?php echo $otraffic ?>"*100;

   var tt = gt+dt+et+st+ot;
   var ext = 100-tt;
   var eext = ext/1;


   //report variables

   var rvst =  "<?php echo $rvisits ?>"/1;
   var rrankn = "<?php echo $rrank ?>"/1;
   var rname ="<?php echo $rvar ?>";
   var rdates = "<?php echo $rdate ?>";
   var rtraffic_target = "<?php echo $rtraffic_target ?>"/1;

   if (rtraffic_target===0)
   {
    rtraffic_target = rvst;
   }
   var rgt = "<?php echo $rgtraffic ?>"*100;
   var rdt = "<?php echo $rdtraffic ?>"*100;
   var ret = "<?php echo $retraffic ?>"*100;
   var rst = "<?php echo $rstraffic ?>"*100;
   var rot = "<?php echo $rotraffic ?>"*100;

   var rtt = rgt+rdt+ret+rst+rot;
   var rext = 100-rtt;
   var reext = rext/1;
    

	var chart = new CanvasJS.Chart("chartContainer", {
		title:{
			text: "Scale (/1)"              
		},
		data: [              
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "column",
			dataPoints: [
				{ label: "<?php echo $date ?>",  y: vst  },
				{ label: "<?php echo $rdate ?>",  y: rvst  }
			]
		}
		]
	});
	chart.render();



//rank graph

var chart2 = new CanvasJS.Chart("chartContainer2", {
  animationEnabled: true,
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "Scale(/1)"
  },
  axisY: {
    title: "Number"
  },
  data: [{        
    type: "column",  
    showInLegend: true, 
    legendMarkerColor: "grey",
    legendText: "No= in thousands",
    dataPoints: [      
      { y: rankn, label: dates },
      { y: rrankn,  label: rdates},
      
    ]
  }]
});
chart2.render();

//progress line graphs
var chart3 = new CanvasJS.Chart("chartContainer3", {
  title: {
    text: "Progress Graph"
  },
  axisX: {
    valueFormatString: "MMM YYYY"
  },
  axisY2: {
    title: "Rating in numerical format",
    prefix: "",
    suffix: "m"
  },
  toolTip: {
    shared: true
  },
  legend: {
    cursor: "pointer",
    verticalAlign: "top",
    horizontalAlign: "center",
    dockInsidePlotArea: true,
    itemclick: toogleDataSeries
  },
  data: [{
    type:"line",
    axisYType: "secondary",
    name: "Total Traffic",
    showInLegend: true,
    markerSize: 0,
    yValueFormatString: "#,###",
    dataPoints: [   
      { x: new Date(2018, 10, 01), y: vst },
      { x: new Date(2018, 11, 01), y: rvst },
      { x: new Date(2018, 12, 01), y: traffic_target }
      
   //note raw data for target..    
      
    ]
  },
  {
    type: "line",
    axisYType: "secondary",
    name: "Country Rank",
    showInLegend: true,
    markerSize: 0,
    yValueFormatString: "$#,###k",
    dataPoints: [
       
    ]
  }]
});
chart3.render();

function toogleDataSeries(e){
  if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = true;
  } else{
    e.dataSeries.visible = false;
  }
  chart3.render();
}

//pie chart

var chart4 = new CanvasJS.Chart("piechart", {
  animationEnabled: true,
  title: {
    text: "Traffic Share - "+dates
  },
  data: [{
    type: "pie",
    startAngle: 240,
    yValueFormatString: "##0.00\"%\"",
    indexLabel: "{label} {y}",
    dataPoints: [
      {y: gt, label: "Organic Search"},
      {y: dt, label: "Direct Traffic"},
      {y: et, label: "Email Traffic"},
      {y: st, label: "Social Traffic"},
      {y: ot, label: "Other Sources"},
       {y:eext, label:"Website specific"}
       
    ]
  }]
});
chart4.render();

//pie chart 2
var chart5 = new CanvasJS.Chart("piechart2", {
  animationEnabled: true,
  title: {
    text: "Traffic Share - "+rdates
  },
  data: [{
    type: "pie",
    startAngle: 240,
    yValueFormatString: "##0.00\"%\"",
    indexLabel: "{label} {y}",
    dataPoints: [
      {y: rgt, label: "Organic Search"},
      {y: rdt, label: "Direct Traffic"},
      {y: ret, label: "Email Traffic"},
      {y: rst, label: "Social Traffic"},
      {y: rot, label: "Other Sources"},
      {y:reext, label:"Website specific"}
     
    ]
  }]
});
chart5.render();
}

function pdf()
{
   window.print();
}

</script>
 
    <script type="text/javascript">
      var date = new Date();
      var tday = date.getDate();
      var month = date.getMonth();
      var year = date.getFullYear();

       document.getElementById("date").innerHTML = "Report Compiled on: "+ tday+ "/" + month +"/"+ year;

    </script>
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
    <script type="text/javascript">
     
    function topdf()
     { 

      }
    
    </script>
</body>
</html>

</body>
</html>