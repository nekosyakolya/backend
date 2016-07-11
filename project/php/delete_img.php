<?php
    session_start();
    require_once("../include/connection.inc.php");
    require_once("../include/database.inc.php");
    require_once("index.php");
    
    
    if (isset($_SESSION["id_user"]))
    {
        $id = $_GET['id'];
        $pathFull = getOneImgPath($id, "img_full_way");
        @unlink($pathFull);
        $pathThumbs = getOneImgPath($id, "img_thumbs_way");
        @unlink($pathThumbs);
        deleteImg($id);
        $_SESSION["id_album"] = getIdAlbum($_SESSION["id_user"], $_SESSION["name_album"]);
        $g_smarty->assign("name_album", $_SESSION["name_album"]);
        $g_smarty->assign("img_array", getImgPath($_SESSION["id_album"], 'img_thumbs_way'));
        $g_smarty->assign("id_array", getImgId($_SESSION["id_album"]));
        $g_smarty->display("edit_album.tpl");
    }