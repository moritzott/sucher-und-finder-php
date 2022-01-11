<?php require_once "./utils/only-logged-in-user.php"; ?>
<?php include "./settings/sessionsConfig.php" ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Willkommen</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/static/css/w3.css">
        <link rel="stylesheet" href="/static/css/index.css">
    </head>
    <body class="w3-container">
        <div class="w3-container w3-center " style="max-width: 600px;" id="divMain">
            <?php
                $username = htmlentities($_SESSION["name"]);
                echo "<h1>Willkommen $username!</h1>";
            ?>
            <p>Sie sind angemeldet.</p>
            <br>
            <h2>Aktionen</h2>
            <p>Im Folgenden sehen Sie eine Reihe an Aktionen,
                die Sie durchführen können. Lassen Sie sich Ihre registrierten
                Personen anzeigen, registrieren Sie eine neue Person, die bei Ihnen
                Obdach gefunden hat, oder bearbeiten Sie Ihren Account.
            </p>
            <div>
                <?php
                    if($_SESSION["role"] === $roles["admin"])
                    {
                        echo "<a href='/admin/index.php' class='w3-button w3-border w3-margin'>Admin-Bereich</a>";
                    }
                    elseif($_SESSION["role"] === $roles["featured-user"] ) // ebenso
                    {
                        echo "<a href='/sucher/index.php' class='w3-button w3-border w3-margin' >Person suchen</a>";
                    }
                    else
                    {
                        // do nothing here
                    }
                ?>
                <a href="/finder/my-registered-persons.php" class="w3-button w3-border w3-margin">Registrierte Personen</a>
                <a href="/finder/index.php" class="w3-button w3-border w3-margin">Neue Person registrieren</a>
                <a href="/options/index.php" class="w3-button w3-border w3-margin">Account bearbeiten</a>
                <a href="#" class="w3-button w3-border w3-margin">Account löschen</a>
                <a class="w3-button w3-border w3-margin" href="./logout.php">Abmelden</a>

            </div>
        </div>
        
    </body>
</html>