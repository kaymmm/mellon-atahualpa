jQuery(document).ready(function(){
	$('#left .head').click(function() {
		$(this).next().toggle('fast');
		return false;
	}).next().hide();
});