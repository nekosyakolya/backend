var hide = "hint";
var show = "open_block";
var cancel = $('#no');
var deleteButton = $('#delete');
var background = $('#podlogka');

$(document).ready(function()
{
    cancel.click(function()
    {
        background.addClass(hide); 
        background.removeClass(show);
    });
    deleteButton.click(function()
    {
        background.addClass(show); 
        background.removeClass(hide);
    });
});