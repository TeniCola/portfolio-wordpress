<?php
/**
 * The template for displaying a single page banner
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div class="frame-width banner" role="main">
	<?php while ( have_posts() ) : the_post();
		$size = "full";
		$banner_image = get_field('banner_image');  ?>

		<div class="banner-image">
			<?php if($banner_image) { 
				echo wp_get_attachment_image( $banner_image, $size );
			} ?>					
		</div>

	<?php endwhile; // end of the loop. ?>
</div><!-- .main-content -->

<?php get_footer(); ?>