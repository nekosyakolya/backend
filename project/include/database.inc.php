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
    
    function validationUser($username, $password)
    {
        $query = mysql_query("SELECT * FROM usertable WHERE username='".$username."' AND password='".$password."'");
        $numrows = mysql_num_rows($query);
        return ($numrows != 0);
    }
    
    function updatePassword($username, $email, $password)
    {
        $query = mysql_query("SELECT * FROM usertable WHERE username='".$username."' AND email='".$email."'");
        $numrows = mysql_num_rows($query); 
        if($numrows != 0)
        {
            mysql_query('UPDATE usertable SET `password`="' . $password . '" WHERE `username`="'.$username.'" AND `email`="'.$email.'"');
        }
    }
    
    function updateAlbumName($album_id, $newTitle)
    {
        $query = mysql_query("SELECT * FROM album WHERE album_id='".$album_id."'");
        $numrows = mysql_num_rows($query); 
        if($numrows != 0)
        {
            mysql_query('UPDATE album SET `title`="' . $newTitle . '" WHERE `album_id`="'.$album_id.'"');
        }
    }
    
    function deleteAlbum($album_id)
    {
        $query = mysql_query("SELECT * FROM images WHERE album_id='".$album_id."'");
        $numrows = mysql_num_rows($query); 
        if($numrows != 0)
        {
            mysql_query('DELETE FROM images WHERE `album_id`="'.$album_id.'"');
            mysql_query('DELETE FROM album WHERE `album_id`="'.$album_id.'"');
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
    
    function getIdAlbum($owner_id, $title)
    {
        $query = mysql_query("SELECT album_id FROM album WHERE owner_id='".$owner_id."' AND title='".$title."'");
        if (mysql_num_rows($query) != 0)
        {
          return mysql_result($query, 0);
        }
    }
    
    function createNewAlbum($owner_id, $title)
    {
        $query = mysql_query("SELECT title FROM album WHERE owner_id='".$owner_id."' AND title='".$title."'");
        if (mysql_num_rows($query) == 0)
        {
          mysql_query("INSERT INTO album(owner_id, title)
            VALUES('$owner_id', '$title')");
        }
    }
    
    function addNewFile($id_album, $img_full_path, $img_thumbs_path)
    {
        mysql_query("INSERT INTO images(album_id, img_full_way, img_thumbs_way)
            VALUES('$id_album', '$img_full_path', '$img_thumbs_path')");
    }
    
    function getUserAlbums($owner_id)
    {
        $result = array();
        $query = mysql_query("SELECT title FROM album WHERE owner_id='".$owner_id."' ORDER BY title ASC");
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
    
    function getImgPath($album_id, $path)
    {
        $result = array();
        $query = mysql_query("SELECT ".$path." FROM images WHERE album_id='".$album_id."'");
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