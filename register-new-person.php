<?php 

    session_start();
    if(isset($_SESSION["name"]))
    {
        // continue with this site
    } else {
        // else redirect
        header("Location: /not-logged-in.php");
        exit();
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Neue Person registrieren</h1>
        <p>Eine Person hat bei Ihnen Obdach gefunden.
            Bitte geben Sie zunächst Informationen zur aufgenommenen Person und
            anschließend zur Obdach-Adresse.
        </p>
        
        <form action="/register-person.php" method="post">
            <label for="firstname">Vorname:</label>
            <input type="text" name="firstname" id="firstname"><br>
            <label for="lastname">Nachname:</label>
            <input type="text" name="lastname" id="lastname"><br>
            <label for="address">Wohnt(e) an folgender Adresse:</label>
            <input type="text" name="address" id="address"><br>
            <label for="shelterAddress">Adresse der Obdach/Unterkunft:</label>
            <input type="text" name="shelterAddress" id="shelterAddress"><br>
            <label for="contact">Kontaktmöglichkeit:</label>
            <input type="text" name="contact" id="contact">
            <br><br>
            <input type="submit" value="Person registrieren">
        </form>
        <br><br>
        <a href="/welcome.php">Zurück</a>
    </body>
</html>