var button = $(".phone_contact_text");
var close = $(".close");
button.click(function()
{
    close.css("display", "inline-block");
    $(".support_block").addClass("white");
    $(".support_block").addClass("allocation");
    $(".secret_block").css("display", "block");
    $(".secret_block").addClass("allocation");    
});

close.click(function()
{
    close.css("display", "none");
    $(".support_block").removeClass("allocation"); 
    $(".support_block").removeClass("white"); 
    $(".secret_block").css("display", "none");
});

$(".phone_contact").click(function()
{
    close.css("display", "none");
    $(".support_block").removeClass("allocation"); 
    $(".support_block").removeClass("white"); 
    $(".secret_block").css("display", "none");
});