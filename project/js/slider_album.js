var hwSlideSpeed = 700;
var hwTimeOut = 6000;
var hwNeedLinks = true;
 
$(document).ready(function() 
{
    $('.slide').css({"position" : "absolute","top": '0', "left": '0'}).hide().eq(0).show();
    var slideNum = 0;
    var slideTime;
    slideCount = $("#sliderNew .slide").size();
    var animSlide = function(arrow)
    {
        clearTimeout(slideTime);
        $('.slide').eq(slideNum).fadeOut(hwSlideSpeed);
        if(arrow == "next")
        {
            if(slideNum == (slideCount - 1))
            {
                slideNum = 0;
            }
            else
            {
                slideNum++
            }
        }
        else if(arrow == "prew")
        {
            if(slideNum == 0)
            {
                 slideNum = slideCount - 1;
            }
            else
            {
                 slideNum -= 1
            }
        }
        else
        {
            slideNum = arrow;
        }
        $('.slide').eq(slideNum).fadeIn(hwSlideSpeed, rotator);
        $(".control-slide.active").removeClass("active");
        $('.control-slide').eq(slideNum).addClass('active');
     }
     if(hwNeedLinks)
     {
         var $linkArrow = $('#prewbutton', '#nextbutton').prependTo('#slider');      
         $('#nextbutton').click(function(){animSlide("next")});
         $('#prewbutton').click(function(){animSlide("prew")})
     }
     var pause = false;
     var rotator = function()
     {
          if(!pause)
          {
              slideTime = setTimeout(function(){animSlide('next')}, hwTimeOut)
          }
     }
     $('#slider-wrap').hover(    
        function(){clearTimeout(slideTime); pause = true},
        function(){pause = false; rotator()});
     rotator();
})
