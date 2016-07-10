<?php
    function addInUserTable($username, $email, $password)
    {
        $query = mysql_query("SELECT * FROM usertable WHERE username='".$username."'");
        $numrows = mysql_num_rows($query);
        $success = false;
        if($numrows == 0)
        {
            $sql = "INSERT INTO usertable(email, username, password)
            VALUES('$email', '$username', '$password')";
            if($result = mysql_query($sql))
            {
                $success = true;
            } 
        }
        return $success;
    }
    
    function validation($username, $password)
    {
        $query = mysql_query("SELECT * FROM usertable WHERE username='".$username."' AND password='".$password."'");
        $numrows = mysql_num_rows($query);
        return ($numrows != 0);
    }
    
    function addNewPassword($username, $email, $password)
    {
        $query = mysql_query("SELECT * FROM usertable WHERE username='".$username."' AND email='".$email."'");
        $numrows = mysql_num_rows($query); 
        if($numrows != 0)
        {
            mysql_query('UPDATE usertable SET `password`="' . $password . '" WHERE `username`="'.$username.'" AND `email`="'.$email.'"');
        }
    }
    
    function validationRecovery($username, $email)
    {
        $query = mysql_query("SELECT * FROM usertable WHERE username='".$username."' AND email='".$email."'");
        $numrows = mysql_num_rows($query);
        return ($numrows != 0);
    }
    
    function getIdUser($username, $password)
    {
        $query = mysql_query("SELECT id FROM usertable WHERE username='".$username."' AND password='".$password."'");
        if (mysql_num_rows($query) != 0)
        {
          return mysql_result($query, 0);
        }
    }
    
    function getIdAlbum($id, $title)
    {
        $query = mysql_query("SELECT album_id FROM album WHERE owner_id='".$id."' AND title='".$title."'");
        if (mysql_num_rows($query) != 0)
        {
          return mysql_result($query, 0);
        }
    }
    
    function createNewAlbum($id, $title)
    {
        $query = mysql_query("SELECT title FROM album WHERE owner_id='".$id."' AND title='".$title."'");
        if (mysql_num_rows($query) == 0)
        {
          mysql_query("INSERT INTO album(owner_id, title)
            VALUES('$id', '$title')");
        }
    }
    
    function addNewFile($id_album, $uploadfile, $wayThumbs)
    {
        mysql_query("INSERT INTO images(album_id, img_full_way, img_thumbs_way)
            VALUES('$id_album', '$uploadfile', '$wayThumbs')");
    }
    
    function getUserAlbums($id)
    {
        $result[] = "";
        $query = mysql_query("SELECT title FROM album WHERE owner_id='".$id."' ORDER BY title ASC");
        $n = mysql_num_rows($query);
        if (mysql_num_rows($query) != 0)
        {
            for ($i = 0; $i < $n; $i++)
            {
                $result[$i] = mysql_result($query, $i);
            }
            return $result;
        }
    }
    
    function getImgWay($id)
    {
        $result[] = "";
        $query = mysql_query("SELECT img_thumbs_way FROM images WHERE album_id='".$id."'");
        $n = mysql_num_rows($query);
        if (mysql_num_rows($query) != 0)
        {
            for ($i = 0; $i < $n; $i++)
            {
                $result[$i] = mysql_result($query, $i);
            }
            return $result;
        }
    }
    
    function getFullImgWay($id)
    {
        $result[] = "";
        $query = mysql_query("SELECT img_full_way FROM images WHERE album_id='".$id."'");
        $n = mysql_num_rows($query);
        if (mysql_num_rows($query) != 0)
        {
            for ($i = 0; $i < $n; $i++)
            {
                $result[$i] = mysql_result($query, $i);
            }
            return $result;
        }
    }