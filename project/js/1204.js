var backgroundArray = ["img/11.jpg", "img/2.jpg", "img/3.jpg", "img/4.jpg", "img/5.jpg", "img/1.jpg", "img/7.jpg"]; 
var i = 1;

var interval = self.setInterval("img()", 7000) 

function img() 
{
    if (i > (backgroundArray.length - 1) ) 
    {
        i = 0;
    }
    $("#slider").fadeIn(100);
    $("#slider").css("background-image", "url(" + backgroundArray[i] + ")"); 
    i++;
};

var menu_selector = ".menu_block_header"; 
 
function onScroll()
{
    var scroll_top = $(document).scrollTop();
    $(menu_selector + " a").each(function()
    {
        var hash = $(this).attr("href");
        var target = $(hash);
        if (target.position().top <= scroll_top && target.position().top + target.outerHeight() > scroll_top)
        {
            $(menu_selector + " a.active").removeClass("active");
            $(this).addClass("active");
        } 
        else
        {
            $(this).removeClass("active");
        }
    });
}
$(document).ready(function ()
{
    $(document).on("scroll", onScroll);
    $("a[href^=#]").click(function(e)
    {
        e.preventDefault();
        $(document).off("scroll");
        $(menu_selector + " a.active").removeClass("active");
        $(this).addClass("active");
        var hash = $(this).attr("href");
        var target = $(hash);
        $("html, body").animate({
            scrollTop: target.offset().top
        }, 700, function()
        {
            window.location.hash = hash;
            $(document).on("scroll", onScroll);
        });
 
    });
 
});
 