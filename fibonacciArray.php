<?php
//getallenarray.php
class GetalArrayGenerator {
    public function getArray() {
    $lijst = array();
    $lijst[0] = 0;
    $lijst[1] = 1;
    for ($i=2; $i<=30; $i++){
        $temp = ($lijst[$i-2] + $lijst[$i-1]);
        $lijst[$i] = $temp;
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