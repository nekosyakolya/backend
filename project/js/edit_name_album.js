var edit = $("#editNameAlbum");
var block = $("#success_edit");
var error_block = $("#error_edit");

$(document).ready(function()
{
     edit.submit(function()
     { 
          var form_data = edit.serializeArray();
          $.ajax(
          {
              type: "post", 
              url: "edit_name_album.php",
              data: form_data,
              success: function(data)
              {
                  block.html("Имя альбома изменено");
                  block.removeClass("hint"); 
                  block.addClass("open_block");
              },
              error: function()
              {
                  error_block.removeClass("hint"); 
                  error_block.addClass("open_block");  
              }
          });
          return false; 
    });
});