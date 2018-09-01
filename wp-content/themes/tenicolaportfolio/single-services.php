<?php
/**
 * The template for displaying a single custom post for the "Services" page
 * 
 *
 * @package WordPress
 * @subpackage TeniCola Portfolio
 * @since TeniCola Portfolio 1.0
 */

get_header(); ?>

<div class="frame-width" role="main">

    <?php while ( have_posts() ) : the_post(); 
        $size = 'full';
        $image = get_field('image'); 
        $meta = wp_get_attachment( $image ); ?>
            <div class="third-width">
                <!-- <h4><?php // the_title(); ?></h4> *to  remove comment code after custom icons completed* -->
                <div class="service-image">
                    <?php if($image) { 
                        echo wp_get_attachment_image( $image, $size );
                    } ?>
                </div>
                <p><?php the_content(); ?></p>
            </div>
        <?php endwhile; // end of the loop. ?>
        
    <div class="footer-padding"><!--additional padding for certain pages--></div>
</div><!-- .main-content -->

<?php get_footer(); ?>
