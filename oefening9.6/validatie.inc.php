<?php
// variabelen  

//include('session.php');

Session::set('name', 'p' . rand(111, 999));
$nickname = $_SESSION['name'];
$boodschap = "";

// validation

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        //$nickname = $_POST["nickname"];
        $boodschap = $_POST["boodschap"]; 
        
        $mlijst = new chatBoxLijst();
        $mlijst->createBericht($nickname, $boodschap);
       
}


?>