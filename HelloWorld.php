<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//helloworld.php
class GreetingGenerator {
    public function getGreeting() {
        return date("d/m/y - H:i:s");
    }
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title> Hello World</title>
    </head>
    <body>
        <h1><?php
        $gg = new GreetingGenerator();
        print($gg->getGreeting());
        ?></h1>
    </body>
</html>

