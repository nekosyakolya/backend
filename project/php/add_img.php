<?php
    session_start();
    require_once("../include/connection.inc.php");
    require_once("../include/database.inc.php");
    require_once("index.php");
    
    if (isset($_SESSION["id_user"]))
    {
        $id = $_SESSION["id_user"];
        $_SESSION["id_album"] = getIdAlbum($id, $_SESSION["name_album"]);
        $g_smarty->assign("name", $_SESSION["session_username"]);
        $g_smarty->display("intropageMyAlbum.tpl");
    }
