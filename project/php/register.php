<?php
    require_once("../include/connection.inc.php");
    require_once("../include/database.inc.php");
    require_once("../include/config.inc.php");
    
    $message = EMPTY_FIELD;
    if (!empty($_POST["email"]) && !empty($_POST["username"]) && !empty($_POST["password"])) 
    {
        $username = htmlspecialchars($_POST["username"]);
        $email = htmlspecialchars($_POST["email"]);
        $password = md5(htmlspecialchars($_POST["password"]));
        $message = ERROR_REGISTRATION;
        if (addInUserTable($username, $email, $password))
        {
          $message = SUCCESSFUL_REGISTRATION;
        }
    }
    echo $message;