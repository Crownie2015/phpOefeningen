<?php
class Movie {
    // public betekend dat eender van waar deze variabele kan aangepast worden
    // private betekend dat enkel in deze klasse de variabele van teopassing kan zijn
    public $title;
    private $rating;
    
    function __construct($title, $rating) {
       $this->title = $title;
       $this->setRating($rating); //hier forceren we dat enkel de functie zal worden opgeroepen
    }
    
    function getRating(){ // deze functie zorgt ervoor dat de rating toch gebruikt kan worden buiten deze klasse
        return $this->rating;
    }
    
    function setRating($rating){ //deze functie zorgt ervoor dat er toch een nieuwe rating kan toegevoegd worden
        if($rating == "G" || $rating =="PG" || $rating =="PG-13" ){ //we geven de voorwaarden mee!!!
           $this->rating = $rating; 
        } else {
            $this->rating = "NR";
        }
        
        
    }
}

$avengers = new Movie("Avengers", "DOG");

$avengers->setRating("Dog"); // we geven een foute waarde mee!!!!

echo $avengers->getRating(); // oproepen van de functie getRating binnen de klasse Movie