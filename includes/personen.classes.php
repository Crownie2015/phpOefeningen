<?php
//personen.classes.php

class Persoon {
    private $naam;
    public $leeftijd;
// GETTERS
    public function getNaam() {
        return $this->naam;
    }

    public function gettLeeftijd(){
        return $this->leeftijd;
    }

// SETTERS
    public function setNaam($naam){
        if($naam != ""){
            $this->naam=$naam;
        } else {
            $this->naam="anoniem";
        }
    }

    public function setLeeftijd($leeftijd){
        if($leeftijd > 0){
            $this->leeftijd = $leeftijd;
        } else {
            $this->leeftijd = 0;
        }
    }
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Personen</title>
    </head>

    <body>
        <?php
            $persoon = new Persoon();

            /* VIA SETTER */
            $persoon->setLeeftijd(20); //geldige leeftijd
            $persoon->setLeeftijd(-15); //GEEN geldige leeftijd
            $persoon->setNaam("Yoerik");

            /* Rechtstreeks via publieke variabele */
            $persoon->leeftijd = 20; //geldige leeftijd
            $persoon->leeftijd = -15; //geen geldige leeftijd

            print $persoon->getNaam();
            print "<br />";
            print $persoon->gettLeeftijd();
           
        ?>
    </body>
</html>