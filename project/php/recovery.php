<?php
    require_once("include/connection.inc.php");
    require_once("include/database.inc.php");
    require_once("include/string.inc.php");
    require_once("album.html");
    
    $randomNumber = rand(9, 15);
    if (isset($_POST["recovery"]))
    {
        if (!empty($_POST["username"]) && !empty($_POST["email"])) 
        {
            $username = htmlspecialchars($_POST["username"]);
            $email = htmlspecialchars($_POST["email"]);
            if (validationRecovery($username, $email))
            {
                $password = generate_hash($randomNumber);
                $message = "Ваш новый пароль: \n" . $password;
                $headers = "От кого: ALБооом <abc@gmail.com>\nContent-type: text/plain; charset=utf-8"; 
                mail ($email, $username, $message, $headers);
                updatePassword($username, $email, md5($password));
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