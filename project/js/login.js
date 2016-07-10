var login = $("#login");
var message = $("#success_login");
var error_block = $("#error_login");

$(document).ready(function()
{
     login.submit(function()
     { 
          var form_data = login.serializeArray();
          $.ajax(
          {
              type: "post", 
              url: "php/login.php",
              data: form_data,
              success: function(data)
              {
                  if (data == 'error')
                  {
                      message.removeClass("hint"); 
                      message.addClass("open_block");
                  }
                  else
                  {
                      document.location.href = 'http://test1.ru/backend/project/php/intropage.php';
                  }
              },
              error: function()
              {
                  error_block.addClass("open_block");  
              }
          });
          return false; 
    });
});