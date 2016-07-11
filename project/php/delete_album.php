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
    echo $message;