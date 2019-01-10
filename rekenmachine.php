<style type="text/css">
    h1 { color: red; }
</style>

<?php
//rekenmachine.php
class Rekenmachine {
public function getKwadraat($getal) {
$kwad = $getal * $getal;
return $kwad;
    }//einde functie getKwadraat
    
/* Berekent de som van twee meegegeven getallen.
 * Dit is een tweede zelfgeschreven functie.
 * */
    
public function getSom($getal1, $getal2) {    
        $resultaat = $getal1 + $getal2;
        return $resultaat;
    } //einde functie getSom
    
public function getMultiply($getal1, $getal2){
    $resultaat = $getal1 * $getal2;
    return $resultaat;    
}// einde functie getMultiply
}//Einde Class
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset=utf-8>
<title>Rekenmachine</title>
</head>
<body>
<h1>Kwadraat van een getal (5) :  
<?php
$reken = new Rekenmachine();
print($reken->getKwadraat(5));
?>
</h1>
    <h1>Som van 2 getallen (65 en 8) : 
    <?php
    print($reken->getSom(65, 8));
    ?>
    </h1>
    <h1>Som van 2 getallen (34 en 55) : 
    <?php
    print($reken->getSom(34, 55));
    ?>
    </h1>
    <h1>Vermenigvuldigen van 5 en 8 : 
    <?php
    print($reken->getMultiply(5, 8));
    ?>
    </h1>
</body>
</html>
