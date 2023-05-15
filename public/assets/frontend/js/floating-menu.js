$(document).click(function(e) 
{
    var container = $('#floating-menu-open');

    // if the target of the click isn't the container nor a descendant of the container
    if ((!container.is(e.target) && container.has(e.target).length === 0 && !($('.close-mark').is(e.target)) ) && !($('.floating-menu-open-button').is(e.target)) &&
    ($('#floating-menu-open').is(":checked")
    ) ) 
    {

        container.hide();
        $( "#floating-menu-open" ).prop( "checked", false );
    }
});
if(window.matchMedia("(pointer: coarse)").matches) {
    
}