<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="error-page-banner-sec">
	<img src="<?php echo get_template_directory_uri(); ?>/img/default.png">
</div>

<div class="error-page-content">
	<div class="container">
		<div class="error-content">
			<img src="<?php echo get_template_directory_uri(); ?>/img/404.png">
			<h1>OOOPS, SORRY! WE COULDN'T FIND IT</h1>
			<p>You have requested a page or file which doesn't exist</p>
			<div class="btnbox-error">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Go to Home</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
