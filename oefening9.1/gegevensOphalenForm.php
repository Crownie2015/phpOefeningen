<?php
//oefening 9.1 gegevensOphalenForm.php

?>

<!DOCTYPE HTML> 
<html>  
    <head>   
        <meta charset=utf-8>   
        <title>Oefening 9.1</title>  
    </head>  
    <body>   
        <h1>Modules</h1>  
                
        <form action="modulesOpzoeken.php" method="post">
        <p>Geef een minimumprijs: <input type="text" name="minPrijs" /> euro</p>      
        <p>Geef een maximumprijs: <input type="text" name="maxPrijs" /> euro</p>     
        <input type="submit" value="OK" />
        </form>          
    </body> 
</html>