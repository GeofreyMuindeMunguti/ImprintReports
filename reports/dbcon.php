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
 
$sql2 = "SELECT  * FROM `report` WHERE `id` = '$weblink'";
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
$sql = "SELECT  * FROM `deals` WHERE `link` = '$rvar'";
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

   
       $sql3 = "SELECT * FROM improved ";
       $res3 = mysqli_query($conn,$sql3);

       $sql4 = "SELECT * FROM todo ";
       $res4 = mysqli_query($conn,$sql4);

$conn->close();
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
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
   <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

      



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
             <a href="javascript:q=(document.location.href);void(open('../dbcontrol/ourreports.php?url='+escape(q),'_self','resizable,location,menubar,toolbar,scrollbars,status'));">New Report</a>
         </li>
      
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../dbcontrol/ourdeals.php">Deals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger"href="../dbcontrol/view.php">Audited</a>
          </li>
          <li class="nav-item">
            <a class="active" href="../dbcontrol/ourreports.php">Reports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../reports/main.php">Home-Page</a>
          </li>
          <li class="nav-item">
          <button id="pdf" onclick="pdf()" style="text-decoration-color: white; color: blue; ">Print PDF</button>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
          <div id="content">

<nav class="navbar navbar-inverse" id= "navbar" style="background-color: white;">
  <div class="container-fluid" style=" margin: 1rem;
  background: white;
  box-shadow: 2px 4px 25px rgba(0, 0, 0, .1);
  border-radius: 12px;
  overflow: hidden;
  transition: all .2s linear;
  text-align:center;
  

  border: 2px solid black; ">
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
  <h2>Report on <?php  echo $var;?> by Imprint Africa </h2>
<div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row" style=" ">
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
  

  border: 2px solid #add8e6;"> 
 <div >
  <h3>Performance Analysis</h3>
  <div id="traffic analysis">
    <table class="table table-striped" id="myTable" >
              <tr style="background:  #1D2951; text-decoration-color: white;">
                  
                  <th class="white-w3ls" width="50%" style="color: white;">Actions</th>
                   
                    <th class="white-w3ls" width="50%" style="color: white;">Id</th>
                     
              </tr>

               <tbody>

    <?php
        if($rvisits>$visits){
          echo "<h4>Significant Improvement in site Performance Noted, The following could be the reasons as to why.</h4>";
        while($row3 = mysqli_fetch_assoc($res3))
        {
            echo '<tr>';
          
            echo '<td class="white-w3ls">'.$row3['reason'].'</td>';
            echo '<td class="white-w3ls">'.$row3['id'].'</td>';
            
            
            echo '</tr>';
        }
      }
      else 
      { echo "<h4>No Significant Improvement on site performance, This is what can be done.</h4>";
        while($row4 = mysqli_fetch_assoc($res4))
        {
            echo '<tr>';
          
            echo '<td class="white-w3ls">'.$row4['action'].'</td>';
            echo '<td class="white-w3ls">'.$row4['id'].'</td>';
            
            
            echo '</tr>';
        }

      }
    ?>
     </tbody>
 </table>
  </div>
  <div id="traffic share analysis">
    
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
