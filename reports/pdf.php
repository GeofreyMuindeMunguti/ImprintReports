<?php
 require 'pdfcrowd.php';


$var = $_GET['id'];
$name ="pdfs/".$var."_report.pdf";
$url = "http://sn.itechsolutionskenya.co.ke/reports/dbcon.php?id=".$var;
try
{
    // create the API client instance
    $client = new \Pdfcrowd\HtmlToPdfClient("GeoMuinde", "7c56380cf7fea7b60700487357c0c181");
      // configure the conversion
    $client->setPageSize("Letter");
    $client->setOrientation("landscape");
    $client->setNoMargins(true);

    // run the conversion and write the result to a file
    $client->convertUrlToFile($url, $name);
    header("Location:main.php");

  echo '<script language="javascript">';
  echo 'alert(Report Created)';  //not showing an alert box.
  echo '</script>';
  exit;
}
catch(\Pdfcrowd\Error $why)
{
    // report the error
    error_log("Pdfcrowd Error: {$why}\n");

    // handle the exception here or rethrow and handle it at a higher level
    throw $why;
}

?>