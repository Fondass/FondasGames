/* 
 * 
 * 
 * 
 */

var deviceQueryList = window.matchMedia("(max-device-width:540px)");

isMobileScreen = deviceQueryList.matches;

if (isMobileScreen)
{
    $('#menubar').css('zoom', '1.20');
}
else
{
    
}
