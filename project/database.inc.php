<?php
    function addInUserTable($username, $email, $password)
    {
        $query = mysql_query("SELECT * FROM usertable WHERE username='".$username."'");
        $numrows = mysql_num_rows($query); 
        if($numrows == 0)
        {
            $sql="INSERT INTO usertable(email, username, password)
            VALUES('$email', '$username', '$password')";
            $result = mysql_query($sql);
            if($result)
            {
                $message = "Регистрация прошла успешно!";
            } 
            else 
            {
                $message = "Не удалось сохранить данные!";
            }
        }
        else 
        {
            $message = "Это имя пользователя уже существует! Пожалуйста, попробуйте еще раз!";
        }
        return $message;
    }
    function validation($username, $password)
    {
        $query = mysql_query("SELECT * FROM usertable WHERE username='".$username."' AND password='".$password."'");
	    $numrows = mysql_num_rows($query);
        $result = 1;
	    if($numrows != 0)
        {
            while($row = mysql_fetch_assoc($query))
            {
                $dbusername = $row['username'];
                $dbpassword = $row['password'];
            }
            if($username == $dbusername && $password == $dbpassword)
            {
                $result = 2;
            }
        }
        return $result;    
    }