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
        <link rel="stylesheet" href="/css/w3.css">
    </head>
    <body class="w3-container">
        <?php
            $username = htmlentities($_SESSION["name"]);
            echo "<h1>Willkommen $username!</h1>";
        ?>
        <p>Sie sind angemeldet und alles ist gut</p>
        <br><br>
        <h2>Aktionen</h2>
        <ul>
            <?php
                if($_SESSION["role"] == "aragorn")
                {
                    echo "<li><a href='/admin/index.php'>Admin-Bereich</a></li>";
                }
                elseif($_SESSION["role"] == "hobbit")
                {
                    echo "<li><a href='/sucher/index.php'>Nach Person suchen</a></li>";
                }
                else
                {
                    // echo nothing here
                }
            ?>
            <li><a href="/my-registered-persons.php">Registrierte Personen</a></li>
            <li><a href="/register-new-person.php">Neue Person registrieren</a></li>
        </ul>
        <br><br>
        <a class="w3-button w3-border" href="./logout.php">Abmelden</a>
    </body>
</html>