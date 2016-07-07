$(document).ready(function()
{
     $("#register_form").submit(function()
     { 
          var form_data = $("#register_form").serializeArray();
          $.ajax(
          {
              type: "POST", 
              url: "php/register.php",
              data: form_data,
              success: function(data)
              {
                  $('#success_register').html(data);
                  $('#success_register').css("display", "block");
              },
              error: function()
              {
                  $('#error_register').css("display", "block");  
              }
          });
          return false; 
    });
});