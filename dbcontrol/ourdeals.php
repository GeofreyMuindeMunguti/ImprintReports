<?php
include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	table, th {
            border: 1px solid grey;
         }

         #myInput {
  background-image: url('searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;

}
  </style>
</head>
 
<body style="  margin-left:10%;
        margin-right:10%;  margin-top: 20px;">
<?php
 include 'header.php';
?>
 
 
 <div class="table-responsive">  
 <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for link.." title="Type in a name">
 <h3>Closed Deals</h3> 
    <div style="height: 600px;
overflow: auto;
border: 1px solid #666;
background-color: #ccc;
padding: 8px;">
    
  <table class="table table-striped" id="myTable" >
              <tr style="background: black; text-decoration-color: white;">
              	  
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
                        <th class="white-w3ls" width="20%" style="color: white;">Operation</th>
                         <th class="white-w3ls" width="10%" style="color: white;"> Record Id</th>


              </tr>

               <tbody>
      
        <?php
            
          $sql3 = "SELECT * FROM deals ";
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

                      echo '<td>100%</td>';
             echo '<td><a href="../ReportAPI/home.html?id='.$row3['link'].'">REPORT </a></td>';
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
 </body>
</html>