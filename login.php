<?php
    // falls der Nutzer schon angemeldet ist, direkt 
    // zur Willkommensseite weiterleiten

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
        <link rel="stylesheet" href="/static/css/w3.css">
        <link rel="stylesheet" href="/static/css/index.css">
    </head>
    <body class="w3-container">
        <div class="w3-container"style="max-width: 600px;" id="divMain">
            <h1 class="w3-center">Anmeldung</h1>
            <form class="w3-margin" action="/login-user.php" method="POST">
            <br><br>
                <label class="" for="email">Email:</label>
                <input class="w3-input w3-border" type="text" id="email" name="email" required>
                <br><br>
                <label class="" for="password">Passwort:</label>
                <input class="w3-input w3-border" type="password" name="password" id="password" required>
                <br><br>
                <div class="w3-center">
                    <a href="/index.php" class="w3-button w3-border reducedLinkWidth w3-margin-bottom">&larr; Zurück</a>
                    <input class="w3-button w3-border reducedLinkWidth w3-margin-bottom" type="submit" value="Anmelden">
                </div>    
            </form>
            <!-- OPTION: PASSWORT VERGESSEN!! -->
            <p class="w3-right w3-margin"><a href="#">Passwort vergessen?</a></p>
        </div>
    </body>
</html>