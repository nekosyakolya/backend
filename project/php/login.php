<?php
    require_once("../include/connection.inc.php");
    require_once("../include/database.inc.php");
    require_once("index.php");
    
    $message = "error";
    if (!empty($_POST["username"]) && !empty($_POST["password"])) 
    {
        $username = htmlspecialchars($_POST["username"]);
        $password = md5(htmlspecialchars($_POST["password"]));
        if (validationUser($username, $password))
        {
            session_start();
            $_SESSION["session_username"] = $username;
            $_SESSION["id_user"] = getIdUser($username, $password);
            $message = "success";
        }
    }
    echo $message;
