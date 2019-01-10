<!DOCTYPE HTML>
<!--invoer.php-->
<html>
<head>
<meta charset=utf-8>
<title>Gebruikersinvoer</title>
</head>
<body>
<h1>
<?php
 print("geef getallen, ");
  $getal1 = $_GET["getal1"];
 $getal2 = $_GET["getal2"];
 print($_GET["getal1"]);
 print($_GET["getal2"]);
 $resultaat =$getal1 + $getal2;

 print(".");

 print("De som van deze getallen is : ". $resultaat);
 
 print(" ...");
 ?>
</h1>
</body>
</html>
