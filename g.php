<?php
$randomGetal = random_int(1, 10);


print "Jouw getal was: " . ($_GET["gok"]);
print "<br />";
print "Mijn getal was: " . $randomGetal;
print "<br />";
if ($_GET["gok"] == $randomGetal){
    print "Proficiat!";
} else {
    print "Helaas, niet gewonnen!";
}



