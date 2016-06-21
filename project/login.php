<?php
	session_start();
    require_once('connection.php');
    require_once('database.inc.php');
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
	        if (validation($username, $password) == 2)
            {
	            $_SESSION['session_username'] = $username;	 
                header("Location: intropage.html");
	        } 
            else 
            {
                $message = "Invalid username or password!";
            }
	    } 
        else 
        {
            $message = "All fields are required!";
	    }
	}
    header("Location: error.html");