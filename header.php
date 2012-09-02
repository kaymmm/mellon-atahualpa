<table id="logoarea" cellpadding="0" cellspacing="0" border="0" width="100%"><tbody><tr><td rowspan="2" valign="middle" class="logoarea-logo"><a href="http://gc.cuny.edu/"><img class="logo" src="<?php echo site_url(); ?>/files/2012/09/CUNY-GC-logo.png" alt="Committee on Globalization and Social Change"></a></td><td rowspan="2" valign="middle" class="logoarea-title"><a href="<?php echo site_url(); ?>"><img width="650px" height="auto" src="<?php echo site_url(); ?>/wp-content/blogs.dir/1109/files/2012/08/newPCPlogo.jpg" alt="<?php bloginfo('name'); ?>"></a></td>

<td class="feed-icons" valign="middle" align="right">
<!-- social icons -->
<div class="socialicons" style="bottom: 0px; right: px;">
<a target="_blank" href="http://twitter.com/#!/cgscatgc" class="twitterlink"></a>
<a target="_blank" href="http://www.facebook.com/pages/The-Committee-on-Globalization-and-Social-Change/162041030521642" class="facebooklink"></a>
<a target="_blank" href="http://www.cuny.edu" class="cuny"></a>
</div></td></tr>
<tr><td valign="bottom" class="search-box" align="right"><div class="searchbox">
<form method="get" class="searchform" action="<?php echo site_url(); ?>">
<div class="searchbox-form">
<input type="text" class="text inputblur" onfocus="this.value=''" value="search the site" onblur="this.value='search the site'" name="s"></div>
</form>
</div>
</td></tr></tbody></table>

%pages

<?php if (is_front_page() ) { ?>
<div id="full-width">
<?php bfa_widget_area('name=front_header&cells=2&align=9&align_2=3&width_1=700'); ?>
</div>
<?php } //front page ?>