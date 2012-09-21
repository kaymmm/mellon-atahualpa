<?php /* header pre */ 
$logo_url = site_url()."/wp-content/blogs.dir/1011/files/2012/03/globalization_logo.png";
$logo_small = site_url()."/files/2012/07/globalization_logo_small.png";
$gc_logo_url = site_url() . "/wp-content/blogs.dir/1011/files/2012/06/CUNY-GC-logo.png";
$refractions_logo_url = site_url(). "/files/2012/07/refractions_logo_demo-e1343257296976.png";
$social_twitter = "cgscatgc";
$social_facebook = "http://www.facebook.com/pages/The-Committee-on-Globalization-and-Social-Change/162041030521642";

if (is_page( 'refractions' ) || '1824' == $post->post_parent) { ?>
	<table id="logoarea" cellpadding="0" cellspacing="0" border="0" width="100%"><tbody><tr>
	<td rowspan="2" valign="middle" class="logoarea-logo"><a href="http://gc.cuny.edu/"><img class="logo" src="<?php echo $gc_logo_url; ?>" alt="The City University of New York Graduate Center"></a></td>
	<td rowspan="2" valign="middle" class="logoarea-title"><h1 class="blogtitle"><a href="<?php echo site_url(); ?>/refractions/"><img src="<?php echo $refractions_logo_url; ?>" /></a><h4>An online journal of theory and critique</h4></td>
	<td colspan="2" valign="middle" align="right" class="logoarea-logo"><a href="<?php echo site_url(); ?>/"><img src="<?php echo $logo_small; ?>" /></a></td>
	</tr>
	<tr>
	<td class="feed-icons" valign="bottom" align="right">
	<!-- social icons -->
	<div class="socialicons" style="margin: 7px; padding-bottom: 22px;">
		<a target="_blank" href="http://twitter.com/#!/<?php echo $social_twitter; ?>" class="twitterlink"></a>
		<a target="_blank" href="<?php echo $social_facebook; ?>" class="facebooklink"></a> 
		<a target="_blank" href="http://www.cuny.edu" class="cuny"></a> 
	</div></td>
	<td valign="bottom" class="search-box" align="right"><div class="searchbox">
	<form method="get" class="searchform" action="<?php echo site_url(); ?>/">
	<div class="searchbox-form">
	<input type="text" class="text inputblur" onfocus="this.value=''" value="search the site" onblur="this.value='search the site'" name="s"></div>
	</form>
	</div>
	</td></tr></tbody></table>

%cats

<?php } else { // </publications category pages>
/* end header pre */ ?>