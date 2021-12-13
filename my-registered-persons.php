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
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Auflistung Ihrer registrierten Personen</h1>
        <table>
            
        </table>
        <br><br>
        <a href="/welcome.php">Zurück</a>

    </body>
</html>