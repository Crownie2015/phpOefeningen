<?php

$getal = 2;
switch ($getal){
    case "1":
        print ("één");
        break;
    case "2":
        print("twee");
        break;
    case "3":
        print("Drie");
        break;
    case "4":
        print("Vier");
        break;
    case "5":
        print("Vijf");
        break;
    default:
        print $getal;
        break;
}
?>
<html>
    <body>
        <h1><?php $getal; ?></h1>
    </body>
</html>

