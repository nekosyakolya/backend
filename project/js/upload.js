$(document).ready(function()
{
    $('.MultiFile').MultiFile(
    {
         accept:'jpg|gif|bmp|png|rar', max:15, STRING:
         { 
              remove:'удалить',
              file:'$file', 
              selected:'Выбраны: $file', 
              denied:'Неверный тип файла: $ext!', 
              duplicate:'Этот файл уже выбран:\n$file!' 
         } 
    });
    
    $(".loading_images").ajaxStart(function()
    {
         $(this).show();
    })
    
    .ajaxComplete(function()
    {
         $(this).hide();
    });
    
    $('#uploadForm').ajaxForm(
    {
      success: function(data)
      {
           document.location.href = 'http://test1.ru/backend/project/php/my_albums.php';
      }
    });
});