<?php
    require_once("connection.inc.php");
    require_once("database.inc.php");
    
    function deleteAllPhotosFromAlbum($id, $receivedPath)
    {
        $path = array();
        $path = getImgPath($id, $receivedPath);
        if ($path)
        {
            for ($i = 0; $i < count($path); $i++) 
            {
              @unlink($path[$i]);
            }
        }
    }
    
    function deleteAllPathsAndAlbum($id)
    {
        deleteAlbum($id);
    }