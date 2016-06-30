<?php
    require_once("include/connection.inc.php");
    require_once("include/database.inc.php");
    if (isset($_POST["login"]))
    {
        if (!empty($_POST["username"]) && !empty($_POST["password"])) 
        {
            $username = htmlspecialchars($_POST["username"]);
            $password = md5(htmlspecialchars($_POST["password"]));
            if (validation($username, $password))
            {
                session_start();
                $_SESSION["session_username"] = $username;
                $_SESSION["id_user"] = getId($username, $password);
                header("Location: intropage.html");
            }
            else 
            {
                header("Location: error.html");
            }
        } 
        else 
        {
            header("Location: error.html");
        }
    }
