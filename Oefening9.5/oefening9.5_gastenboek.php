<?php
//oefening9.5_gastenboek.php

require_once("gastenboekLijst.php");
include("validatie.inc.php");
?>
<!-- uitvoer op het scherm -- de opmaak -->
<!DOCTYPE HTML> 
<html>  
    <head> 
        <style>
        .vet {font-weight: bold;}
        .schuin{font-style:italic;}
        .error {color: #FF0000;}
        </style>      
        <meta charset=utf-8>   
        <title>Oefening 9.5 - Gastenboek</title>  
    </head>  
    <body>   
        <h1>Gastenboek</h1> 
        <?php  $gastenboek = new GastenboekLijst();
        $tab = $gastenboek->getBericht();   
        ?> 
        <h2>Berichten</h2> 
        <!-- hier worden de berichten weergegeven -->
        <table>
        <?php                 
            foreach ($tab as $berichten) {     
                $id = $berichten->getId();
                $auteur = $berichten->getAuteur();     
                $boodschap = $berichten->getBoodschap();  
                $datum = $berichten->getDatum();                  
            
                print ("<div><span class='vet'>Auteur: </span>" . $auteur . "
                        <br /><span class='schuin'>" . $boodschap . "</span>
                        </div>
                        <hr />"); 
            }                      
        ?>  
        </table>
        
        <h2>Bericht Toevoegen</h2>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <p>Auteur: <input type="text" name="auteur" value="<?php echo $temp_auteur; ?>"/><span class="error"><?php echo $errAuteur ?></span> </p>      
            <p>Boodschap:<br /> <textarea name="boodschap" /><?php echo $temp_boodschap; ?></textarea><span class="error"><?php echo $errBoodschap ?></span></p>     
            <input type="submit" name="verzenden" value="Verzenden" />        
            </form>                 
    </body> 
</html>