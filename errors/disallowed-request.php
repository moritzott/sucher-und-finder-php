<?php include "../settings/contactConfig.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Nicht erlaubter Aufruf</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/static/css/w3.css">
        <link rel="stylesheet" href="/static/css/index.css">
    </head>
    <body class="w3-container">
        <div class="w3-container w3-center" style="max-width: 600px;" id="divMain">
            <h1>Die Aufruf-Methode der Seite ist nicht erlaubt.</h1>
            <p>
                Sie haben versucht, die Seite über eine Methode aufzurufen,
                die nicht erlaubt ist.
            </p>
            <p>
                Bei Fragen hierzu wenden Sie sich bitte an den Administrator
                und schildern den Fall:
            </p>
            <?php echo "<p>$contact</p>"; ?>
            <a class="w3-button w3-border w3-margin" href="/index.php">Startseite</a>
        </div>

    </body>
</html>