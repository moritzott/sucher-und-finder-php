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
    <body class="w3-container">
        <p class="w3-center w3-pale-red">
            Admin-Bereich
        </p>
        <div class="w3-container w3-card-4 w3-round-large w3-center" style="max-width: 600px;" id="divMain">
            <h1 class="w3-center">Neuer Nutzer angelegt</h1>
            <div class="w3-center">
                <img src="/static/img/avatar/avatar1.png" alt="avatar-picture" width="200px" class=" w3-container">
            </div>
            
            <?php
            $firstname = htmlentities($_POST["firstname"]);
            $lastname = htmlentities($_POST["lastname"]);
            $email = htmlentities($_POST["email"]);
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // auch mit Password??
            $role = htmlentities($_POST["role"]);

            echo "<p>Vorname: $firstname </p>\n\t";
            echo "<p>Nachname: $lastname </p>";
            echo "<p>Email: $email </p>";
            echo "<p>Passwort: $password </p>";
            echo "<p>Rolle: $role </p>";
            
            // funktioniert -> in Datenbank eintragen
            //  ... -> Erfolgsinfo "Nutzer wurde in die Datenbank eingetragen"
        
            ?>

            <div class="w3-center">
                <a href="/admin/index.php" class="w3-center w3-button w3-border w3-margin reducedLinkWidth">OK</a>
            </div>
        </div>
        


    </body>
</html>