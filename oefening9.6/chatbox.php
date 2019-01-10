<?php
//chatbox.php

class ChatBox {
//VARIABELEN ***************
    private $id;
    private $nickname;
    private $boodschap;
    private $datum;
//CONSTRUCTOR **************
    public function __construct($id, $nickname, $boodschap,$datum){
        $this->id = $id;
        $this->nickname = $nickname;
        $this->boodschap = $boodschap;
        $this->datum = $datum;
    }
//GETTERS ***************************
    public function getId() {
        return $this->id;
    }

    public function getNickname() {
        return $this->nickname;
    }

    public function getBoodschap(){
        return $this->boodschap;
    }

    public function getDatum(){
        return $this->datum;
    }

}// einde class Module