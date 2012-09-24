function sticky_relocate() {
	var wpadminbar_offset = $('#wpadminbar').height;
	var window_top = $(window).scrollTop();
	var div_top = $('#sticky-anchor').offset().top;
	if (window_top > div_top) {
		$('#logoarea').addClass('sticky');
/*		$('#header').css('top',wpadminbar_offset);
		$('#header').css('position','fixed');*/
	} else {
		$('#logoarea').removeClass('sticky');
/*		$('#header').css('top','');
		$('#header').css('position','static'); */
	}
}
$(function() {
	$(window).scroll(sticky_relocate);
	sticky_relocate();
});