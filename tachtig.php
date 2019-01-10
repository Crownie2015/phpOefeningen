<?php
//tachtig.php
class GetalArrayGenerator {
    public function getArray() {
    $lijst = array();
    $willekeurigGetal = 1;
    
    while ($willekeurigGetal < 80){
        $i = 0;
        $willekeurigGetal = rand(1, 100);
        $lijst[$i] = $willekeurigGetal;
        $i =$i + 1;
    }
          
    return $lijst;
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Willekeurige getallen</title>
    </head>
    <body>
        <pre>
        <?php
        $arrGen= new GetalArrayGenerator();
        print_r ($arrGen->getArray());
        ?>
        </pre>
    </body>
</html>