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

$nama=array("Alica","Muhammad","Rahmanita", 
"Idris","Hamizan","Dewi"); 
$dicari="Idris"; 
if(in_array($dicari,$nama)) 
echo "Nama $dicari ada di array."; 
else 
echo "Nama $dicari tidak ada di array"; 
echo "<br>"; 
$dicari="dewi"; 
if(in_array($dicari,$nama)) 
echo "Nama $dicari ada di array."; 
else 
echo "Nama $dicari tidak ada di array"; 
?>

?>



</html>