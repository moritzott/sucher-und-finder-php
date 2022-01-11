<?php include "../utils/only-admin.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/static/css/w3.css">
        <link rel="stylesheet" href="/static/css/index.css">
    </head>
    <body class="w3-container">
        <p class="w3-center w3-pale-red">Admin-Bereich</p>
        <h1 class="w3-center">In Obdach befindliche Personen</h1>
        
        <table class="w3-table-all">
            <tr>
                <th>ID</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Adresse</th>
                <th>Kontaktmöglichkeit</th>
                <th>Registrator</th> 
            </tr>
            <?php 
                try {
                    // Datenbankverbindung
                    $db = new SQLite3("../db/sucher-und-finder.sqlite");

                    // gib alle Nutzer aus
                    $statement = $db->query("SELECT * FROM obdach");

                    while($row = $statement->fetchArray(SQLITE3_ASSOC)){
                        $id = htmlentities($row["ID"]);
                        $firstname = htmlentities($row["firstname"]);
                        $lastname = htmlentities($row["lastname"]);
                        $address = htmlentities($row["address"]);
                        $contact = htmlentities($row["contactPossibility"]);
                        $registrator = htmlentities($row["Registrator"]); // das muss noch nach NAme aufgelöst werden??

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
                                echo $address;
                            echo "</td>";
                            echo "<td>";
                                echo $contact;
                            echo "</td>";
                            echo "<td>";
                                echo $registrator;
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
        <div class="w3-center">
            <a class="w3-button w3-border reducedLinkWidth" href="/admin/index.php">Zurück</a>
        </div>

    </body>
</html>