<?php 

    // für Rollenbewertung, importiere sessionsConfig
    require_once "../settings/sessionsConfig.php";


    // starte die Session 
    session_start();

    // schauen, ob ein Nutzername und  Rolle hat
    if(isset($_SESSION["name"]) && isset($_SESSION["role"])) 
    {
        // schauen ob die richtige Rolle gesetzt ist
        if($_SESSION["role"] === $roles["admin"]) 
        {
            // continue with this site
        } else {
            // nicht authorisiert!
            header("Location: /errors/not-authorized.php");
            exit();
        } 
        
    } else 
    {
        // nicht angemeldet
        header("Location: /errors/not-logged-in.php");
        exit();
    }

?>