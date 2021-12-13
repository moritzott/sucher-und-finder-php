<?php 
    
    // get user input from POST request
    // HTML entities???
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Noch machen: Überprüfen, ob Nutzer schon existiert!!
    // Verbindung zur Datenbank besser mit Fehlerbehandlung machen.
    try {
        
        // write user data to database:
        $db = new SQLite3("./db/sucher-und-finder.sqlite");

        $statement = $db->prepare("INSERT INTO users (firstname, lastname, email, password, role) VALUES (@firstname, @lastname, @email, @password, @role)");

        $role = "orc";
        // bind parameters
        $statement->bindParam("@firstname", $firstname, SQLITE3_TEXT);
        $statement->bindParam("@lastname", $lastname, SQLITE3_TEXT);
        $statement->bindParam("@email", $email, SQLITE3_TEXT);
        $statement->bindParam("@password", $password, SQLITE3_TEXT);
        $statement->bindParam("@role", $role, SQLITE3_TEXT);

        // Statement ausführen
        $statement->execute();

        // close Connection to Database
        $db->close();

    } catch (Exception $err) {
        echo "$err";
        exit();
    }


    // start a session and set variables
    session_start();

    $_SESSION["name"] = $firstname . " " . $lastname;
    $_SESSION["role"] = "orc";


    // redirect
    header("Location: ./welcome.php");
    exit();

?>
