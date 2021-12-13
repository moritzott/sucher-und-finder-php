<?php
    // start session
    session_start();

    // if session contains a name: redirect to welcome page
    if (isset($_SESSION["name"]))
    {
        header("Location: /welcome.php");
        exit();
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Anmelden</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/w3.css">
    </head>
    <body class="w3-container" >
        <h1>Anmeldung</h1>
        <form class="w3-container" action="/login-user.php" method="post">
            <label for="email">Email:</label>
            <input class="w3-input w3-border" type="email" name="email" id="email" required>
            <br>
            <label for="password">Passwort:</label>
            <input class="w3-input w3-border" type="password" name="password" id="password" required>
            <br>
            <br>
            <input class="w3-button w3-border" type="submit" value="Anmelden">
        </form>
        <div>
            <a class="w3-button w3-border" class="w3-button w3-border" href="./index.php">Abbrechen</a>
        </div>
    </body>
</html>