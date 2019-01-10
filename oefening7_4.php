<?php
    //toongetallen.php

    require_once("includes/maakLottoGetallen.php");

?>


<!DOCTYPE HTML>
<html>
    <head>
        <style>
            table, td, th {border:3px inset black; text-align:center;}          
        </style>
    <meta charset=utf-8>
    <title>Oefening 7.4 - Lottogetallen</title>
    </head>
    <body>
    <h1>De winnende lotto-getallen</h1>

    <?php
            $maakLottoGetallen = new MaakLottoGetallen();
            $tabel = $maakLottoGetallen->maakLotto();

        ?>
            <table border = "1">
                
                <?php


                print $getal;
               
                $i=1;
                while ($i <= 42){
                    if($i % 7 == 1){
                        print "<tr>";
                    }
                    print "<td>" . $i . "</td>";
                    $i++;

                    if($i % 7 == 1){
                        print "</tr>";
                    }
                }

                
                ?>
            </table> 


        
    </body>
</html>
