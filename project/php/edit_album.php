<?php
    session_start();
    require_once("../include/connection.inc.php");
    require_once("../include/database.inc.php");
    require_once("index.php");
    
    $_SESSION["name_album"] = $_GET['name'];
    if (isset($_SESSION["id_user"]))
    {
        $_SESSION["id_album"] = getIdAlbum($_SESSION["id_user"], $_SESSION["name_album"]);
        $g_smarty->assign("name_album", $_SESSION["name_album"]);
        $g_smarty->display("edit_album.tpl");
    }