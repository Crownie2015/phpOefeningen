<?php
//oefening8_1_thermometer.php

class Thermometer {  
    private $temperatuur;  

    public function __construct($graden){
        $this->temperatuur=$graden;
    }
    
    //SETTERS
public function setTemperatuur($graden){
    $this->temperatuur = $graden;
}

    public function setVerhoogTemperatuur($graden) {   
        $this->temperatuur = $temperatuur + $graden;  
    }       
    public function setVerlaagTemperatuur($graden) {   
        $this->temperatuur = temperatuur - $graden;  
    }  
    //GETTERS
    public function getTemperatuur() {   
        return $this->temperatuur;  
    } 
} 

$therm1 = new Thermometer('25'); 


?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thermometer</title>
    </head>

    <body>
        <?php
        print "De temperatuur is nu : " . $therm1->getTemperatuur();
        print "<br />";
        print "Ik verlaag de temperatuur :";
        print $therm1->setVerhoogTemperatuur($therm1->getTemperatuur());
       
            
        ?>
    </body>
</html>