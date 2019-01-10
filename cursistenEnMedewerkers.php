<?php 
//cursistenEnMedewerkers.php 
class Personen {
    private $naam;

    //SETTERS
    public function setFamilienaam($naam){
        $this->naam = $naam;
    }
    public function setVoornaam($voornaam) {
        $this->voornaam = $voornaam;
    }
    //GETTERS
    public function getFamilienaam() {
        return $this->naam;
    }
    public function getVoornaam() {
        return $this->naam;
    }    
    public function getVollNaam(){
        $volnaam = $this->naam;
        $volnaam .= ", " .$this->voornaam;
        return $volnaam;
    }

}// einde class Personen

class Medewerker extends Personen {

}// einde class Medewerker
class Cursist extends Personen {

}// einde class Cursist

// De opgegeven code hieronder niet wijzigen (komt uit de oefening) 
    $cursist = new Cursist();  
    $medewerker = new Medewerker();  
    $cursist->setFamilienaam("Peeters");  
    $cursist->setVoornaam("Jan");  
    $medewerker->setFamilienaam("Janssens");  
    $medewerker->setVoornaam("Tom"); 
 ?> 
 <!DOCTYPE HTML> 
    <html>  
        <head>   
        <title>Cursisten en medewerkers</title>  
        </head>  
        <body>   
            <h1>Namen</h1>   
                <ul>    
                    <li><?php print($cursist->getVollNaam());?></li> 
                    <li><?php print($medewerker->getVollNaam());?></li>  
                </ul>  
        </body> 
    </html>