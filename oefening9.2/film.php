<?php
//film.php

class Film {
//VARIABELEN ***************
    private $id;
    private $titel;
    private $duurtijd;
//CONSTRUCTOR **************
    public function __construct($id, $titel, $duurtijd){
        $this->id = $id;
        $this->titel = $titel;
        $this->duurtijd = $duurtijd;
    }
//GETTERS ***************************
    public function getId() {
        return $this->id;
    }

    public function getTitel() {
        return $this->titel;
    }

    public function getDuurtijd(){
        return $this->duurtijd;
    }

}// einde class Module