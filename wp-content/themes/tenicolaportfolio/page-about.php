<?php
/**
 * The template for displaying the "About" page
 * 
 * @package WordPress
 * @subpackage TeniCola Portfolio
 * @since TeniCola Portfolio 1.0
 */

get_header(); ?>

	<div id="primary">
		<div class="frame-width main-content" role="main">
			<h3><?php the_title(); ?></h3>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
		<div class="footer-padding"><!--additional padding for certain pages--></div>
	</div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>