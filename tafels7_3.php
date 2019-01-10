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
                
            <?php
            for ($rij=0; $rij<=10; $rij++){
                print "<tr>";
                print "<td>" . $rij . "</td>";
                
                for ($kol=1; $kol<=10; $kol++){
                    $resultaat = $rij * $kol;   
                    print "<td>" . $resultaat . "</td>";
                    
                }
                print "</tr>";            
            }
            ?>
        </table> 
    </body>
</html>


 


