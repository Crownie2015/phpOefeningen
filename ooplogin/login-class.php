<?php
class Login{

    private $database;

    function __construct($dbcon){
        $this->database = $dbcon;
    }

    public function register($name, $email, $password){
        try{
            $stmt = $this->database->prepare("INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password');");
            $stmt->execute();
            return true;
        }
        catch (PDOExeption $ex){
            die($ex->getMessage());
            return false;
        }
    } 

}




?>