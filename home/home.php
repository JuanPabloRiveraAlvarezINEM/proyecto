<!DOCTYPE html>
<html>
    <head>
        <link href="index.css" rel="StyleSheet">
        <meta charset="utf-8">
        <title>Home</title>
    </head>
    <body>
        <?php

        session_start();

        if(!isset($_SESSION["user"])){
            
            header("location:/proyecto/login/login_input.php");

        }

        ?>
    
        <a class="button" href="/proyecto/register/register.php">Crear</a>
        <br><br>
        <a class="button" href="/proyecto/uploadc/upload.php">Subir</a>
    </body>
</html>