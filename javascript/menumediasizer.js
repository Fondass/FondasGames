/* 
 * 
 * 
 * 
 */



var mediaQueryList = window.matchMedia("(max-width:540px)");


isSmallScreen = mediaQueryList.matches;

if (isSmallScreen)
{
    $('.menubutton').hide();
    $('.mobilemenustart').show();
}
else
{
    
}


mediaQueryList.addListener(mediaSizeChange);

function mediaSizeChange(mediaQueryList)
{
    if(mediaQueryList.matches)
    {
        $('.menubutton').hide();
        $('.mobilemenustart').show();
    }
    else
    {
        $('.menubutton').show();
        $('.mobilemenustart').hide();
    }
}


