<?php
    require_once('../include/connection.inc.php');
    require_once('../include/database.inc.php');
    require_once('../index.php');
    if (isset($_POST['register']))
    {
        if (!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) 
        {
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $password = md5(htmlspecialchars($_POST['password']));
            $message = addInUserTable($username, $email, $password);
        }
        else
        {
            $message = "Заполните все поля,пожалуйста!";
        }
    }
    $g_smarty->assign("mail", $message);
    $g_smarty->display("../template/registr.tpl");