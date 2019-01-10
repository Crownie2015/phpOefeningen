<?php
    //oefening7_1.php
    require_once("includes/tekstgrootte.inc.php");
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Oefening 7.1</title>
        <link rel="stylesheet" type="text/css" href="includes/mystyle.css">
    </head>
    <body>
    <?php
        //maak een tabel met tekstgrootte - Haal de functie getFontSize op
            $tekstGrootteMaker = new TekstGrootteMaker();
            $tabel = $tekstGrootteMaker->getFontSize();

        ?>
    <h1>Oefening 7.1</h1>

        <div id="container">
        <?php
        // Haal elk element uit de array die verkregen is door de functie getFontSize
            foreach($tabel as $tekstgrootte){
                //maak de tekstgrootte het verkregen getal en voeg px eraan toe.
                $tekstgrootte .="px;";           
                print "<div style='font-size:$tekstgrootte' >PHP is FANTASTISCH</div>";
        }
           //de tabel in omgekeerde volgorde.  
           //tel de tabel           
            $tabelgrootte = count($tabel);

            //loop door de tabel en laat het laatste element vallen! Anders dubbele tekst!!

            for ($i=$tabelgrootte-2;$i>=0;$i--){
                
                //maak de tekstgrootte het verkregen getal en voeg px eraan toe.    
                $tekstgrootte = $tabel[$i] ."px;";
                print "<div style='font-size:$tekstgrootte'>PHP is FANTASTISCH</div>";

            }
        
        ?>
        </div>        
    </body>
</html>