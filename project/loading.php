<?php
    require_once('album.html');
    $maxSize = 1024000;
    $blacklist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm");
    foreach ($blacklist as $item)
    {
        if(preg_match("/$item\$/i", $_FILES['somename']['name'])) 
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
