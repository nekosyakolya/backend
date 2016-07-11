<?php
    session_start();
    require_once("../include/connection.inc.php");
    require_once("../include/database.inc.php");
    require_once("index.php");
    
    if (isset($_SESSION["id_user"]))
    {
      $g_smarty->assign("title_array", getUserAlbums($_SESSION["id_user"]));
      
      $g_smarty->display("album.tpl");
    }
    