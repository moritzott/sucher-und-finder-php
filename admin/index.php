<?php include "../utils/only-admin.php" ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/w3.css">
    </head>
    <body class="w3-container">
        <h1>Admin-Bereich</h1>
        <?php
            $nutzername = $_SESSION["name"];
            echo "<h2>Hallo $nutzername!</h2>";
        ?>
        <h4>Aktionen</h4>
        <ul>
            <li>
                <a href="/admin/users.php">Alle Nutzer anzeigen</a>
            </li>
            <li>
                <a href="/admin/found-persons.php">Untergekommene Personen anzeigen</a>
            </li>
        </ul>
        <br><br><br>
        <a class="w3-button w3-border" href="../logout.php">Abmelden</a>
        <br><br>
        <a class="w3-button w3-border" href="../welcome.php">Welcome-Seite besuchen.</a>

    </body>
</html>