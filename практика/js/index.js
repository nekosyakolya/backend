var button = $(".contact_text");
var close = $(".close");
button.click(function()
{
    close.css("display", "inline-block");
    $(".support_block").addClass("white");
    $(".support_block").addClass("allocation");
    $(".open_block").css("display", "block");
    $(".open_block").addClass("allocation");    
});

close.click(function()
{
    close.css("display", "none");
    $(".support_block").removeClass("allocation"); 
    $(".support_block").removeClass("white"); 
    $(".open_block").css("display", "none");
});
