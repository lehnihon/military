<?php
get_header('home'); ?>
<style type="text/css">
	.bcg{
		height: 100vh;
		width: 100%;
		background-image: url("wp-content/themes/military/images/military-background1.jpg");
	    -webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center top;
	    background-attachment: fixed;
	}
	.bcgb{
		height: 100vh;
		width: 100%;
		background-image: url("wp-content/themes/military/images/military-background2.jpg");
	    -webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center top;
	    background-attachment: fixed;
	}
</style>
<div id="parallax1" class="bcg">

</div>
<div class="spacer s1">
<div class="box2 blue">
<p>Content 1</p>
<a href="#" class="viewsource">view source</a>
</div>
</div>
<div class="spacer s0"></div>
<div class="bcgb">
 afsfasf
</div>
<div class="spacer s1" id="sobre">
<div class="box2 blue">
<p>Content 2</p>
<a href="#" class="viewsource">view source</a>
</div>
</div>
<div class="spacer s0"></div>
<div id="parallax3" class="parallaxParent">
<div style="background-image: url(<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/military-background3.jpg"; ?>);"></div>
</div>

<?php get_footer(); ?>
