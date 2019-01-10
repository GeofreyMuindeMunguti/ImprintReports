<?php 
  // create curl resource
  $ch = curl_init();
  // set url 
  curl_setopt($ch, CURLOPT_URL, "https://api.similarweb.com/v1/website/cnn.com/global-rank/global-rank?api_key=e97db2173bf7411cba4d26f0c6a2a2bb&start_date=2018-08&end_date=2018-09&main_domain_only=falsehttps://api.similarweb.com/v1/website/cnn.com/global-rank/global-rank?api_key=3e7c1d992b4044d7a55685cb436c28ca&start_date=2016-01&end_date=2016-03&main_domain_only=false");
  // $output contains the output json
  $output = curl_exec($ch);

  $info = $output;
  
  //echo $info;
  // close curl resource to free up system resources 
  curl_close($ch);
  // {"name":"Baron","gender":"male","probability":0.88,"count":26}
  //var_dump(json_decode($output, true));
?>