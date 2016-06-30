var backgroundArray = ["img/011.jpg", "img/02.jpg", "img/03.jpg", "img/04.jpg", "img/05.jpg", "img/01.jpg", "img/07.jpg"];
var i = 1;
function img() 
{
    if (i > (backgroundArray.length - 1))
    {
        i = 0;
    }
    $("#slider").fadeIn(100);
    $("#slider").css("background-image", "url(" + backgroundArray[i] + ")"); 
    i++;
};

setInterval("img()", 4000);