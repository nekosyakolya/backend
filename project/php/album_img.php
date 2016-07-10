<?php
    session_start();
    require_once("../include/connection.inc.php");
    require_once("../include/database.inc.php");
    require_once("index.php");
    
    $title = $_GET['name'];
    if (isset($_SESSION["id_user"]))
    {
        $_SESSION["id_album"] = getIdAlbum($_SESSION["id_user"], $title);
        $g_smarty->assign("img_array", getImgPath($_SESSION["id_album"], 'img_thumbs_way'));
        $g_smarty->display("img.tpl");
    }