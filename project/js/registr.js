var register = $("#register_form");
var block = $("#success_register");
var error_block = $("#error_register");

$(document).ready(function()
{
     register.submit(function()
     { 
          var form_data = register.serializeArray();
          $.ajax(
          {
              type: "post", 
              url: "php/register.php",
              data: form_data,
              success: function(data)
              {
                  block.html(data);
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