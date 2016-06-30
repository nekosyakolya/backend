<?php
    session_start();
    require_once("include/connection.inc.php");
    require_once("include/database.inc.php");
    define("ROOT_DIR", "./");
    define("INCLUDE_DIR", "include/");
    define("SMARTY_DIR", INCLUDE_DIR . "Smarty/libs/");
    require_once(SMARTY_DIR . "Smarty.class.php");
    
    $g_smarty = new Smarty();
    $g_smarty->template_dir = ROOT_DIR . "template/";
    $g_smarty->compile_dir = ROOT_DIR . "template_c/";
    $g_smarty->config_dir = ROOT_DIR . "config/";
    $g_smarty->cache_dir = ROOT_DIR . "cache/";
    if (isset($_SESSION["id_album"]))
    {
         $array = getFullImgWay($_SESSION["id_album"]);
         $g_smarty->assign("img_array", getFullImgWay($_SESSION["id_album"]));
         $g_smarty->assign("img_index", $_GET['id']);
         $g_smarty->assign("img_first", $array[$_GET['id']]);
         $g_smarty->display("slider.tpl");
    }
