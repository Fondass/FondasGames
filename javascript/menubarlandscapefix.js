/* 
 * 
 * 
 * 
 */


var deviceQueryList = window.matchMedia("(min-device-width:540px) and (max-device-width: 780px)");

isMobileScreen = deviceQueryList.matches;

if (isMobileScreen)
{
    $('#wrapper').css('zoom', '3');
}
else
{
    
}