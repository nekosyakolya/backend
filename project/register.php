<?php
    require_once('connection.php');
    require_once('database.inc.php');
    require_once('album.html');
    if(isset($_POST['register']))
    {
	    if(!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) 
        {
            $username = htmlspecialchars($_POST['username']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $message = addInUserTable($username, $email, $password);
	    } 
        else 
        {
	        $message = "All fields are required!";
	    }
	}
    echo $message;
	