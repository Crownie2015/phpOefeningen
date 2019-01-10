<?php include 'db.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($login->register($name, $email, $password)){
        header('Location:register.php?goedgedaan');
    }

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
    </head>
    <body>
    <h1>Registreer nieuwe gebruiker</h1>
    <form action="" method="post">
        <table>
            <tr><td>Naam: </td><td><input type="name" name="name"></td></tr>
            <tr><td>Email: </td><td><input type="email" name="email"></td></tr>
            <tr><td>Paswoord: </td><td><input type="password" name="password"></td></tr>
            <tr><td><input type="submit" name="submit" value="Registreer Nu"></td></tr>


    </form>

    </body>
</html>