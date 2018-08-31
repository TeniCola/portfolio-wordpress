<?php
/**
 * The template for displaying the "Services" page
 * 
 * @package WordPress
 * @subpackage TeniCola Portfolio
 * @since TeniCola Portfolio 1.0
 */

get_header(); ?>

	<div id="primary">
		<div class="frame-width main-content services-page" role="main">
			<!-- SERVICES OFFERED -->
			<h3><?php the_title(); ?></h3>
			<div class="service-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			</div>
                    <!-- SERVICES -->
                    <?php query_posts('post_type=services&order=ASC'); ?>
                    <?php while ( have_posts() ) : the_post(); 
                    $size = 'full';
                    $image = get_field('image'); 
                    $meta = wp_get_attachment( $image ); ?>
                        <div class="third-width">
                            <h4><?php the_title(); ?></h4>
                            <div class="service-image">
                                <?php if($image) { 
                                    echo wp_get_attachment_image( $image, $size );
                                } ?>
                            </div>
                            <p><?php the_content(); ?></p>
                        </div>
		            <?php endwhile; ?> 
                    <?php wp_reset_query(); ?>
					<!-- SKILLS & EXPERIENCE -->
					<?php query_posts('post_type=added_text&name=skills-experience'); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="skills-content">
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