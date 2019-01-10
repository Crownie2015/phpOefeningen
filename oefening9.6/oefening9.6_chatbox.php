<?php
//oefening9.6_chatbox.php
session_start();
require_once("chatBoxLijst.php");
//include("validatie.inc.php");
//include("session.php");

class Session {

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
   
    
    {
        if(!isset($_SESSION[$key])){
            Session::set('name', 'p' . rand(111,999));
            return $_SESSION[$key];
        } else {
            return $_SESSION[$key];
        }
    }
}

//Session::set('name', 'p' . rand(111, 999));
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
<!-- uitvoer op het scherm -- de opmaak -->
<!DOCTYPE HTML> 
<html>  
    <head>     
        <meta charset=utf-8>   
        <title>Oefening 9.6 - Chatbox</title>  
    </head>  
    <body>   
        <h1>Chatbox</h1> 
        <?php  $chatbox = new chatBoxLijst();
        $tab = $chatbox->getBericht();   
        ?> 
        <h2>Berichten</h2> 
        <!-- hier worden de berichten weergegeven -->
        <table>
        <?php                 
            foreach ($tab as $berichten) {     
                $id = $berichten->getId();
                $nickname = $berichten->getNickname();     
                $boodschap = $berichten->getBoodschap();  
                $datum = $berichten->getDatum();                  
            
                print ("<tr><td>" . $nickname . " > </td><td>" . $boodschap . "</td></tr>"); 
            }                      
        ?>  
        </table>
        
        <h2>Bericht Toevoegen</h2>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <p>Bericht:<br /> <textarea name="boodschap" rows="5" cols="50"/></textarea></p>     
            <input type="submit" name="verzenden" value="Verzenden" />        
            </form>                 
    </body> 
</html>