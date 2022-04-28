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

$ibukota=array("jabar" =>"Bandung", 
"jateng"=>"Semarang", 
"jatim"=>"Surabaya", 
"bali" =>"Denpasar", 
"banten"=>"Serang"); 

if(array_key_exists("bali",$ibukota)) 
echo "Bali ada di array<br>"; 
else 
echo "Bali tidak ada di array<br>"; 
if(array_key_exists("sumut",$ibukota)) 
echo "Sumut ada di array"; 
else 
echo "Sumut tidak ada di array"; 
?>



</html>