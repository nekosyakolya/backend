<?php
    session_start();
    require_once("../include/connection.inc.php");
    require_once("../include/database.inc.php");
    
    $message = "error";
    if (isset($_SESSION["id_album"]))
    {
        deleteAlbum($_SESSION["id_album"]);
        $message = "ypa";
    }
    header("Location: http://test1.ru/backend/project/php/my_albums.php");