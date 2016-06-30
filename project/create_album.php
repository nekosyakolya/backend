<?php
    session_start();
    require_once("include/connection.inc.php");
    require_once("include/database.inc.php");
    if (isset($_POST["createAlbum"]))
    {
        $title = htmlspecialchars($_POST["nameAlbum"]);
        $id = $_SESSION["id_user"];
        createNewAlbum($id, $title);
        $_SESSION["id_album"] = getIdAlbum($id, $title);
        header("Location: intropageMyAlbum.html");
    }
