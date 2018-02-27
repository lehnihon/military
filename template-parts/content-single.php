<?php
/**
 * Template part for displaying single posts.
 *
 * @package site
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() && !is_search() ) { ?>
			<?php the_post_thumbnail('detalhes', array(
				'class' => "img-responsive",
			)); ?>
		<?php } ?>
		
		<?php the_title( '<h1 class="small">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

