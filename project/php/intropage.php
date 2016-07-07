<?php
    require_once("../include/connection.inc.php");
    require_once("../include/database.inc.php");
    require_once('index.php');
    session_start();
    $g_smarty->assign("name", $_SESSION["session_username"]);
    $g_smarty->display("intropage.tpl");
    