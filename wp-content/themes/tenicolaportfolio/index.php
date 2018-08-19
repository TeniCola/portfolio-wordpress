<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage TeniCola Portfolio
 * @since TeniCola Portfolio 1.0
 */

get_header(); ?>
	<!-- BLOG PAGE -->
	<section class="index-page">
		<div class="site-content">
			<div class="main-content">
				<?php query_posts('post_type=added_text&name=page-not-found'); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="frame-width">
							<h4><?php the_title(); ?></h4>
							<p><?php the_content(); ?></p>
						</div>			
					<?php endwhile; ?> 
				<?php wp_reset_query(); ?>
				<div class="footer-padding"><!--additional padding for certain pages--></div>
			</div>
		</div>
	</section>

<?php get_footer();
