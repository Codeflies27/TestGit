<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="home-page-content">

	<section class="hero-banner-sec">
		<div class="video-sec">
		    <video class="video-sec__content" poster="<?php echo get_template_directory_uri(); ?>/img/video-img1.jpg" muted playsinline autoplay loop>
		    <source src="<?php echo get_template_directory_uri(); ?>/video/final-banner.mp4" type="video/mp4">  
		    </video>
		</div>
		<div class="hero-contentbox">
			<div class="container">
				<div class="hero-textbox wow fadeInLeft">
					<h1>Making your Dairy Farm Business: A Reality</h1>
					<p>We design, deliver and manage small to big Automated Dairy Farm </p>
				</div>
			</div>
		</div>
		<div class="hero-img-box-sec">
			<div class="container-box">
				<div class="hero-img-box-secin">
					<div class="hero-img-box tiptext">
						<img src="<?php echo get_template_directory_uri(); ?>/img/product-img-1-1.jpg">
						<div class="hero-img-box1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/product-img-1-1.jpg">
					</div>
					</div>
					<div class="hero-img-box tiptext1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/product-img-2-2.jpg">
						<div class="hero-img-box2">
						<img src="<?php echo get_template_directory_uri(); ?>/img/product-img-2-2.jpg">
					</div>
					</div>
					<div class="hero-img-box tiptext2">
						<img src="<?php echo get_template_directory_uri(); ?>/img/product-img-3-3.jpg">
						<div class="hero-img-box3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/product-img-3-3.jpg">
					</div>
					</div>

					<div class="hero-img-box tiptext3">
						<img src="<?php echo get_template_directory_uri(); ?>/img/product-img-4-4.jpg">
						<div class="hero-img-box4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/product-img-4-4.jpg">
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>	


	<section class="brand-sec inner-special-textbox">
		<div class="container">
			<p class="splitting-text blink_me">Our World class Milking Parlors and Advanced Dairy Farm solutions have got us more than thousands of highly satisfied customers worldwide.</p>
		</div>
	</section>


		<section class="image-text-sec">
		<div class="left-imagebox wow fadeInLeft" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/img1.png);">
			<a href="javascript:;"><img class="blink_me" src="<?php echo get_template_directory_uri(); ?>/img/brand-img-2.png"></a>
		</div>
		<div class="image-text-content">
			<div class="container">
				<div class="text-box wow fadeInRight">
					<h3>Vansun - India's No.1 Brand</h3>
					<p>Vansun is the First Indian company to bring and promote the concept of Machine Milking in India both for small and large Dairy Farms. At Vansun we have the top industry experienced people as part of Vansun team.Our advance Dairy Farm Solutions and thousands of Milking Installations stand proof of our service and turnkey capabilities.<br>We have a top team of designers, fabricators, structural engineers & architects to plan small and large dairy farms on turnkey basis.</p>
					<div class="read-morebtn">
						<a href="https://www.vansunmilking.com/know-us/">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="turnkey-sec-1">
		<div class="container">
			<div class="row">
				<div class="col-md-6 left-imagebox1 wow fadeInLeft">
					<img src="<?php echo get_template_directory_uri(); ?>/img/home-aec11.png">
				</div>
				<div class="col-md-6 right-textbox1 wow fadeInRight">
					<div class="text-box wow fadeInRight">
						<h2>Turnkey Dairy Solutions</h2>
						<p>Vansun is a Turnkey Dairy Farm Solutions provider/manufacturer and has brought advanced dairy farm machines and computerized systems for the modern dairy farm. For more than a decade, Vansun has continued to provide cutting-edge solutions for Dairy Farmers.</p>
						<div class="read-morebtn">
							<a href="https://www.vansunmilking.com/turnkey-dairy-projects/">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>		

	<!-- <section class="image-text-sec">
		<div class="left-imagebox wow fadeInLeft" style="background-image: url(<?php //echo get_template_directory_uri(); ?>/img/img1.png);">
			
		</div>
		<div class="image-text-content">
			<div class="container">
				<div class="text-box wow fadeInRight">
					<h2>Turnkey Dairy Solutions</h2>
					<p>Vansun is a Turnkey Dairy Farm Solutions provider/manufacturer and has brought advanced dairy farm machines and computerized systems for the modern dairy farm.For more than a decade, Vansun has continued to provide cutting-edge solutions for Dairy Farmers.</p>
					<div class="read-morebtn">
						<a href="#">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<!-- <div class="texture-img-box">
		<img src="http://pngimg.com/uploads/milk/milk_PNG12722.png">
	</div> -->

	<section class="dairy-farm-sec">
		<div class="container">
			<div class="text-box wow fadeIn">
				<h3>Dairy Farm Specialists</h3>
				<p>To provide dairy farm producers with outstanding, innovative and state of the art technological solutions and comprehensive dairy solutions knowledge, paving the way for the most profitable production of high-quality milk.</p>
			</div>
			<div class="right-top-prbox wow fadeInRight">
				<a href="javascript:;"><img src="<?php echo get_template_directory_uri(); ?>/img/solution-imh231.jpg"></a>
			</div>
			<div class="bottom-imgbox wow zoomIn">
				<a href="javascript:;"><img src="<?php echo get_template_directory_uri(); ?>/img/solution-imh232.JPG"></a>
			</div>
		</div>
	</section>


	<section class="home-column-slider wow fadeInUp">
		<div class="container">
			<div class="homeslider1">
				<div class="slide-1">
					<div class="row">
						<div class="col-sm-6 left-column">
							<img src="<?php echo get_template_directory_uri(); ?>/img/vansun-building.png">
						</div>
						<div class="col-sm-6 right-column">
							<div class="text-box">
								<h3>An Infrastructure For Growth</h3>
								<ul class="simple-highlited-listbox home-list">
									<li>Modern Manufacturing Facilities</li>
									<li>Top Team of Engineers and Experts</li>
									<li>Dairy Farm Specialists</li>
									<li>Turnkey Capabilities</li>
									<li>Top Collaborations</li>
									<li>More than a Decade of Experience</li>
									<li>A Huge list of Satisfied Clients</li>
									<li>Thousands of Milking Installations</li>
								</ul>
								<div class="read-morebtn">
									<a href="https://www.vansunmilking.com/know-us/">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section>


	<section class="getin-touch-sec" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/getintouch-banner1.png);">
		<div class="container">
			<div class="get-intouch-form wow fadeInZoom">
				<?php echo do_shortcode('[contact-form-7 id="34" title="Contact form 1"]'); ?>
			</div>
		</div>
	</section>


	<section class="brand-sec">
		<div class="container">
			<!--<p class="wow fadeIn">Our World class Milking Parlors and Advanced Dairy Farm solutions have got us more than thousands of highly satisfied customers worldwide.</p>-->
			<div class="row">
				<div class="col-md-12 left-column1">
					<p class="wow fadeIn">Vansun has Manufacturing facility based in Noida. We are proudly associated with international Brands like :</p>
				</div>
				<div class="col-md-12 right-column1">
					<ul>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/brand-img1a.png" class="wow zoomIn img-responsive"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/brand-img2.png" class="wow zoomIn img-responsive"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/brand-img3.png" class="wow zoomIn img-responsive"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/brand-img4.png" class="wow zoomIn img-responsive"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/brand-img5.png" class="wow zoomIn img-responsive"></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

<section class="brand-sec our-customers-sec">
		<div class="container">
			<!--<p class="wow fadeIn">Our World class Milking Parlors and Advanced Dairy Farm solutions have got us more than thousands of highly satisfied customers worldwide.</p>-->
			<div class="row">
				<div class="col-md-12 left-column1">
					<h3 class="wow fadeIn">Our Customers</h3>
				</div>
				<div class="col-md-12 right-column1">
					<ul>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/customer-icon1.png" class="wow zoomIn img-responsive"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/customer-icon2.png" class="wow zoomIn img-responsive"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/customer-icon3.png" class="wow zoomIn img-responsive"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/customer-icon4.png" class="wow zoomIn img-responsive"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/customer-icon5.png" class="wow zoomIn img-responsive"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/customer-icon6.jpg" class="wow zoomIn img-responsive"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/customer-icon7.png" class="wow zoomIn img-responsive"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/customer-icon8.png" class="wow zoomIn img-responsive"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/customer-icon9.png" class="wow zoomIn img-responsive"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/customer-icon10.png" class="wow zoomIn img-responsive"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/customer-icon11.png" class="wow zoomIn img-responsive"></li>
					</ul>
				</div>
			</div>
		</div>
	</section>


	<?php while ( have_posts() ) : the_post(); ?>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry-page-image">
				<?php the_post_thumbnail(); ?>
			</div><!-- .entry-page-image -->
		<?php endif; ?>

	<?php endwhile; // end of the loop. ?>

</div>

<?php get_footer(); ?>
