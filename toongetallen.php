<?php
    //toongetallen.php

    require_once("includes/GetallenReeksMaker.php");

?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>GetallenReeks</title>
    </head>

    <body>
        <?php
            $getallenReeksMaker = new GetallenReeksMaker();
            $tabel = $getallenReeksMaker->getReeks();

        ?>
        <h2>Vertikaal</h2>
        <table border="1">
            <tbody>
                <?php
                //asort($tabel); de functie sorteert de getallen nu, maar hier kan het ook
                    foreach ($tabel as $getal) {
                        ?>
                        <tr>
                            <td><?php print($getal); ?></td>
                        </tr>
                        <?php
                    }
                ?>


            </tbody>
        </table>

        <br />
        <h2>Horizontaal</h2>
        <table border="1">
            <tbody>
            <tr>
                <?php
                
                    foreach ($tabel as $getal) {
                        ?>
                        
                            <td><?php print($getal); ?></td>
                       
                        <?php
                    }
                ?>
                 </tr>

                
            </tbody>
        </table>
    </body>

</html>