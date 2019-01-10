<?php
session_start();


// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connectie met de database
$db = mysqli_connect('localhost', 'root', '', 'gastenboek');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // ontvangen van alle inputs van het formulier
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // formulier validatie: zorgen dat het formulier juist is ingevuld ...
  // plaats de errors in een array (array_push()) 
  if (empty($username)) { array_push($errors, "Gebruikersnaam is verplicht"); }
  if (empty($email)) { array_push($errors, "Email is verplicht"); }
  if (empty($password_1)) { array_push($errors, "Wachtwoord is verplicht"); }
  if ($password_1 != $password_2) {
	array_push($errors, "De wachtwoorden komen niet overeen!");
  }

  // Eerst kijken in de database of een gebruiker nog niet bestaande is. 
  // Controle op gebruikersnaam en emailadres
  $user_check_query = "SELECT * FROM tbl_registratie WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // Als de gebruiker al bestaat
    if ($user['username'] === $username) {
      array_push($errors, "Gebruikersnaam bestaat al");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email bestaat reeds");
    }
  }

  // Registreer de gebruiker als er geen error zijn
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypty van het wachtwoord MD5 voor het toevoegen aan de database

  	$query = "INSERT INTO tbl_registratie (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
    $_SESSION['username'] = $username;
  	$_SESSION['success'] = "Je bent nu ingelogd";
  	header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Gebruikersnaam verplicht!");
    }
    if (empty($password)) {
        array_push($errors, "Wachtwoord is verplicht!");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM tbl_registratie WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {

          $_SESSION['username'] = $username;
         
          $_SESSION['success'] = "Je bent ingelogd nu!";
          header('location: index.php');
        }else {
            array_push($errors, "Verkeerde gebruikersnaam/wachtwoord combinatie");
        }
    }
  }
  
  ?>