<?php
//tekstgrootte.inc.php

class TekstGrootteMaker{
    public function getFontSize(){

        $grootte = array();
     
        for ($i=0;$i<7;$i++){
            $grootte[$i] = $i*10+10;
        }   
           
        return $grootte;
    }
}