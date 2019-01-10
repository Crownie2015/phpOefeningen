<?php
//modulesOpzoeken.php
require_once("ModuleLijst.php"); 
?>
<!DOCTYPE HTML> 
<html>  
    <head>   
        <meta charset=utf-8>   
        <title>Oefening 9.1 modulesOpzoeken</title>  
    </head>  
    <body>   
        <h1>Zoekresultaat</h1>  
        <?php   $modLijst = new ModuleLijst();
        $tab = $modLijst->getLijst($_POST["minPrijs"], $_POST["maxPrijs"]);   
        ?>  
        <ul>
            <?php 
            if (count($tab) == 0){
                print "Geen resultaten gevonden";
            }   
                foreach ($tab as $module) {     
                    $moduleNaam = $module->getNaam();
                    $modulePrijs = $module->getPrijs();     
                    $moduleId = $module->getId();                    

                    print("<li>" . $moduleNaam . " (" . $modulePrijs . " euro)</li>");    
                }  
                print "<p><a href='gegevensOphalenForm.php'>Nieuwe zoekopdracht</a></p>";  
            ?>  
        </ul>        
    </body> 
</html>