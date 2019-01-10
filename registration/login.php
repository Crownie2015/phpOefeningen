<?php include('server.php') ?>
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
</body>
</html>