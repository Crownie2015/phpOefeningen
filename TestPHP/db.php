<?php
$dbhost = 'localhost';
$dbname = 'gastenboek';
$dbuser = 'root';
$dbpass = '';

try {
    $dbcon = new PDO("mysql:host={$dbhost}; dbname={$dbname}", $dbuser,$dbpass);
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExeption $ex){
    die($ex->getMessage());
}
include 'login-class.php';
$login = new Login($dbcon);
