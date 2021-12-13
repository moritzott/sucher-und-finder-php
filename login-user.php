<?php 
    // get all user information from form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Verbindung zur Datenbank: gebe den Nutzer mit dieser Mail und überprüfe, ob das Passwort stimmt
    try {
        $db = new SQLite3("./db/sucher-und-finder.sqlite");

        $statement = $db->prepare("SELECT * FROM users WHERE email = @email ;");
        // $statement = $db->prepare("SELECT * FROM users WHERE email = @email AND password = @password ;");
        $statement->bindParam("@email", $email, SQLITE3_TEXT);
        // $statement->bindParam("@password", $password, SQLITE3_TEXT);

        // ausführen
        $result = $statement->execute();

        // mögliches Ergebnis auffangen (nur als assoziativeer Array und nicht zusätzlich als numerischer!)
        
        $user = $result->fetchArray(SQLITE3_ASSOC); # verbeesert die Performance!

        // close DB
        $db->close();

        // gibt es den Nutzer? ->
        if($user) 
        {
            // nutzer existiert

            // schauen, ob das Passwort richtig ist
            if(password_verify($password, $user["password"]))
            {
                // wenn wahr, dann stimmt Passwort,
                // weitermachen
                // wenn alles passt: starte session und setzte name und rolle
                session_start();
                $firstname = $user["firstname"];
                $lastname = $user["lastname"];
                $name = $firstname . " " . $lastname;
                $role = $user["role"];

                $_SESSION["name"] = $name;
                $_SESSION["role"] = $role;

                // leiter rüber zur Welcome-Seite:
                header("Location: /welcome.php");
            }
            else {
                // Passwort stimmt nicht; weiterleiten und Abbruch hier!
                header("Location: /not-logged-in.php"); // andere Seite dafür
                exit();
            }

        } else 
        {
            // Nutzer existiert nicht:
            // umleiten
            header("Location: /not-logged-in.php");
            exit();
        }

    } catch (Exception $error) {
        echo $error;
        exit();
    }


    

    
?>
