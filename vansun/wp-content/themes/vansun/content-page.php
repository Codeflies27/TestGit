<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	<div class="inner-page-banner">
		<img src="<?php echo get_template_directory_uri(); ?>/img/home-banner-new.jpg">
		<div class="inner-banner-text">
			<div class="container">
				<div class="inner-banner-title wow fadeInRight"><h3>Talk to Experts with 20 Years of Experience<!--<br> in Dairy Farming Machinery <br>(VANSUN Since 1999)--></h3>
			</div>
		</div>
		</div>
	</div>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- <header class="entry-header">
			<?php //if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
				<?php //the_post_thumbnail('full'); ?>
			<?php //endif; ?>
			<h1 class="entry-title"><?php //the_title(); ?></h1>
		</header> -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
