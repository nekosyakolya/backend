<?php
    session_start();
    require_once("../include/connection.inc.php");
    require_once("../include/database.inc.php");
    require_once("index.php");
    if (isset($_SESSION["id_album"]))
    {
         $array = getFullImgWay($_SESSION["id_album"]);
         $g_smarty->assign("img_array", getFullImgWay($_SESSION["id_album"]));
         $g_smarty->assign("img_index", $_GET['id']);
         $g_smarty->assign("img_first", $array[$_GET['id']]);
         $g_smarty->display("slider.tpl");
    }
