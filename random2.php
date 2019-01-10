<?php
$randomGetal = random_int(1, 1000 );

for ($teller = 1; $teller <= $randomGetal; $teller++){
   if ($randomGetal <= 600){
    print($randomGetal . "<br />");
} elseif ($randomGetal > 600){
    print($randomGetal . "is groter dan 600");
} 
}