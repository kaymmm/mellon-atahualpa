function sticky_relocate() {
	var wpadminbar_offset = $('#wpadminbar').height;
	var window_top = $(window).scrollTop();
	var div_top = $('#sticky-anchor').offset().top;
	if ((window_top+wpadminbar_offset) > div_top) {
		$('#logoarea').addClass('stickyscroll');
/*		$('#header').css('top',wpadminbar_offset);
		$('#header').css('position','fixed');*/
	} else {
		$('#logoarea').removeClass('stickyscroll');
/*		$('#header').css('top','');
		$('#header').css('position','static'); */
	}
}
$(function() {
	$(window).scroll(sticky_relocate);
	sticky_relocate();
});