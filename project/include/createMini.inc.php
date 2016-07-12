<?php
    require_once("config.inc.php"); 
    
    function createNewImage($filename, $pathToImageDirectory) 
    {
      if(preg_match('/[.](jpg)$/', $filename)) 
      {
          $image = imagecreatefromjpeg($pathToImageDirectory . $filename);
      }
      elseif (preg_match('/[.](gif)$/', $filename))
      {
          $image = imagecreatefromgif($pathToImageDirectory . $filename);
      }
      elseif (preg_match('/[.](png)$/', $filename))
      {
          $image = imagecreatefrompng($pathToImageDirectory . $filename);
      }
      return $image;
    }
    
    function addImage($filename, $pathToImageDirectory, $newImage) 
    {
        if(!file_exists($pathToImageDirectory))
        {
            if(!mkdir($pathToImageDirectory))
            {
                die("Возникли проблемы! попробуйте снова!");
            } 
        }
        imagejpeg($newImage, $pathToImageDirectory . $filename);
    }
    

    
    function createSquareImg($filename) 
    {
        $finalWidthOfImage = 300;
        $image = createNewImage($filename, FILE_PATH_TMP);
        
        $imageWidth = $finalWidthOfImage;
        $imageHeight = $finalWidthOfImage;
        $imageX = (imagesx($image)/ 2) - ($finalWidthOfImage /2);
        $imageY = (imagesy($image)/ 2) - ($finalWidthOfImage /2);
        $newImageX = 0;
        $newImageY = 0;
        $newImageWidth = $finalWidthOfImage;
        $newImageHeight = $finalWidthOfImage;
        
        $newImage = imagecreatetruecolor($finalWidthOfImage, $finalWidthOfImage);
        imagecopyresized($newImage, $image, $newImageX, $newImageY, $imageX, $imageY, $newImageWidth, $newImageHeight, $imageWidth, $imageHeight);
        addImage($filename, FILE_PATH_THUMBS, $newImage);
    };

    function createNewFullImg($filename) 
    {
        $finalWidthOfImage = 600;
        $image = createNewImage($filename, FILE_PATH_TMP);
        
        $imageWidth = imagesx($image);
        $imageHeight = imagesy($image);
        $imageX = 0;
        $imageY = 0;
        $newImageWidth = $finalWidthOfImage;
        $newImageHeight = floor($imageHeight  * ($finalWidthOfImage / $imageWidth));
        $newImageX = 0;
        $newImageY = 0;
        
        $newImage = imagecreatetruecolor($newImageWidth, $newImageHeight);
        imagecopyresized($newImage, $image, $newImageX, $newImageY, $imageX, $imageY, $newImageWidth, $newImageHeight, $imageWidth, $imageHeight);
        addImage($filename, FILE_PATH_FULL, $newImage);
    };
