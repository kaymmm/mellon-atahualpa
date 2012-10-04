$(document).ready(function(){ 
	$("ul#rmenu2").superfish({ 
		pathClass:  'current-menu-ancestor',
		delay:       800,                            // one second delay on mouseout 
		animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation
		speed:       'fast'                          // faster animation speed
    }); 
}); 