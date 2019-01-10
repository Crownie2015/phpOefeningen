<?php
//GetallenReeksMaker.php

class GetallenReeksMaker{
    public function getReeks(){

        $getallen = array();
     
        for ($i=0;$i<10;$i++){
            $getallen[$i] = rand(1, 100);
        }
        sort($getallen);
        //sort = sorteren van laag naar hoog
        // rsort = sorteren van hoog naar laag
        return $getallen;
    }
}