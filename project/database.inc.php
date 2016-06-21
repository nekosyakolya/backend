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
                $message = "Account Successfully Created";
            } 
            else 
            {
                $message = "Failed to insert data information!";
            }
        }
        else 
        {
            $message = "That username already exists! Please try another one!";
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