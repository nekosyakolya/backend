<?php
    session_start();
    require_once("../include/delete.inc.php");
    
    if (isset($_SESSION["id_album"]))
    {
        deleteAllPhotosFromAlbum($_SESSION["id_album"], "img_full_way");
        deleteAllPhotosFromAlbum($_SESSION["id_album"], "img_thumbs_way");
        deleteAllPathsAndAlbum($_SESSION["id_album"]);
    }
    header("Location: http://test1.ru/backend/project/php/my_albums.php");