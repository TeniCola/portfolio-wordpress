<?php
/**
 * The template for displaying the "Contact" page
 * 
 * @package WordPress
 * @subpackage TeniCola Portfolio
 * @since TeniCola Portfolio 1.0
 */

get_header(); ?>

	<div id="primary">
		<div class="frame-width main-content contact-page" role="main">
			<!-- CONTACT PAGE -->
			<h3><?php the_title(); ?></h3>
			<div class="contact-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			</div>
			<?php endwhile; // end of the loop. ?>
		<div class="footer-padding"></div> <!--additional padding for certain pages>-->
	</div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer();
