/* 
 * 
 * 
 * 
 */



var mediaQueryList = window.matchMedia("(max-width:540px)");

isMobileScreen = mediaQueryList.matches;


if (isMobileScreen)
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


