<?php

    // für Rollenbewertung, importiere sessionsConfig
    require_once "../settings/sessionsConfig.php";

    // starte session
    session_start();

    // schauen, ob angemeldet:
    if(isset($_SESSION["name"]) && isset($_SESSION["role"]))
    {
        // schaue, ob richtige Rolle (Eralubnis)
        if($_SESSION["role"] === $roles["normal-user"]) 
        {
            // continue with this site
        }
        else
        {
            header("Location: /errors/not-authorized.php");
            exit();
        }
    }
    else 
    {
        // gar nicht angemeldet
        header("Location: /errors/not-logged-in.php");
        exit();
    }

?>