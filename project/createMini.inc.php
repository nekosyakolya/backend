<?php
    function createThumbnail($filename) 
    {
        $final_width_of_image = 300;
        $path_to_image_directory = 'images/full/';
        $path_to_thumbs_directory = 'images/thumbs/';
        if(preg_match('/[.](jpg)$/', $filename)) 
        {
            $im = imagecreatefromjpeg($path_to_image_directory . $filename);
        }
        elseif (preg_match('/[.](gif)$/', $filename))
        {
            $im = imagecreatefromgif($path_to_image_directory . $filename);
        }
        elseif (preg_match('/[.](png)$/', $filename))
        {
            $im = imagecreatefrompng($path_to_image_directory . $filename);
        }
        
        $ox = (imagesx($im)/ 2) - ($final_width_of_image /2);
        $oy = (imagesy($im)/ 2) - ($final_width_of_image /2);
        
        $nx = $final_width_of_image;
        $ny = $final_width_of_image;
        
        $nm = imagecreatetruecolor($nx, $ny);
        
        imagecopyresized($nm, $im, 0, 0, $ox, $oy, $nx, $nx, $nx, $nx);

        imagejpeg($nm, $path_to_thumbs_directory . $filename);
    };

