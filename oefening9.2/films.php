<?php
//oefening 9.2 films.php
require_once("filmLijst.php"); 

// variabelen  
$errfilmTitel = $errfilmDuur = "";
$filmTitel = "";
$filmDuur = "";

// validation
if (empty($_POST["filmTitel"])) {
    $ingevoerdeTitel = "";
} else {
    $ingevoerdeTitel = $_POST['filmTitel'];
}
if (empty($_POST["filmDuur"])) {
    $ingevoerdeDuur = "";
} else {
    $ingevoerdeDuur = $_POST['filmDuur'];
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["filmTitel"])){
        $errfilmTitel = "Een titel is verplicht!";
    }  elseif (empty($_POST["filmDuur"]) || (($_POST["filmDuur"]) <= 0) || !is_numeric($_POST['filmDuur']) ) {
        $errfilmDuur = "De Duurtijd MOET groter zijn dan 0 EN enkel cijfers bevatten!";
    } else {
        $ingevoerdeTitel = $_POST["filmTitel"];
        $ingevoerdeDuur = $_POST["filmDuur"];           
        
        voegToe($ingevoerdeTitel, $ingevoerdeDuur);
        //terug leegmaken van de tijdelijke variabelen
        $ingevoerdeTitel = "";
        $ingevoerdeDuur = "";  
    }
}
 
function voegToe($filmTitel, $filmDuur){
    $mlijst = new FilmLijst();
    $mlijst->createFilm($filmTitel, $filmDuur);
}
?>

<!DOCTYPE HTML> 
<html>  
    <head> 
    <style>
    .error {color: #FF0000;}
    </style>  
    <script type='text/javascript'>
        function sure(){
        alert("Delete -> Zeker weten?");
        }
    </script>
        <meta charset=utf-8>   
        <title>Oefening 9.2 - Films</title>  
    </head>  
    <body>   
        <h1>Alle Films</h1>  
        <?php  $filmLijst = new FilmLijst();
        $tab = $filmLijst->getTitel();   
        ?> 
        <table>
            <?php 
                
                foreach ($tab as $films) {     
                    $filmTitel = $films->getTitel();
                    $filmDuur = $films->getDuurtijd();     
                    $filmId = $films->getId();                    
               //Hier wil ik nog een knop of waarschuwing om te bevestigen of er effectief verwijdert mag worden!! --> onclick ?
                print ("<tr>
                        <td>" . $filmTitel . "</td><td> (" . $filmDuur . ") min</td>
                        <td>(<a href=\"bewerkenFilm.php?id=" . $filmId . "\">Bewerken</a>) </td>
                        <td>(<a href=\"films.php?action=verwijder&id=" . $filmId . "\"  ><img src='images/delete.png' <!--- onclick='sure();-->' ></a>)</td>
                         </tr>"); 
                        }
                      
            ?>  
        </table>                
        <h1>Film toevoegen</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <p>Titel: <input type="text" name="filmTitel" value="<?php echo $ingevoerdeTitel; ?>" />
            <span class="error"><?php echo $errfilmTitel ?></span> </p>      
        <p>Duurtijd: <input type="text" name="filmDuur" value="<?php echo $ingevoerdeDuur; ?>" />Minuten 
            <span class="error"><?php echo $errfilmDuur ?></span></p>     
        <input type="submit" name="submit" value="Toevoegen" />        
        </form>          
    </body> 
</html>