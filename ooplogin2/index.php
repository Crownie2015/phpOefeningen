<?php
session_start();

// require van de classes
require 'database.php';
require 'loginsystem.php';

// Instantieeren van de classes
$db = new Database;     // Deze geeft de instantie terug $instance
$loginsystem = new LoginSystem; //Het hoofd login framework

// We maken een token zodat de gegevens beschermd zullen zijn
$token = crypt('bescherm-deze-website','test');   // Deze maakt een unieke code voor iedere refresh
$_SESSION['token'] = $token;

// Het hoofdtoken zal verwijzen naar
$main_token = crypt($_SESSION['token'],'test');

// controle van het token
if(isset($_POST['email_']) && isset($_POST['password_'])){
    if(isset($_POST['token']) == $main_token){
        $email = $loginsystem->clean($_POST['email_']);
        $password = $loginsystem->clean($_POST['password_']);

        if($email != "" && $password != ""){
            $md5_pass = $loginsystem->encryptPass($password);
            $loginsystem->login($email, $md5_pass);
        }
    } else {
        die("Token is fout!");
    }
}

?>

<html>
    <head>

    </head>
    <body>
        <form action="#" method='POST'>
            <input type='hidden' name='token' id='token' value='<?php echo $main_token; ?>' />
            <input type='email' name='email_' id='email_ ?>' placeholder='Email' />
            <input type='password' name='password_' id='password' placeholder='Password' />
            <input type='submit' name='Verzenden' value='Inloggen' />
        </form>
    </body>

</html>