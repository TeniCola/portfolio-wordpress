<?php
/**
 * The template for displaying the homepage
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

<section id="home">
    <div class="frame-width banner">
        <?php query_posts('posts_per_page=1&post_type=page_banners'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
                <div class="banner-image">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2018/08/home-banner-short-gradient.png" alt="Home page banner"/>				
                </div>
			<?php endwhile; ?> 
		<?php wp_reset_query(); ?>
    </div>
</section>

<?php get_footer(); ?>
