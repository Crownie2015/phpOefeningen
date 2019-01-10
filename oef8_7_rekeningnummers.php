<?php
declare(strict_types=1);
//oef8_7_rekeningnummers.php

abstract class Rekening {
    private $rekeningnummer;
    private $saldo = 0;
    private $bedrag = 0;

    // public function __construct($rekeningnummer){
    //     $this->rekeningnummer = $rekeningnummer;
        
    // }
    public function setRekening($rekening){
        $this->rekening = $rekening;
    }
  
    //Gebruik de functie getSaldo enkel en alleen om te lezen wat er in dat saldo staat
    abstract public function getSaldo();
//Maak de berekening verhoog het bestaande saldo ($this->saldo) met het gestorte bedrag ($this->bedrag) 
     public function stort($bedrag){         
         $this->bedrag = $bedrag;
         $this->saldo = $this->saldo+$this->bedrag;
    }
// Maak de berekening van de intrest! (kijk wat er in $this->saldo staat en vermenigvuldig met de intrestvoet)
    //  public function voerIntrestDoor(){
    //     $this->saldo *= $this->intrest;
        
    //  }
}

class ZichtRekening extends Rekening {
    private $intrest = 2.5;
    private $saldo;

    public function voerIntrestDoor(){
             $this->saldo *= $this->intrest;
            
    }
    public function getSaldo(){             
        return $this->saldo;
    }

}


class SpaarRekening extends Rekening {
    private $intrest = 3;
    private $saldo;

    public function voerIntrestDoor(){
        $this->saldo *= $this->intrest;
    }
    public function getSaldo(){             
        return $this->saldo;
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
                        $rek = new SpaarRekening("091-0122401-16");    
                        print("Het saldo Spaar is: " .$rek->getSaldo() . "<br />");    
                        $rek->stort(200);    
                        print("Het saldo Spaar is: " .$rek->getSaldo() . "<br />");   
                        $rek->voerIntrestDoor(); 
                        print("Het saldo Spaar is: " .$rek->getSaldo() . "<br />");  
                        

                        $rek3 = new ZichtRekening();
                        $rek3->setRekening("012-345678-91");
                        $rek3->stort(888);
                        print("Het saldo van zicht 3 is : " . $rek3->getSaldo() . "<br />");

                        

                    ?>   
                </h1> 
    -        </body> 
    </html> 