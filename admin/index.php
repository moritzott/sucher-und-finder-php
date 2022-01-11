<?php include "../utils/only-admin.php" ?>

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
    <body class="w3-container w3-center">
        <h1 class="w3-center w3-pale-red">Admin-Bereich</h1>
        <?php
            $nutzername = $_SESSION["name"];
            echo "<h4>Hallo $nutzername!</h4>";
        ?>
        <h3>Aktionen</h4>
        <p>
            Sie sehen im Folgenden eine Reihe an Aktionen, die Sie 
            als <span class="w3-pale-red">Administrator</span> durchführen können.
        </p>
        <p>Seien Sie weise! Mit großer Macht kommt große Verantwortung!</p>
        <div class="w3-container w3-center" style="max-width: 600px;" id="divMain">
            <a href="/admin/users.php" class="w3-button w3-border w3-margin">Alle Nutzer anzeigen</a>
            <a href="/admin/found-persons.php" class="w3-button w3-border w3-margin">Untergekommene Personen anzeigen</a>
            <br>
            <a href="/admin/create-user.php" class="w3-button w3-border w3-margin">Neuen Nutzer erstellen</a>
            <a href="#" class="w3-button w3-border w3-margin">Eigenen Acount bearbeiten</a>
            <a class="w3-button w3-border w3-margin" href="/welcome.php">Zurück zur Startseite</a>
            <a class="w3-button w3-border w3-margin" href="/logout.php">Abmelden</a>
        </div>

    </body>
</html>