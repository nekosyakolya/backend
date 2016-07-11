<?php
    session_start();
    require_once("../include/connection.inc.php");
    require_once("../include/database.inc.php");
    
    $message = "error";
    if (isset($_SESSION["name_album"]))
    {
        $newTitle = htmlspecialchars($_POST["nameAlbum"]);
        updateAlbumName($_SESSION["id_album"], $newTitle);
        $message = "ypa";
    }
    echo $message;