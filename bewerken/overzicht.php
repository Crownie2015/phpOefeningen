<?php 
//overzicht.php 
require_once("ModuleLijst.php"); 
?> 
 
 
<!DOCTYPE HTML> 
<html>  
    <head>   
        <meta charset=utf-8>   
        <title>Modules</title>  
    </head>  
    <body>   
        <h1>Modules</h1>   
        <?php   $modLijst = new ModuleLijst();
        $tab = $modLijst->getLijst();   
        ?>   
        <table>    
        
            <?php    
                foreach ($tab as $module) {     
                    $moduleNaam = $module->getNaam();
                    $modulePrijs = $module->getPrijs();     
                    $moduleId = $module->getId();  

                    print("<tr><td>" . $moduleNaam . "</td><td> " . $modulePrijs . "</td><td>  
                        (<a href=\"dbGegevensBewerken.php?id="       
                        . $moduleId . "\">Bewerken</a>) </td>
                        <td>  
                        (<a href=\"dbGegevensVerwijderen.php?id="       
                        . $moduleId . "\">Verwijderen</a>) </td></tr>");    
                }    
            ?> 
              
        </table>     
    </body> 
</html>