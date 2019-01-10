<?php
//interfaces.php

interface Omvang {
    public function getGrootte(); //LET op! De functie heeft geen inhoud en geen accolades.
}// einde interface Omvang

class Persoon implements Omvang {
    private $lengte;

    public function __construct($lengte) {
        $this->lengte = $lengte;
    }

    public function getGrootte(){
        return $this->lengte;
    }
} // einde class Persoon

class Oppervlakte implements Omvang {
    private $breedte;
    private $lengte;

    public function __construct($breedte, $lengte){
        $this->breedte = $breedte;
        $this->lengte = $lengte;
    }

    public function getGrootte(){
        return $this->lengte * $this->breedte;
    }
}// einde class Oppervlakte
?>

<!DOCTYPE HTML> 
<html>  
    <head>   
        <meta charset=utf-8>   
        <title>Interfaces</title>  
    </head>  
    <body>   
        <h1>    
        <?php    
            $p = new Persoon(190);    
            print("Persoon grootte : " . $p->getGrootte() . "<br />");    
            $o = new Oppervlakte(20, 30);    
            print("Oppervlakte : " . $o->getGrootte());    
        ?>   
        </h1>  
    </body> 
</html> 
