var backgroundArray = ["img/11.jpg", "img/2.jpg", "img/3.jpg", "img/4.jpg", "img/5.jpg", "img/1.jpg", "img/7.jpg"];
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