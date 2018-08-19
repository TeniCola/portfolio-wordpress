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
				<img src="http://localhost/tenicola-portfolio/wp-content/uploads/2018/08/3208-300x300.png" alt="Profile image" id="about"/>
				<?php the_content(); ?>
			</div>
				<div>
					<!-- SKILLS & EXPERIENCE -->
					<?php query_posts('post_type=added_text&name=skills-experience'); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div>
							<hr/>
							<h4><?php the_title(); ?></h4>
							<p><?php the_content(); ?></p>
						</div>			
					<?php endwhile; ?> 
					<?php wp_reset_query(); ?>
					<!-- CONTACT -->
					<?php query_posts('post_type=added_text&name=contact'); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div>
							<hr/>
							<h4><?php the_title(); ?></h4>
							<p><?php the_content(); ?></p>
						</div>			
					<?php endwhile; ?> 
					<?php wp_reset_query(); ?>
				</div>
			<?php endwhile; // end of the loop. ?>
		<div class="footer-padding"><!--additional padding for certain pages--></div>
	</div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>