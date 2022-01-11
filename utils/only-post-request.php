<?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // continue with this site
    }
    else
    {
        // Aufruf erfolgte nicht über POST !
        header("Location: /errors/disallowed-request.php");
        exit();
    }

?>