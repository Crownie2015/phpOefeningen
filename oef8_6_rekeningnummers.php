<?php
//oef8_6_rekeningnummers.php

class Rekening {
    private $rekeningnummer;
    private $intrest = 1.03;
    private $saldo = 0;
    private $bedrag = 0;

    public function __construct($rekeningnummer){
        $this->rekeningnummer = $rekeningnummer;
        
    }
  
    //Gebruik de functie getSaldo enkel en alleen om te lezen wat er in dat saldo staat
    public function getSaldo(){             
        return $this->saldo;
    }
//Maak de berekening verhoog het bestaande saldo ($this->saldo) met het gestorte bedrag ($this->bedrag) 
     public function stort($bedrag){         
         $this->bedrag = $bedrag;
         $this->saldo = $this->saldo+$this->bedrag;
    }
// Maak de berekening van de intrest! (kijk wat er in $this->saldo staat en vermenigvuldig met de intrestvoet)
     public function voerIntrestDoor(){
        $this->saldo *= $this->intrest;
        
     }
}
?>
<!DOCTYPE HTML> 
    <html>  
        <head>   
            <meta charset=utf-8>   
            <title>Rekeningnummers</title>  
        </head>  
            <body>   
                <h1>
                    <?php    
                        $rek = new Rekening("091-0122401-16");    
                        print("Het saldo is: " .$rek->getSaldo() . "<br />");    
                        $rek->stort(200);    
                        print("Het saldo is: " .$rek->getSaldo() . "<br />");   
                        $rek->voerIntrestDoor(); 
                        print("Het saldo is: " .$rek->getSaldo() . "<br />");     
                    ?>   
                </h1> 
            </body> 
    </html> 