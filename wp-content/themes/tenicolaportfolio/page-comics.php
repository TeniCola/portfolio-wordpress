<?php
/**
 * The template for displaying the "Comics" page
 * // NEAR IDENTICAL TO OTHER PAGES save for Comics post type, and aside from "About" page //
 * // TEMPORARY SOLUTION //
 *
 * @package WordPress
 * @subpackage TeniCola Portfolio
 * @since TeniCola Portfolio 1.0
 */

get_header(); ?>

	<div id="primary">
		<div class="frame-width main-content" role="main">
			<h3><?php the_title(); ?></h3>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>

			<div>
				<?php query_posts('post_type=comics&order=ASC'); ?>
				<?php while ( have_posts() ) : the_post();
				$size = 'medium';
				$full = 'full';
				// IMAGES
				$image_01 = get_field('image_01');
				$image_02 = get_field('image_02');
				$image_03 = get_field('image_03');
				$image_04 = get_field('image_04');
				$image_05 = get_field('image_05');
				$image_06 = get_field('image_06');
				$image_07 = get_field('image_07');
				$image_08 = get_field('image_08');
				$image_09 = get_field('image_09');
				$image_10 = get_field('image_10'); 
				// META DATA (CAPTIONS, ETC)
				$meta_01 = wp_get_attachment( $image_01 );
				$meta_02 = wp_get_attachment( $image_02 );
				$meta_03 = wp_get_attachment( $image_03 );
				$meta_04 = wp_get_attachment( $image_04 );
				$meta_05 = wp_get_attachment( $image_05 );
				$meta_06 = wp_get_attachment( $image_06 );
				$meta_07 = wp_get_attachment( $image_07 );
				$meta_08 = wp_get_attachment( $image_08 );
				$meta_09 = wp_get_attachment( $image_09 );
				$meta_10 = wp_get_attachment( $image_10 ); ?>
						
					<div class="gallery">
                    <hr/>
                    <h4><?php the_title(); ?></h4>
                        <!-- IMAGE 01 -->
                        <a href="#<?php echo $image_01 ?>" class="thumbnail">
                            <?php if($image_01) { 
                                echo wp_get_attachment_image( $image_01, $size );
                            } ?></a>
                        <a href="#_" class="lightbox" id="<?php echo $image_01 ?>">
                            <?php if($image_01) { 
                                echo wp_get_attachment_image( $image_01, $full);  
                            } ?><h6><?php echo $meta_01['caption']?></h6></a>
                        <!-- IMAGE 02 -->
                        <a href="#<?php echo $image_02 ?>" class="thumbnail">
                            <?php if($image_02) { 
                                echo wp_get_attachment_image( $image_02, $size );
                            } ?></a>
                        <a href="#_" class="lightbox" id="<?php echo $image_02 ?>">
                            <?php if($image_02) { 
                                echo wp_get_attachment_image( $image_02, $full);
                            } ?><h6><?php echo $meta_02['caption']?></h6></a>
                        <!-- IMAGE 03 -->
                        <a href="#<?php echo $image_03 ?>" class="thumbnail">
                            <?php if($image_03) { 
                                echo wp_get_attachment_image( $image_03, $size );
                            } ?></a>
                        <a href="#_" class="lightbox" id="<?php echo $image_03 ?>">
                            <?php if($image_03) { 
                                echo wp_get_attachment_image( $image_03, $full);  
                            } ?><h6><?php echo $meta_03['caption']?></h6></a>
                        <!-- IMAGE 04 -->
                        <a href="#<?php echo $image_04 ?>" class="thumbnail">
                            <?php if($image_04) { 
                                echo wp_get_attachment_image( $image_04, $size );
                            } ?></a>
                        <a href="#_" class="lightbox" id="<?php echo $image_04 ?>">
                            <?php if($image_04) { 
                                echo wp_get_attachment_image( $image_04, $full);  
                            } ?><h6><?php echo $meta_04['caption']?></h6></a>
                        <!-- IMAGE 05 -->
                        <a href="#<?php echo $image_05 ?>" class="thumbnail">
                            <?php if($image_05) { 
                                echo wp_get_attachment_image( $image_05, $size );
                            } ?></a>
                        <a href="#_" class="lightbox" id="<?php echo $image_05 ?>">
                            <?php if($image_05) { 
                                echo wp_get_attachment_image( $image_05, $full);  
                            } ?><h6><?php echo $meta_05['caption']?></h6></a>
                        <!-- IMAGE 06 -->
                        <a href="#<?php echo $image_06 ?>" class="thumbnail">
                            <?php if($image_06) { 
                                echo wp_get_attachment_image( $image_06, $size );
                            } ?></a>
                        <a href="#_" class="lightbox" id="<?php echo $image_06 ?>">
                            <?php if($image_06) { 
                                echo wp_get_attachment_image( $image_06, $full);  
                            } ?><h6><?php echo $meta_06['caption']?></h6></a>
                        <!-- IMAGE 07 -->
                        <a href="#<?php echo $image_07 ?>" class="thumbnail">
                            <?php if($image_07) { 
                                echo wp_get_attachment_image( $image_07, $size );
                            } ?></a>
                        <a href="#_" class="lightbox" id="<?php echo $image_07 ?>">
                            <?php if($image_07) { 
                                echo wp_get_attachment_image( $image_07, $full);  
                            } ?><h6><?php echo $meta_07['caption']?></h6></a>
                        <!-- IMAGE 08 -->
                        <a href="#<?php echo $image_08 ?>" class="thumbnail">
                            <?php if($image_08) { 
                                echo wp_get_attachment_image( $image_08, $size );
                            } ?></a>
                        <a href="#_" class="lightbox" id="<?php echo $image_08 ?>">
                            <?php if($image_08) { 
                                echo wp_get_attachment_image( $image_08, $full);  
                            } ?><h6><?php echo $meta_08['caption']?></h6></a>
                        <!-- IMAGE 09 -->
                        <a href="#<?php echo $image_09 ?>" class="thumbnail">
                            <?php if($image_09) { 
                                echo wp_get_attachment_image( $image_09, $size );
                            } ?></a>
                        <a href="#_" class="lightbox" id="<?php echo $image_09 ?>">
                            <?php if($image_09) { 
                                echo wp_get_attachment_image( $image_09, $full);  
                            } ?><h6><?php echo $meta_09['caption']?></h6></a>
                        <!-- IMAGE 10 -->
                        <a href="#<?php echo $image_10 ?>" class="thumbnail">
                            <?php if($image_10) { 
                                echo wp_get_attachment_image( $image_10, $size );
                            } ?></a>
                        <a href="#_" class="lightbox" id="<?php echo $image_10 ?>">
                            <?php if($image_10) { 
                                echo wp_get_attachment_image( $image_10, $full);  
                            } ?><h6><?php echo $meta_10['caption']?></h6></a>
                    </div>			
			    <?php endwhile; ?> 
			    <?php wp_reset_query(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
		<div class="footer-padding"><!--additional padding for certain pages--></div>
	</div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>