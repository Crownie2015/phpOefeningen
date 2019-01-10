<?php
// frequentie.php

class GetallenGenerator {
    public function getGetallen(){
        $getallen = array();
        for ($i=0; $i<10; $i++) {
            $getallen[$i] = rand(1, 40);
        }
        return $getallen;
    }
}

function test($a,$b){
    $teller = 0;
    if ($a == $b){
                        $teller = $teller +1;
                        return $teller;
                    }
                    
}

?>


<!DOCTYPE HTML> 
<html>  
    <head>   
        <meta charset=utf-8>   
        <title>Arrays</title>  
    </head>  
    <body>   
        <ul>    
            <?php  
             $arrGen = new GetallenGenerator();
            print_r($arrGen->getGetallen());
             
                       
            for ($i=0;$i<100;$i++){
                for ($j=1;$j<100;$j++){
                    if ($arrGen[$i] == $arrGen[$j]){
                        $teller = $teller+1;
                    }
                }
                print "getal " . $arrGen[$i] . " werd " . $teller . " keer gegenereerd. <br />";
            }
            
            
           /* $gg = new GetallenGenerator();
            $tabel = $gg->getGetallen();
            $resultaat = array();
            
            /*for ($i=0;$i<10;$i++){
                $teller =0;
                //print ($tabel[$i] . "&nbsp;");
                for($j=1;$j<10;$j++){
                    print "getal " . $i . " : " .  $tabel[$i] . " getal " . $j . " : " .$tabel[$j] . "<br />";
                    test($tabel[$i], $tabel[$j]);
                    
                                       }
                
                
                print "getal " . $tabel[$i] . " werd " . $teller . " keer gegenereerd. <br />";
             
                
            }*/
            
            
            
            
                
            
            ?>
        </ul>
    </body>
</html>