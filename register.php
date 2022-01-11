<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registrieren</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/static/css/w3.css">
        <link rel="stylesheet" href="/static/css/index.css">
    </head>
    <body class="w3-container">
        <div class="w3-container" style="max-width: 600px;" id="divMain">
            <h1 class="w3-center">Registrieren</h1>
            <form action="/register-new-user.php" method="post">
                <br><br>
                <label class="" for="firstname">Vorname:</label><br>
                <input class="w3-input w3-border" type="text" name="firstname" id="firstname" required>
                <br><br>
                <label for="lastname">Nachname:</label><br>
                <input class="w3-input w3-border" type="text" name="lastname" id="lastname" required>
                <br><br>
                <label for="email">Email:</label><br>
                <input class="w3-input w3-border"  type="email" name="email" id="email" required>
                <br><br>
                <label for="password">Passwort:</label><br>
                <input class="w3-input w3-border" type="password" name="password" id="password" required>
                <br><br>

                <!-- Captach-Abfrage hier einfügen! -->
                <div class="w3-center">
                    <a href="/index.php" class="w3-button w3-border reducedLinkWidth w3-margin-bottom">&larr; Zurück</a>
                    <input type="submit" value="Registrieren" class="w3-button w3-border w3-margin-bottom">
                </div>
            </form>

            
        </div>

</html>