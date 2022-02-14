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
			<h2>Bes of Times Travel</h2>
			<p>
				<?php
					if ( have_posts() ) :
						// Start the Loop.
						while ( have_posts() ) : the_post();
							get_template_part( 'content', get_post_format() );

						endwhile;
					else :

						get_template_part( 'content', 'none' );

					endif;
				?>
				SinDay Tripsce our company’s founding in 1974 we have been providing our customers with memories of a lifetime through our travel and entertainment based programs. As a Tour Operator we work with Senior based groups, clubs, and organizations – Leisure Groups – Corporate Groups – and School Systems providing the very  <a href="">More <span>></span></a>
			</p>
			<div class="btn-container">
				<a href="" class="btn-small">What's New</a>
				<a href="" class="btn-small">Latest Videos</a>
			</div>
		</div>
		<div class="relative">
			<div id="slideshow" class="right">
				<figure>
					<div class="relative">
						<img src="<?php echo get_template_directory_uri(); ?>/images/slider-1.jpg" alt="">
						<figcaption>
							<strong>Family owned operated since 1999</strong>
							Our goal of providing memories of a lifetime is the heart of our business
						</figcaption>
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
			<img src="<?php echo get_template_directory_uri(); ?>/images/sub-photo-1.png">
			<span>Day Trips</span>
		</a>
		<a href="" class="left">
			<img src="<?php echo get_template_directory_uri(); ?>/images/sub-photo-2.png">
			<span>Overnight Trips</span>
		</a>
		<a href="" class="right">
			<img src="<?php echo get_template_directory_uri(); ?>/images/sub-photo-3.png">
			<span>Cruise Trips</span>
		</a>
		<div class="fix"></div>
	</section>
	<?php else : ?>
	
	<?php endif; ?>
<?php get_footer(); ?>
