<?php
//gastenboekLijst.php

require_once("gastenboek.php");

class gastenboekLijst {

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
        $sql = "select id, auteur, boodschap, datum from gastenboek order by datum DESC";   
        $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);   
        $resultSet = $dbh->query($sql); 

        $lijst = array();   
        foreach ($resultSet as $rij) {    
            $berichten = new Gastenboek($rij["id"], $rij["auteur"], $rij["boodschap"], $rij["datum"]);    
            array_push($lijst, $berichten);   
        }   
        $dbh = null;   
        return $lijst;  
    }

    /* SETTERS */
    public function createBericht($auteur, $boodschap) {
        $datum = date("Y-m-d H:i:s");
        $sql = "insert into gastenboek (auteur, boodschap, datum) values (:auteur, :boodschap, :datum)";
        $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8", "cursusgebruiker", "cursuspwd");

        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':auteur' => $auteur, ':boodschap' => $boodschap, ':datum' => $datum));
        $dbh = null;
    }

}// einde class ModuleLijst

