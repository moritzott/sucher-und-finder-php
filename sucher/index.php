<?php 

    session_start();
    // is user logged in?
    if(isset($_SESSION["name"]))
    {
        // check permission:
        if($_SESSION["role"] == "hobbit")
        {
            // continue with this site
        } 
        else 
        {
            // has no permission for this site
            header("Location: /not-authorized.php");
            exit();
        }
    } 
    else 
    {
        // else redirect because user not logged in
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
        <h1>Nach Person suchen</h1>
        <br><br>
        <a href="/welcome.php">Zurück</a>
    </body>
</html>