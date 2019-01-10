<?php
//persoon.constructor.php

class Persoon {
    private $naam;

    public function __construct($naam){
        $this->naam = $naam;
    }

    public function getNaam() {
        return $this->naam;
    }

    public function setNaam($naam) {
        $this->naam = $naam;
    }

}
?>


<?php
$persoon = new Persoon("Paul");
print($persoon->getNaam());

print "<br />";

$persoon->setNaam("Tom");
print($persoon->getNaam());
?>
