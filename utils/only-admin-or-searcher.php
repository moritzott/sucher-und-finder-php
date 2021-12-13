<?php 
    // schauen, ob angemeldet:
    if(isset($_SESSION["name"]) && isset($_SESSION["role"]))
    {
        // schaue, ob richtige Rolle (Eralubnis)
        if($_SESSION["role"] === "hobbit" || $_SESSION["role"] === "aragorn")
        {
            // continue with this site
        }
        else
        {
            header("Location: /not-authorized.php");
            exit();
        }
    }
    else 
    {
        // gar nicht angemeldet
        header("Location: /not-logged-in.php");
        exit();
    }

?>