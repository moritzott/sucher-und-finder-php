<?php 
    session_start();
    session_unset();
    $_SESSION = array();
?>
<?php require_once "./settings/contactConfig.php" ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Abmeldung</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/static/css/w3.css">
        <link rel="stylesheet" href="/static/css/index.css">
    </head>
    <body class="w3-container">
        <div class="w3-container w3-center " style="max-width: 600px;" id="divMain">
        <?php 
            if(isset($_SESSION["name"]))
            {
                echo "\t<h1>Fehler: Abmeldung fehlgeschlagen</h1>\t";
                echo "\t\t\t<p>Nehmen Sie Kontakt zum Administrator auf und schildern Sie den Vorfall:</p>\n";
                echo "\t\t\t<p>$contact</p><br><br>\n";
                echo "\t\t\t<a class='w3-button w3-border' href='/index.php'>Startseite</a>";
            } else 
            {
                echo "\t<h1>Abmeldung</h1>\n";
                echo "\t\t\t<p>Sie wurden vom System abgemeldet.</p>\n\t\t\t<br><br>";
                echo "<a class='w3-button w3-border' href='/index.php'>Startseite</a>";
            }
        
        ?>

        </div>  
    </body>
</html>