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

var swicthFirst = true;
var swicthSecond = false;
var swicthThird = false;
var swicthFourth = false;
$('#first_element').click(function(){
    $('#violetBandFirst').css("visibility", "visible");  
    swicthFirst = true;
    if (swicthSecond)
    {
      $('#violetBandSecond').css("visibility", "hidden"); 
      swicthSecond = false;
    }
    else if (swicthThird)
    {
        $('#violetBandThird').css("visibility", "hidden"); 
        swicthThird = false;
    }
    else if (swicthFourth)
    {
        $('#violetBandFourth').css("visibility", "hidden"); 
        swicthFourth = false;
    }
});

$('#second_element').click(function(){
    $('#violetBandSecond').css("visibility", "visible");  
    swicthSecond = true;
    if (swicthThird)
    {
      $('#violetBandThird').css("visibility", "hidden");  
      swicthThird = false;
    }
    else if (swicthFirst)
    {
        $('#violetBandFirst').css("visibility", "hidden"); 
        swicthFirst = false;
    }
    else if (swicthFourth)
    {
        $('#violetBandFourth').css("visibility", "hidden"); 
        swicthFourth = false;
    }
});

$('#third_element').click(function(){
    $('#violetBandThird').css("visibility", "visible");  
    swicthThird = true;
    if (swicthSecond)
    {
      $('#violetBandSecond').css("visibility", "hidden");  
      swicthSecond = false;
    }
    else if (swicthFirst)
    {
        $('#violetBandFirst').css("visibility", "hidden"); 
        swicthFirst = false;
    }
    else if (swicthFourth)
    {
        $('#violetBandFourth').css("visibility", "hidden"); 
        swicthFourth = false;
    }
});

$('#fourth_element').click(function(){
    $('#violetBandFourth').css("visibility", "visible");  
    swicthFourth = true;
    if (swicthSecond)
    {
      $('#violetBandSecond').css("visibility", "hidden");  
      swicthSecond = false;
    }
    else if (swicthFirst)
    {
        $('#violetBandFirst').css("visibility", "hidden"); 
        swicthFirst = false;
    }
    else if (swicthThird)
    {
        $('#violetBandThird').css("visibility", "hidden"); 
        swicthThird = false;
    }
});