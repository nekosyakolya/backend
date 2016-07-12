<?php
    session_start();
    require_once("../include/connection.inc.php");
    require_once("../include/database.inc.php");
    require_once("../include/createMini.inc.php");
    require_once("../include/config.inc.php"); 
    
    if (isset($_POST["loading"]))
    {
        $error = "";
        $fileElementName = "fileToUpload";
        $filesCount = sizeof($_FILES[$fileElementName]["name"]);

        for ($i = 0; $i < $filesCount - 1; $i++) 
        {
            if (!empty($_FILES[$fileElementName]["error"][$i]))
            {
                switch($_FILES[$fileElementName]["error"][$i])
                {

                    case "1":
                        $error = "размер загруженного файла превышает размер установленный параметром upload_max_filesize  в php.ini ";
                        break;
                    case "2":
                        $error = "размер загруженного файла превышает размер установленный параметром MAX_FILE_SIZE в HTML форме. ";
                        break;
                    case "3":
                        $error = "загружена только часть файла ";
                        break;
                    case "4":
                        $error = "файл не был загружен (Пользователь в форме указал неверный путь к файлу). ";
                        break;
                    case "6":
                        $error = "неверная временная дирректория";
                        break;
                    case "7":
                        $error = "ошибка записи файла на диск";
                        break;
                    case "8":
                        $error = "загрузка файла прервана";
                        break;
                    default:
                        $error = "No error code avaiable";
                }
            }
            elseif (empty($_FILES[$fileElementName]["tmp_name"][$i]) || $_FILES[$fileElementName]["tmp_name"][$i] == "none")
            {
                $error = "No file was uploaded..";
            }
            else
            {
                 $extension = strtolower(substr(strrchr($_FILES[$fileElementName]["name"][$i], "."), 1));
                 $filename = substr(md5(microtime() . rand(0, 9999)), 1, 10);
                 $name = $filename . "." . $extension;
                 move_uploaded_file($_FILES[$fileElementName]["tmp_name"][$i], FILE_PATH_TMP . $name);
                 createNewFullImg($name);
                 createSquareImg($name);
                 $pathTmp = FILE_PATH_TMP . $name;
                 $pathFull = FILE_PATH_FULL . $name;
                 $pathThumbs= FILE_PATH_THUMBS . $name;
                 $idAlbum = $_SESSION["id_album"];
                 addNewFile($idAlbum, $pathFull, $pathThumbs);
                 @unlink($pathTmp);
                 @unlink($_FILES[$fileElementName][$i]);
            }
            if ($error)
            {
                echo $error;
            };

        };
    }