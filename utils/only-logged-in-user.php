<?php 

    session_start();
    if(isset($_SESSION["name"]))
    {
        // continue with this site
    } else {
        // else redirect
        header("Location: /not-logged-in.php");
        exit();
    }

?>

