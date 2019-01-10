<?php
class Chef {
    function makeChicken(){
        echo "The chef makes chicken <br>";
    }
    function makeSalad(){
        echo "The chef makes salad <br>";
    }
    function makeSpecialDish(){
        echo "The chef makes BBQ ribs <br>";
    }
    
}

class ItalianChef extends Chef { //extend zorgt ervoor dat ook deze classe alle functies van de klasse Chef kan gebruiken!!
    function makePasta(){
        echo "The Italian chef makes pasta <br>";
    }
    
    //overriding a function
    function makeSpecialDish() { // de functie bij Chef is dus overschreven door deze nieuwe functie
        // maar enkel bij de klasse italianChef !!!
        echo "The chef makes chicken parm<br>";
    }
}

$chef = new Chef();
$italianChef = new ItalianChef();

//uitprinten gegevens van de fucnties en klasses
$chef->makechicken();
$italianChef->makeChicken(); // makechicken kan dus gebruikt worden door de italianchef
$italianChef->makePasta();

$chef->makeSpecialDish();
$italianChef->makeSpecialDish();

