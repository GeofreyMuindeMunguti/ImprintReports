 <?php
include 'dbcon.php';
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
            <a class="active"href="../dbcontrol/view.php">Audited</a>
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
        
 <div class="table-responsive">  
 <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for link.." title="Type in a name">
 <h3>Proposal Deals</h3>  
    <div style="height: 600px;
overflow: auto;
border: 1px solid #666;
background-color: #ccc;
padding: 8px;"> 

  <table class="table table-striped" style="background-color: white;"  id="myTable">
              <tr style="background:  #1D2951; text-decoration-color: white;">
                  
                  <th class="white-w3ls" width="10%" style="color: white;"> Link</th>
                  <th class="white-w3ls" width="20%" style="color: white;">Contact</th>
                  <th class="white-w3ls" width="20%" style="color: white;">Visits</th>
                  <th class="white-w3ls" width="20%" style="color: white;">Comments</th>
                   <th class="white-w3ls" width="20%" style="color: white;">Type</th>
                    <th class="white-w3ls" width="20%" style="color: white;">Organic Traffic</th>
                     <th class="white-w3ls" width="20%" style="color: white;">Direct Traffic</th>
                      <th class="white-w3ls" width="20%" style="color: white;">Email Traffic</th>
                       <th class="white-w3ls" width="20%" style="color: white;">Social Traffic</th>
                        <th class="white-w3ls" width="20%" style="color: white;">Other Sources Traffic</th>
                        <th class="white-w3ls" width="20%" style="color: white;">Stage</th>
                        <th class="white-w3ls" width="20%" style="color: white;">Deal</th>
                         <th class="white-w3ls" width="10%" style="color: white;"> Record Id</th>


              </tr>

               <tbody>
      
        <?php
            
          $sql3 = "SELECT * FROM first ";
          $res = mysqli_query($conn,$sql3);
            
        while($row3 = mysqli_fetch_assoc($res))
        {
            echo '<tr>';
          
            echo '<td class="white-w3ls">'.$row3['link'].'</td>';
            echo '<td class="white-w3ls">'.$row3['contact'].'</td>';
            echo '<td class="white-w3ls">'.$row3['visits'].'</td>';
             echo '<td class="white-w3ls">'.$row3['comments'].'</td>';
             echo '<td class="white-w3ls">' . $row3['details'] . "</td>";
              echo '<td class="white-w3ls">' . $row3['organics_traffic'] . "</td>";
                echo '<td class="white-w3ls">' . $row3['direct_traffic'] . "</td>";
                  echo '<td class="white-w3ls">' . $row3['email_traffic'] . "</td>";
                    echo '<td class="white-w3ls">' . $row3['social_traffic'] . "</td>";
                      echo '<td class="white-w3ls">' . $row3['other_traffic'] . "</td>";

                      echo '<td>10%</td>';
             echo '<td><a href="close.php?id='.$row3['id'].'">CLOSE </a></td>';
            echo '<td class="white-w3ls">'.$row3['id'].'</td>';
            
            echo '</tr>';
        }
        ?>
     </tbody>
 </table>
</div>
 <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
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
