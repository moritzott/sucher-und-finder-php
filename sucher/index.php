<?php require "../utils/only-admin-or-searcher.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/static/css/w3.css">
        <link rel="stylesheet" href="/static/css/index.css">
    </head>
    <body class="w3-container">
        <p class="w3-center w3-pale-yellow">
            Sucher-Bereich
        </p>
        <div class="w3-container w3-card-4 w3-round-large" style="max-width: 600px" id="divMain">
            <h1 class="w3-center">Personensuche</h1>
            <p>
                Wenn Ihnen Angaben nicht bekannt sind, lassen Sie das Feld einfach frei.
            </p>
            <div class="w3-center">
                <img src="/static/img/avatar/avatar2.png" alt="avatar-bild" width="150px" class="w3-container">
            </div>
            <form action="results.php" method="post">
                <label for="firstname">Vorname:</label>
                <input type="text" name="firstname" id="firstname" class="w3-input w3-border">
                <br>
                <label for="lastname">Nachname:</label>
                <input type="tel" name="lastname" id="lastname" class="w3-input w3-border">
                <br>
                <label for="city">Lebte in der Gemeinde/Stadt:</label>
                <input type="text" name="city" id="city" class="w3-input w3-border">
                <br><br>
                <div class="w3-center">
                    <a href="/welcome.php" class="w3-button w3-border reducedLinkWidth w3-margin-bottom">&larr; Zurück</a>
                    <input type="submit" value="Suchen" class="w3-button w3-border w3-margin-bottom">
                </div>
            </form>
        </div>
    </body>
</html>