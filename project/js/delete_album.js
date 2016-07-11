$('#delete').click(function()
{
    $('#podlogka').addClass("open_block"); 
    $('#podlogka').removeClass("hint");
});

$(document).ready(function()
{
     $('#yes').click(function()
     {
          $.ajax(
          {
              url: "delete_album.php",
              data: "",
              success: function(data)
              {
                  if (data != 'error')
                  {
                      document.location.href = 'http://test1.ru/backend/project/php/intropage.php';
                  }
              },
              error: function()
              {
                  /*error_block.addClass("open_block");  */
              }
          });
          return false; 
    });
    $('#no').click(function()
    {
        $('#podlogka').addClass("hint"); 
        $('#podlogka').removeClass("open_block");
    });
});