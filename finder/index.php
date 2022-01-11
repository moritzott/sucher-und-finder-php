<?php require "../utils/only-logged-in-user.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gefundene Person melden</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/static/css/w3.css">
        <link rel="stylesheet" href="/static/css/index.css">
    </head>
    <body class="w3-container">
        <div class="w3-container w3-center w3-card-4 w3-round-large w3-margin-bottom" style="max-width: 600px;" id="divMain">
            <p>Eine Person hat bei Ihnen Obdach gefunden.
                Bitte geben Sie zunächst Informationen zur aufgenommenen Person und
                anschließend zur Obdach-Adresse.
            </p>
            <h1 class="w3-center">Personenobdach</h1>
            <div class="w3-center">
                <img src="/static/img/avatar/avatar1.png" width="200px" alt="avatar-bild" class="w3-container">
            </div>
            <!-- Welche Angaben sollten REQUIRED sein? -->
            <form action="/finder/register-person.php" method="post" class="w3-margin">
                <h3>Persönliche Informationen</h3>
                <label for="firstname">Vorname der Person:</label>
                <input type="text" name="firstname" id="firstname" class="w3-input w3-border">
                <br>
                <label for="lastname">Nachname der Person:</label>
                <input type="text" name="lastname" id="lastname" class="w3-input w3-border">
                <br>
                <label for="birthdate">Geburtsdatum:</label>
                <input type="date" name="birthdate" id="birthdate" class="w3-input w3-border">
                <br>
                <label for="birthplace">Geburtsort:</label>
                <input type="text" name="birthplace" id="birthplace" class="w3-input w3-border">
                <br>
                <label for="streetAndNumber">Straße und Hausnr.:</label>
                <input type="text" name="streetAndNumber" id="streetAndNumber" class="w3-input w3-border">
                <br>
                <label for="city">Stadt/Gemeinde:</label>
                <input type="text" name="city" id="city" class="w3-input w3-border">
                <br>
                <label for="citycode">Postleitzahl:</label>
                <input type="text" name="citycode" id="citycode" class="w3-input w3-border">
                <br>
                <h3>Unterkunft</h3>
                <label for="shelterAddress">Adresse der Unterkunft:</label>
                <input type="text" name="shelterAddress" id="shelterAddress" required class="w3-input w3-border">
                <br>
                <label for="contact">Kontaktmöglichkeit:</label>
                <input type="text" name="contact" id="contact" class="w3-input w3-border">
                <br>
                <div class="w3-center">
                    <a href="/welcome.php" class="w3-button w3-border reducedLinkWidth w3-margin-bottom">&larr; Zurück</a>
                    <input type="submit" value="Registrieren" class="w3-button w3-border w3-margin-bottom">
                </div>
            </form>
        </div>
    </body>
</html>