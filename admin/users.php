<?php include "../utils/only-admin.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin - Users</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/static/css/w3.css">
        <link rel="stylesheet" href="/static/css/index.css">
    </head>
    <body class="w3-container">
        <p class="w3-center w3-pale-red">Admin-Bereich</p>
        <h1 class="w3-center">Registrierte Nutzer</h1>
        <p class="w3-center">In dieser Tabelle sehen Sie alle registrieren Nutzer</p>
        <table class="w3-table-all">
            <tr>
                <th>ID</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Email</th>
                <th>Rolle</th>
                <th>Passwort</th> <!-- Sowas würde man natürlich nicht ausgeben im Produktivbetrieb! -->
            </tr>
            <?php 
                try {
                    // Datenbankverbindung
                    $db = new SQLite3("../db/sucher-und-finder.sqlite");

                    // gib alle Nutzer aus
                    $statement = $db->query("SELECT * FROM users");

                    while($row = $statement->fetchArray(SQLITE3_ASSOC)){
                        $id = htmlentities($row["ID"]);
                        $firstname = htmlentities($row["firstname"]);
                        $lastname = htmlentities($row["lastname"]);
                        $email = htmlentities($row["email"]);
                        $role = htmlentities($row["role"]);
                        $password = htmlentities($row["password"]);

                        echo "<tr>";
                            echo "<td>";
                                echo $id;
                            echo "</td>";
                            echo "<td>";
                                echo $firstname;
                            echo "</td>";
                            echo "<td>";
                                echo $lastname;
                            echo "</td>";
                            echo "<td>";
                                echo $email;
                            echo "</td>";
                            echo "<td>";
                                echo $role;
                            echo "</td>";
                            echo "<td>";
                                echo $password;
                            echo "</td>";
                        echo "</tr>";


                    }

                    $db->close();
                } catch (Exception $err) {
                    echo $err;
                }

            
            ?>
        </table>
        
        <br>
        <div class="w3-container w3-center">
            <a class="w3-button w3-border reducedLinkWidth" href="/admin/index.php">Zurück</a>
        </div>
        

    </body>
</html>
