<?php
$grondtal = ($_POST["getal"]);
?>

<!DOCTYPE HTML>
<html>
    <head>
        <style>
            table, td, th {border:3px inset black; text-align:center;}          
        </style>
    <meta charset=utf-8>
    <title>Tafels uitvoer</title>
    </head>
    <body>
    <h1>Tafels</h1>
        <table>
            <th colspan="2">De tafel van <?php print $grondtal ?></th>        
            <?php
            for ($i=1; $i<=10; $i++){
            $resultaat = $grondtal * $i;

            print "<tr>";
            print "<td>" . $i . " maal " . $grondtal . "</td>";
            print "<td>" . $resultaat . "</td>";
            print "</tr>";
            }
            ?>
        </table> 
    </body>
</html>


 


