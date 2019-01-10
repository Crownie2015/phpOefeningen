<?php

class SeizoenenGenerator {
    public function getSeizoenen() {
        $seizoenen = array();
        array_push($seizoenen, "Winter");
        array_push($seizoenen, "Lente");
        array_push($seizoenen, "Herfst");
        array_push($seizoenen, "Zomer");
        return $seizoenen;
    }
}
?>

<!DOCTYPE HTML>
<html>
    <head>
    <meta charset=utf-8>
    <title>Ingredienten</title>
    </head>
    <body>
        <pre>
        <?php
        $seizoenen= new SeizoenenGenerator();
        print_r($seizoenen->getSeizoenen());
        ?>
        </pre>
    </body>
</html>
