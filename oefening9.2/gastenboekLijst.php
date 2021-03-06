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
    $sql = "select id, auteur, boodschap, datum from gastenboek order by datum";   
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
/*
public function createFilm($titel, $duurtijd) {
    $sql = "insert into films (titel, duurtijd) values (:titel, :duurtijd)";
    $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8", "cursusgebruiker", "cursuspwd");

    $stmt = $dbh->prepare($sql);
    $stmt->execute(array(':titel' => $titel, ':duurtijd' => $duurtijd));
    $dbh = null;
}

public function deleteFilm($id) {
    $sql = "delete from films where id = :id";
    $dbh = new PDO("mysql:host=localhost;dbname=cursusphp;charset=utf8", "cursusgebruiker", "cursuspwd");

    $stmt = $dbh->prepare($sql);
    $stmt->execute(array(':id'=>$id));
    $dbh = null;

}

public function getFilmById($id) {   
    $sql = "select titel, duurtijd from films where id = :id";   
    $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
    $stmt = $dbh->prepare($sql);   
    $stmt->execute(array(':id' => $id));    
    $rij = $stmt->fetch(PDO::FETCH_ASSOC); 
    $film = new Film($id, $rij["titel"], $rij["duurtijd"]);
    $dbh = null;   
    return $film; 
}


*/
/* SETTERS */
/********* Hier is dat een update module ***************/
/*
public function updateFilm($film) {   
    $sql = "update films set titel = :titel, duurtijd = :duurtijd where id = :id";         
    $dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword); 
    $stmt = $dbh->prepare($sql);    
    $resultSet = $stmt->execute(array(             
        ':titel' => $film->getTitel(),             
        ':duurtijd' => $film->getDuurtijd(),             
        ':id' => $film->getId()));         
        $dbh = null;   
    } 

*/

}// einde class ModuleLijst
/*
$delLijst = new FilmLijst();

if (isset($_GET["action"]) && $_GET["action"] == "verwijder") {
    $delLijst->deleteFilm($_GET["id"]);
}
*/
