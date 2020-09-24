<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<footer class="footer-sec" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/footer-N.png);">
	<div class="footer-menubox">
		<div class="container">
			<div class="row wow fadeIn">
				<div class="col-md-3 col-sm-6 footer-menubox1">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div>
				<div class="col-md-3 col-sm-6 footer-menubox1">
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
				</div>
				<div class="col-md-3 col-sm-6 footer-menubox1">
					<?php dynamic_sidebar( 'sidebar-4' ); ?>
				</div>
				<div class="col-md-3 col-sm-6 footer-menubox1">
					<?php dynamic_sidebar( 'sidebar-5' ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-copyrightbox">
		<div class="container">
			<div class="row">
				<div class="col-md-6 copyright">
					<?php dynamic_sidebar( 'sidebar-6' ); ?>
				</div>
				<div class="col-md-6 footer-sociallinks">
					<?php dynamic_sidebar( 'sidebar-7' ); ?>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- <div class="footermilkbox"></div> -->

<div class="back-to-top">
	<a href="#"><i class="fa fa-angle-up"></i></a>
</div>


<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-modal-video.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/splitting.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/local.js"></script>


<script type="text/javascript">
	$(function blink() { 
  $('.blink_me').fadeOut(1000).fadeIn(1000, blink); 
});

</script>
<script type="text/javascript">
	$(".tiptext").mouseover(function() {
    $(this).children(".hero-img-box1").show();
}).mouseout(function() {
    $(this).children(".hero-img-box1").hide();
});
$(".tiptext1").mouseover(function() {
    $(this).children(".hero-img-box2").show();
}).mouseout(function() {
    $(this).children(".hero-img-box2").hide();
});
$(".tiptext2").mouseover(function() {
    $(this).children(".hero-img-box3").show();
}).mouseout(function() {
    $(this).children(".hero-img-box3").hide();
});
$(".tiptext3").mouseover(function() {
    $(this).children(".hero-img-box4").show();
}).mouseout(function() {
    $(this).children(".hero-img-box4").hide();
});
</script>


<?php wp_footer(); ?>
</body>
</html>
