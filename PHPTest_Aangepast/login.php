<?php include('server.php'); 
require_once("gastenboekLijst.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registratie systeem in PHP en MySql</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Gebruikersnaam</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Wachtwoord</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Inloggen</button>
  	</div>
  	<p>
  		Nog niet geregistreerd? <a href="register.php">Registreer Hier</a>
  	</p>
  </form>


<!--- Hier heb ik het gastenboek gezet, zodat het ook kan gelezen worden zonder in te loggen --->
<!--- Eigenlijk is dit nu wel dubbele code -->

<?php  $gastenboek = new GastenboekLijst();
				$tab = $gastenboek->getBericht(); 
 
		?> 
	<div><h2 class="header">Berichten</h2> 	 
        
        <!-- hier worden de berichten weergegeven -->
        <table>
        <?php                 
            foreach ($tab as $berichten) {     
                $id = $berichten->getId();
                $auteur = $berichten->getAuteur();     
                $boodschap = $berichten->getBoodschap();  
                $datum = $berichten->getDatum();                  
            
                print ("<div class='berichten'><span class='vet'>Auteur: </span>" . $auteur . "
                        <br /><span class='schuin'>" . $boodschap . "</span>
                        </div>
												"); 
												
												
            }                      
        ?>  
		</table>
		</div>
</body>
</html>