<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php if (is_page( 'Home' )): ?>
<section id="hero">
	<div class="width">
		<div class="left">
			<span>Welcome to</span>
			<h2>Vintage Flights</h2>
			<p>
				<?php
					if ( have_posts() ) :
						// Start the Loop.
						while ( have_posts() ) : the_post();
							get_the_title();

						endwhile;
					else :

						get_template_part( 'content', 'none' );

					endif;
				?>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit. <a href="">More <span>></span></a>
			</p>
			<div class="btn-container">
				<a href="" class="btn-small">What's New</a>
				<a href="" class="btn-small">Purchase Gift Certificate</a>
			</div>
		</div>
		<div class="relative">
			<div id="slideshow" class="right">
				<figure>
					<div class="relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/slider-1.jpg" alt="">
						<figcaption>Flight Operations Based at Cherokee County Airport (47A) Canton Georgia</figcaption>
					</div>
				</figure>
				<figure>
					<div class="relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/slider-2.jpg" alt="">
						<figcaption>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</figcaption>
					</div>
				</figure>
			</div>
			<a href="" id="pager-left"></a>
			<a href="" id="pager-right"></a>
		</div>
		
		
		<div class="fix"></div>
	</div>
	
</section>
<section id="thumbs" class="width">
	<a href="" class="left">
		<img src="<?php echo get_template_directory_uri(); ?>/images/sub-pics-1.png">
		<span>Our Planes</span>
	</a>
	<a href="" class="left">
		<img src="<?php echo get_template_directory_uri(); ?>/images/sub-pics-2.png">
		<span>Our Pilots</span>
	</a>
	<a href="" class="right">
		<img src="<?php echo get_template_directory_uri(); ?>/images/sub-pics-3.png">
		<span>Book a Flight Today</span>
	</a>
	<div class="fix"></div>
</section>
<?php else : ?>
	<div class="inner">
		<div class="content">
			<div id="sidebar" class="left">
				<h1 class="pagetitle">404: Page not Found</h1>
			</div>
			<div class="rightcol">
				<p>
					<?php _e( 'It looks like nothing was found at this location.'); ?>
				</p>
			</div>
		</div>
	</div>
	<div class="endcap"></div>
<?php endif ?>
<?php get_footer(); ?>
