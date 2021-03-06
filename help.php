<?php include "./settings/contactConfig.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Hilfe</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/static/css/w3.css">
        <link rel="stylesheet" href="/static/css/index.css">
    </head>
    <body class="w3-container">
        <div class="w3-container w3-center " style="max-width: 600px;" id="divMain">
            <h1 class="w3-center">Hilfe</h1>
            <p>
                Sucher & Finder ist eine Webanwendung zur Vermisstensuche nach Katastrophenfällen.
                Nach Katastrophenfällen sind oft viele Menschen obdachlos und müssen in Unterkünften
                untergebracht werden. Dabei kann leicht der Überblick verloren gehen, wer sicher 
                untergebracht wurde und wer noch als vermisst gilt. 
                    
            </p>
            <p>
                Private Personenhaushalte und staatliche Notunterkünfte
                können mit dieser Anwendung aufgenommene Personen registrieren, denen sie Obdach gewährt haben (Finder).
                Gleichzeitig haben die Polizei und ähnliche Behörden die Möglichkeit,
                nach Personen und ihrem Aufenthaltsort zu suchen (Sucher), um Vermisstenanzeigen gegebenenfalls 
                schneller aufzuklären. Aus Sicherheitsgründen haben nur polizeiliche 
                Behörden die Möglichkeit, nach Personen zu suchen.
            </p>
            <p>
                Sie können bei weiteren Fragen Kontakt zum Administrator aufnehmen:
            </p>
            <p>
                <?php echo $contact; ?>
            </p>
            <a href="/index.php" class="w3-button w3-border w3-margin">&larr; Zurück</a>
        </div>
    </body>
</html>