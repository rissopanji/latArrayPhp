<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lat array</title>
  <!--CSS -->
  <link rel="stylesheet" type="text/css" href="./Style.css">
</head>
<body>
  
</body>

<?php
echo "Nama : Rissopan Panji Prayogi <br> NIM : 10120729 <br> <br>";

//Fungsi krsort
$ibukota = array( 
  "jabar" => "Bandung", 
  "jateng" => "Semarang", 
  "jatim" => "Surabaya", 
  "bali" => "Denpasar", 
  "banten" => "Serang" 
  ); 
  krsort($ibukota); 
  echo "Data Setelah Diurutkan "; 
  echo "<pre>" . print_r($ibukota, true) . "</pre>"; 
  ?>
  
  
  
  



</html>