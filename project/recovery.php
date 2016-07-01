<?php
    require_once("include/connection.inc.php");
    require_once("include/database.inc.php");
    require_once("include/string.inc.php");
    require_once("home.php");
    $randomNumber = rand(9, 15);
    $error = true;
    if (isset($_POST["recovery"]))
    {
        if (!empty($_POST["username"]) && !empty($_POST["email"])) 
        {
            $username = htmlspecialchars($_POST["username"]);
            $email = htmlspecialchars($_POST["email"]);
            if (validationRecovery($username, $email))
            {
                $error = false;
                $password = generate_hash($randomNumber);
                $message = "Ваш новый пароль: \n" . $password;
                $headers = "От кого: ALБооом <abc@gmail.com>\r\nContent-type: text/plain; charset=utf-8"; 
                mail ($email, $username, $message, $headers);
                addNewPassword($username, $email, md5($password));
            }
    }
    if ($error)
    {
         header("Location: error.html");
    }