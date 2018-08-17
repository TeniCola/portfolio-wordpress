<?php
/**
 * The template file for image attachment pages
 *
 * 
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage TeniCola Portfolio
 * @since TeniCola Portfolio 1.0
 */

get_header(); ?>
	<!-- ATTACHMENT PAGE -->
    <div class="frame-width attachment-page" role="main">
    <?php while ( have_posts() ) : the_post();
        $image = get_the_ID();
        $meta = wp_get_attachment( $image );
        $size = 'full'; ?>

        <?php if($image) {
            echo wp_get_attachment_image( get_the_ID(), $size );
        } ?>
        <p class="attachment-caption"><?php if($image) {
            echo $meta['caption'];
        } ?></p>

    <?php endwhile; // end of the loop. ?>
    </div>
    <div class="footer-padding"><!--additional padding for certain pages--></div>
</div><!-- .main-content -->

<?php get_footer();
