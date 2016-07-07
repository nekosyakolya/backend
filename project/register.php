<?php
    require_once('index.php');
    require_once('include/connection.inc.php');
    require_once('include/database.inc.php');
    $success = false;
    if (isset($_POST['register']))
    {
        if (!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) 
        {
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $password = md5(htmlspecialchars($_POST['password']));
            $message = addInUserTable($username, $email, $password);
            $success = true;
        }
    }
    