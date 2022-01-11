<?php 

    session_start();
    if(!isset($_SESSION["name"]))
    {
        header("Location: /errors/not-logged-in.php");
        exit();
    }

?>

