<?php
    require_once("../include/connection.inc.php");
    require_once("../include/database.inc.php");
    require_once("index.php");
    $error = true;
    if (isset($_POST["login"]))
    {
        if (!empty($_POST["username"]) && !empty($_POST["password"])) 
        {
            $username = htmlspecialchars($_POST["username"]);
            $password = md5(htmlspecialchars($_POST["password"]));
            if (validation($username, $password))
            {
                $error = false;
                session_start();
                $_SESSION["session_username"] = $username;
                $_SESSION["id_user"] = getIdUser($username, $password);
                header("Location: intropage.php");
            }
        }
    }
    if ($error)
    {
      header("Location: ../album.html");
    }
