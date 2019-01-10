<?php
// variabelen  
$errAuteur = "";
$errBoodschap = "";
$auteur = "";
$boodschap = "";

// validation
if (empty($_POST["auteur"])) {
    $temp_auteur = "";
} else {
    $temp_auteur = $_POST['auteur'];
}
if (empty($_POST["boodschap"])) {
    $temp_boodschap = "";
} else {
    $temp_boodschap = $_POST['boodschap'];
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["auteur"])){
        $errAuteur = "Een auteur is verplicht!";
    }  elseif (empty($_POST["boodschap"])) {
        $errBoodschap = "Graag uw boodschap aub!";
    } elseif (strlen($_POST["boodschap"]) > 200 ) {
        $errBoodschap = "Boodschap is te lang! Maximum 200 karakters aub!";
    }
    else {
        $temp_auteur = $_POST["auteur"];
        $temp_boodschap = $_POST["boodschap"]; 
        
        $mlijst = new GastenboekLijst();
        $mlijst->createBericht($temp_auteur, $temp_boodschap);
       
        //terug leegmaken van de tijdelijke variabelen
        $temp_auteur = "";
        $temp_boodschap = "";  
    }
}

?>