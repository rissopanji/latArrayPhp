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

$provinsi = array(
  "jabar" => array(
    "nama" => "Jawa Barat", "ibukota" => "Bandung"
  ),
  "jateng" => array("nama" => "JawaTengah", "ibukota" => "Semarang"),
  "jatim" => array("nama" => "Jawa Timur", "ibukota" => "Surabaya")
);
echo $provinsi["jatim"]["nama"] . " dengan ibukota di " . $provinsi["jatim"]["ibukota"];
?>




</html>