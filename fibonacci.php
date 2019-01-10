<?php
/*
function fibonacci($getal){
    $eerste = 0;
    $tweede = 1;
    
    print $eerste . " " . $tweede;
    for($teller = 2; $teller < $getal; $teller++){
        $derde = $eerste + $tweede;
        print " " . $derde;
        $eerste = $tweede;
        $tweede = $derde;
    }
}

fibonacci(10);
 
 */

$getal = 5000;
$teller = 1;
$eerste = 0;
$tweede = 1;
print $eerste . " " . $tweede;
while ($teller < $getal)
    {
        $derde = $eerste + $tweede;
        print " " . $derde;
        $eerste = $tweede;
        $tweede = $derde;
        $teller++;
    }
