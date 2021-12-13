<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registrieren</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/w3.css">
    </head>
    <body class="w3-container">
        <h1>Registrieren</h1>
        <form action="/register-new-user.php" method="post">
            <label for="firstname">Vorname:</label>
            <input class="w3-input w3-border" type="text" name="firstname" id="firstname" required>
            <br>
            <label for="lastname">Nachname:</label>
            <input class="w3-input w3-border" type="text" name="lastname" id="lastname" required>
            <br>
            <label for="email">Email:</label>
            <input class="w3-input w3-border" type="email" name="email" id="email" required>
            <br>
            <label for="password">Password</label>
            <input class="w3-input w3-border" type="password" name="password" id="password" required>
            <br><br>
            <input class="w3-button w3-border" type="submit" value="Registrieren">
        </form>
        <div>
            <a class="w3-button w3-border" href="./index.php">Abbrechen</a>
        </div>
    </body>
</html>