var register = $("#register_form");
var block = $("#success_register");
var errorBlock = $("#error_register");
var hide = "hint";
var show = "open_block";

$(document).ready(function()
{
     register.submit(function()
     { 
          var formData = register.serializeArray();
          $.ajax(
          {
              type: "post", 
              url: "php/register.php",
              data: formData,
              success: function(data)
              {
                  block.html(data);
                  block.removeClass(hide); 
                  block.addClass(show);
              },
              error: function()
              {
                  errorBlock.removeClass(hide); 
                  errorBlock.addClass(show);  
              }
          });
          return false; 
    });
});