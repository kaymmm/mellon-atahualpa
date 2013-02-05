<?php if (is_front_page() ) { ?>
<div class="welcome">Keith Miyake is a geography doctoral student in the <a href="http://web.gc.cuny.edu/ees/home.html" target="_blank">Earth and Environmental Sciences Department</a> at the <a href="http://www.gc.cuny.edu" target="_blank">City University of New York (CUNY) Graduate Center</a>, and a Graduate Teaching Fellow in the <a href="http://www.lehman.edu/deannss/eggs/" target="_blank">Environmental, Geographic, and Geological Sciences Department (EGGS)</a> at&nbsp;<a href="http://www.lehman.edu" target="_blank">Lehman College</a> in the Bronx.</div>

<h2 class="welcome">Recent Posts</h2>

<?php 
$args = array('post_type' => 'post','category'=>'blog');
query_posts($args);
}
if ( is_front_page() || is_archive() ) { ?>
	<div id="tumblelog" class="clearfix fluid masonry" >
<?php } else {
bfa_next_previous_page_links('Top'); 
} ?>