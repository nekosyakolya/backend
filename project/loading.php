<?php
    session_start();
    require_once("include/connection.inc.php");
    require_once("include/database.inc.php");
    require_once('intropage.html');
    if (isset($_SESSION["id_album"]))
    {
        $maxSize = 1024000;
        $blacklist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm");
        foreach ($blacklist as $item)
        {
            if (preg_match("/$item\$/i", $_FILES['somename']['name']))
            {
                exit;
            }
        }
        $type = $_FILES['somename']['type'];
        $size = $_FILES['somename']['size'];
        if (($type != "image/jpg") && ($type != "image/jpeg") && ($type != "image/png")) 
        {
            exit;
        }
        if ($size > $maxSize) 
        {
            exit;
        }
        $uploadfile = "images/".$_FILES['somename']['name'];
        move_uploaded_file($_FILES['somename']['tmp_name'], $uploadfile);
        $id_album = $_SESSION["id_album"];
        addNewFile($id_album, $uploadfile);
    }
    else
    {
      echo "error";
    }
