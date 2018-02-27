<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<section id="detalhes">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow fadeInUp">
					<?php
					global $post;
					$cat = get_the_category( $post->ID );
					?>
					<h2 class="alexa"><?php echo $cat[0]->name; ?></h2>
				</div>
			</div><br><br>
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-md-5">
					<?php the_post_thumbnail('', array(
						'class' => "e-cinza img-fluid",
					)); ?>
				</div>
				<div class="col-md-7 text-left">
					<h3><?php the_title(); ?></h3>
					<hr>
					<?php the_content(); ?>
				</div>
				<?php endwhile; // End of the loop. ?>
			</div>
		</div>
	</section>
	<?php get_template_part( 'template-parts/contato' ); ?>
</div><!-- #content -->
<?php get_footer(); ?>
