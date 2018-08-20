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
 * @subpackage TeniCola Portfolio
 * @since TeniCola Portfolio 1.0
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

<!-- OLD FUNCTION FOR CREATING PAGE BANNERS

// PAGE BANNERS //
	register_post_type( 'page_banners',
        array(
            'labels' => array(
                'name' => __( 'Page Banners' ),
                'singular_name' => __( 'Page Banner' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'page-banners' ),
        )
	);

-->