<?php
//dbGegevensToevoegen.php

class ModuleLijst {
    public function createModule($naam, $prijs) {
        $sql = "insert into modules (naam, prijs) values (:naam, :prijs)";
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8", "cursusgebruiker", "cursuspwd");

        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':naam' => $naam, ':prijs' => $prijs));
        $laatsteId = $dbh->lastInsertId(); 
        print($laatsteId); 
        $dbh = null;
    }
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Modules</title>
    </head>
    <body>
        <h1>Modules Toevoegen</h1>
        <?php
        $mlijst = new ModuleLijst();
        $mlijst->createModule("Access", 85.0);
        ?>
    </body>
</html>