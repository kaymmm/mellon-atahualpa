<div id="logoarea">
<div id="logoarea-title">
<a href="<?php echo site_url(); ?>"><span id="keith">KEITH</span><span id="kay">K</span><span id="miyake">MIYAKE</span></a>
</div>
<div id="sticky-anchor">
<div id="sticky-menu">%pages
<div class="searchbox"><form method="get" class="searchform" action="<?php echo site_url(); ?>">
	<input type="text" class="text inputblur" onfocus="this.value=''" value="search the site" onblur="this.value='search the site'" name="s"></div>
</form></div></div></div>
<?php /* end header main */ 
function has_parent($post, $post_id) {
	if ($post->ID == $post_id) return true;
	else if ($post->post_parent == 0) return false;
	else return has_parent(get_post($post->post_parent),$post_id);
}
if (has_parent($post,2899)) {
	bfa_widget_area('name=GEH101_Nav&cells=1&align=1&before_widget=<div id="%1$s" class="subnav %2$s">&after_widget=</div>');
}
?>