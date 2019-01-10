<?php
/* connectie met de database */

class Database {
    private $host = "localhost";            //PDO Host
    private $db_name = "gastenboek";  //Naam van de database
    private $username = "root";             // Username van de database
    private $password = "";                 // paswoord voor de database
    private $socket_type = "mysql";         // type van de database (kan mysql of sqlite zijn, etcetera)

    private $instance = NULL;               //actuele instantie van de class Database

    // Deze maakt de connectie naar de database
    public function __construct() {
        if($this->instance == NULL){
            try {
                $db = new PDO('' . $this->socket_type . ':host='. $this->host .'; dbname='. $this->db_name .'', $this->username, $this->password);

                $this->instance = $db;
            } catch(PDOException $e){
                die($e->getMessage());
            }
        }
    }

    //Queries
    public function query($sql){
        $query = $this->instance->prepare($sql);
        $query->execute();

        return $query;
    }


}
