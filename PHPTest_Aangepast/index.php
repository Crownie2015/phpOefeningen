<?php 

require_once("gastenboekLijst.php");
include("validatie.inc.php");

  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Gelieve eerst in te loggen";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<div class="header">
	<h2>Gastenboek</h2>
</div>
<div class="content">
  	<!-- Notificatie berichtje -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- Gebruiker is ingelogd -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welkom <strong><?php echo $_SESSION['username'];?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">Uitloggen</a> </p>
    <?php endif ?>
</div>
        <?php  $gastenboek = new GastenboekLijst();
        $tab = $gastenboek->getBericht();   
        ?> 	

		<div class="header"><h2>Bericht Toevoegen</h2> 	</div>
			<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
			<p>Auteur: <?php echo $_SESSION['username']; ?></p>
			<input type="hidden" name="auteur" value="<?php echo $_SESSION['username']; ?>"/> 
            <p>Boodschap:<br /> <textarea rows="4" cols="50" name="boodschap" /><?php echo $temp_boodschap; ?></textarea><span class="fout"><?php echo $errBoodschap ?></span></p>     
            <input type="submit" name="verzenden" value="Verzenden" />        
            </form>     
	
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
                        <hr />"); 
            }                      
        ?>  
		</table>
		</div>	
</body>
</html>




