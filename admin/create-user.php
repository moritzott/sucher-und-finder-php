<?php include "../utils/only-admin.php" ?>
<?php include "../settings/sessionsConfig.php" ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Neuen Nutzer erstellen</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/static/css/w3.css">
        <link rel="stylesheet" href="/static/css/index.css">
    </head>
    <body class="w3-container">
        <p class="w3-center w3-pale-red">
            Admin-Bereich
        </p>
        <h1 class="w3-center">Neuen Nutzer erstellen</h1>
        <div class="w3-container" style="max-width: 600px;" id="divMain">
            <form action="/admin/create-new-user.php" method="post">
                <label for="firstname">Vorname:</label><br>
                <input class="w3-input w3-border" type="text" name="firstname" id="firstname" required>
                <br><br>
                <label for="lastname">Nachname:</label><br>
                <input class="w3-input w3-border" type="text" name="lastname" id="lastname" required>
                <br><br>
                <label for="email">Email:</label><br>
                <input class="w3-input w3-border" type="email" name="email" id="email" required>
                <br><br>
                <label for="password">Password:</label>
                <input class="w3-input w3-border" type="password" name="password" id="password" required><br><br>
                <label for="role">Rolle:</label><br>
                <select class="w3-select" name="role" id="role">
                    <option value="<?php echo $roles['admin']; ?>">Administrator</option>
                    <option value="<?php echo $roles['featured-user']; ?>">Erweiterter Nutzer (darf suchen)</option>
                    <option value="<?php echo $roles['normal-user']; ?>" selected >Standardnutzer</option>
                </select>
                <br><br><br>
                <div class="w3-center">
                    <a class="w3-center w3-button w3-border reducedLinkWidth w3-margin-bottom" href="/admin/index.php">&larr; Zurück</a>
                    <input class="w3-button w3-border w3-margin-bottom" type="submit" value="Registrieren">   
                </div>
            </form>
        </div>

        
    </body>
</html>