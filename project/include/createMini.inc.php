<?
    $final_width_of_image = 200;
    $path_to_image_directory = 'images/full/';
    $path_to_thumbs_directory = 'images/thumbs/';
    function createThumbnail($filename) 
    {
      if(preg_match('/[.](jpg)$/', $filename)) 
      {
        $im = imagecreatefromjpeg($path_to_image_directory . $filename);
      } else if (preg_match('/[.](gif)$/', $filename)) {
        $im = imagecreatefromgif($path_to_image_directory . $filename);
      } else if (preg_match('/[.](png)$/', $filename)) {
        $im = imagecreatefrompng($path_to_image_directory . $filename);
      } //Определяем формат изображения
      
      $ox = imagesx($im);
      $oy = imagesy($im);
      
      $nx = $final_width_of_image;
      $ny = floor($oy * ($final_width_of_image / $ox));
      
      $nm = imagecreatetruecolor($nx, $ny);
      
      imagecopyresized($nm, $im, 0,0,0,0,$nx,$ny,$ox,$oy);

      imagejpeg($nm, $path_to_thumbs_directory . $filename);
    };

