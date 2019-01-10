<?php
//chatBoxLijst.php

require_once("chatbox.php");

class chatBoxLijst {

    private $dbConn;
    private $dbUsername;
    private $dbPassword;

    public function __construct(){
        $this->dbConn = "mysql:host=localhost;dbname=cursusphp;charset=utf8";   
        $this->dbUsername = "cursusgebruiker";   
        $this->dbPassword = "cursuspwd"; 
    }

   /* GETTERS */
   public function getBericht() {   
        $sql = "select id, nickname, boodschap, datum from chatbox order by datum ";   
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);   
        $resultSet = $dbh->query($sql); 

        $lijst = array();   
        foreach ($resultSet as $rij) {    
            $berichten = new ChatBox($rij["id"], $rij["nickname"], $rij["boodschap"], $rij["datum"]);    
            array_push($lijst, $berichten);   
        }   
        $dbh = null;   
        return $lijst;  
    }

    /* SETTERS */
    
    public function createBericht($nickname, $boodschap) {
        $datum = date("Y-m-d H:i:s");
        $sql = "insert into chatbox (nickname, boodschap, datum) values (:nickname, :boodschap, :datum)";
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8", "cursusgebruiker", "cursuspwd");

        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':nickname' => $nickname, ':boodschap' => $boodschap, ':datum' => $datum));
        $dbh = null;
    }

}// einde class ModuleLijst