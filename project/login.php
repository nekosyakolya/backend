<?php
    session_start();
    require_once('include/connection.inc.php');
    require_once('include/database.inc.php');
    if (isset($_SESSION["session_username"]))
    {  
      header("Location: intropage.html");
    }
    if (isset($_POST["login"]))
    {
        if (!empty($_POST['username']) && !empty($_POST['password'])) 
        {
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            if (validation($username, $password))
            {
                $_SESSION['session_username'] = $username;
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
