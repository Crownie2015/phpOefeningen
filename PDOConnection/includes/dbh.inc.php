<?php

class Dbh {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    protected function connect() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "testdb";
        $this->charset = "utf8mb4";

        $dsn = "mysql:host=". $this->servername . "; dbname=" . $this->dbname ."; charset=" . $this->charset;
        $pdo = new PDO($dsn, $this->username, $this->password);
        return $pdo;

        

    }
}