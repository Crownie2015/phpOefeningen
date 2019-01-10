<?php
//Module.php

class Module {
//VARIABELEN ***************
    private $id;
    private $naam;
    private $prijs;
//CONSTRUCTOR **************
    public function __construct($id, $naam, $prijs){
        $this->id = $id;
        $this->naam = $naam;
        $this->prijs = $prijs;
    }
//GETTERS ***************************
    public function getId() {
        return $this->id;
    }

    public function getNaam() {
        return $this->naam;
    }

    public function getPrijs(){
        return $this->prijs;
    }

}// einde class Module