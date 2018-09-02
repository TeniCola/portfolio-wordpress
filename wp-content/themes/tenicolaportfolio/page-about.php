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
		<div class="frame-width main-content about-page" role="main">
			<!-- ABOUT THE ARTIST -->
			<h3><?php the_title(); ?></h3>
			<div class="about-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<img src="<?php echo home_url(); ?>/wp-content/uploads/2018/08/profile-photo-cropped.png" alt="Profile image" id="about"/>
				<?php the_content(); ?>
			</div>
			<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>