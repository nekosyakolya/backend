var menu_selector = ".menu_block_header"; 

function onScroll()
{
    var scroll_top = $(document).scrollTop();
    $(menu_selector + " a").each(function()
    {
        var adjustment = $(this).attr("href");
        var target = $(adjustment);
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
    $("a[href^=#]").click(function(received)
    {
        received.preventDefault();
        $(document).off("scroll");
        $(menu_selector + " a.active").removeClass("active");
        $(this).addClass("active");
        var adjustment = $(this).attr("href");
        var target = $(adjustment);
        $("body").animate(
        {
            scrollTop: target.offset().top
        }, 800, function()
        {
            window.location.adjustment = adjustment;
            $(document).on("scroll", onScroll);
        });
 
    });
 
});

$(".authorized").click(function(){$("#entrance_forma").show("fast");});
