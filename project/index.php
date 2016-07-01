<?php
    define("ROOT_DIR", "./");
    define("INCLUDE_DIR", "include/");
    define("SMARTY_DIR", INCLUDE_DIR . "Smarty/libs/");
    require_once(SMARTY_DIR . "Smarty.class.php");
    
    $g_smarty = new Smarty();
    $g_smarty->template_dir = ROOT_DIR . "template/";
    $g_smarty->compile_dir = ROOT_DIR . "template_c/";
    $g_smarty->config_dir = ROOT_DIR . "config/";
    $g_smarty->cache_dir = ROOT_DIR . "cache/";
    $g_smarty->display("home.tpl");