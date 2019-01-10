<?php 
//cursistenEnMedewerkers_2.php 
class Personen {
    public function __construct($naam, $voornaam, $aantal){
        $this->naam = $naam;
        $this->voornaam = $voornaam;
        $this->aantal = $aantal;
    }

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
    public function getAantalCursisten(){
        return $this->aantal;
    }

}// einde class Medewerker
class Cursist extends Personen {
    public function getAantalCursussen(){
        return $this->aantal;
    }

}// einde class Cursist

// De opgegeven code hieronder niet wijzigen (komt uit de oefening) 
$cursist = new Cursist("Peeters", "Jan", 3);  
$medewerker = new Medewerker("Janssens", "Tom", 8);  
   
 ?> 
 <!DOCTYPE HTML> 
    <html>  
        <head>   
        <title>Cursisten en medewerkers</title>  
        </head>  
        <body>   
            <h1>Namen</h1>   
                <ul>    
                    <li><?php print($cursist->getVollNaam() . " volgt " . $cursist->getAantalCursussen() . " cursus(sen)");?></li> 
                    <li><?php print($medewerker->getVollNaam() . " begeleidt " . $medewerker->getAantalCursisten() . " cursist(en)");?></li>  
                </ul>  
        </body> 
    </html>