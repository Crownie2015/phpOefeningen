<?php 
//kleur.php 
    if (!empty($_POST["kleur"])) {   
        setcookie("gekozenkleur", $_POST["kleur"], time() + 86400);   
        $kleur = $_POST["kleur"];
          } else {   
              $kleur="";      
              if (isset($_COOKIE["gekozenkleur"])) {          
                  $kleur = $_COOKIE["gekozenkleur"];      
        } 
    }

    function testKleur($kleur){
     
        switch ($kleur) {
            case "rood":
                print("ROOD");
                print('<body style="background-color:red">');
                break;

            case "blauw":
                print("BLAUW");
                print('<body style="background-color:blue">');
                break;
            
            case "geel":
                print("GEEL");
                print('<body style="background-color:yellow">');
                break;

            case "wit":
                print("WIT");
                print('<body style="background-color:white">');
                break;
        }
    }
?> 



<!DOCTYPE HTML> 
    <html>  
        <head>   
            <meta charset=utf-8>   
            <title>KLeur</title>  
        </head>  
        <body>   
        
            <form action="kleur.php" method="post"> 
                <label for="kleur">Kies uw favoriete kleur:</label> 
                <select name="kleur">
                    <option value="rood">Rood</option>
                    <option value="blauw">Blauw</option>
                    <option value="geel">Geel</option>
                    <option value="wit">Wit</option>
                </select>  
            <input type="submit" value="OK" />   
            </form>   
        <br />  
        <p>De gekozen kleur is : <?php testKleur($kleur); ?> </p> 
        <a href="kleur.php">Vernieuw de pagina</a>  
        </body> 
    </html> 