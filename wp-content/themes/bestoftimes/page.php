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
			<h2>Welcome To The World of Travel and Entertainment!</h2>
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
				SinDay Tripsce our company’s founding in 1974 we have been providing our customers with memories of a lifetime through our travel and entertainment based programs. As a Tour Operator we work with Senior based groups, clubs, and organizations – Leisure Groups – Corporate Groups – and School Systems providing the very  <a href="">More <span>></span></a>
			</p>
			<div class="btn-container">
				<a href="" class="btn-small left">What's New</a>
				<a href="" class="btn-small right">Latest Videos</a>
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
	<div class="fix"></div>
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
<section class="feature width">
	<div class="left">
		<h4>Featured Trips</h4>
		<p>Register <a href="">Here</a> as a Group Leader</p>
	</div>
	<div class="right">
		<figure>
			<a href="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/day-trips-1.png" alt="">
				<h3>Wildwood Crest &amp; Cape May</h3>
				<h4 class="green">Save up to 30%</h4>
			</a>
			
		</figure>
		<figure>
			<a href="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/day-trips-2.png" alt="">
				<h3>Ronan Tynan – An Irish Celebration</h3>
				<h4 class="green">Save up to 30%</h4>
			</a>
			
		</figure>
		<figure>
			<a href="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/day-trips-3.png" alt="">
				<h3>Debbie Reynolds</h3>
				<h4 class="green">Save up to 30%</h4>
			</a>
		</figure>
	</div>
	<div class="fix"></div>
</section>
<section class="feature width">
	<div class="left">
		<h4>Featured VIDEOS</h4>
		<p>Best Of Times Travel is happy to share with you videos featuring our destinations as well as highlighted acts performing for our travelers.</p>
	</div>
	<div class="right">
		<figure>
			<iframe width="560" height="315" src="//www.youtube.com/embed/GghFYwiQeZc" frameborder="0" allowfullscreen></iframe>
		</figure>
		<figure>
			<iframe width="420" height="315" src="//www.youtube.com/embed/TiiQnT4RUPc" frameborder="0" allowfullscreen></iframe>
		</figure>
		<figure></figure>
	</div>
	<div class="fix"></div>
</section>
<?php else : ?>
	<div class="inner">
		<div class="content">
			<?php while (have_posts()) : the_post(); ?>
				<div id="sidebar" class="left">
					<h1 class="pagetitle"><?php the_title(); ?></h1>
					<?php if ( ! dynamic_sidebar() ) : ?>
						<?php get_sidebar(); ?>
					<?php endif; ?>
					<div class="widget">
						<h5>Join Our Newsletter</h5>
						<form action="" id="newsletter-signup">
							<input type="text" class="text">
							<input type="submit" class="submit">
						</form>
					</div>
					
				</div>
				<div class="rightcol">
					<div class="intro">We offer a wide range of single day travel experiences that are use to please the adventurer in all of us. Our porgram range from professional, high quality entertainment options featuring  some of the greatest entertainers worldwide to outstanding touring trips. Most of our programs include a delicious meal with transportation also available.</div>
					<div class="posts">
						<?php $recent = new WP_Query(); ?>
						<?php $recent->query('showposts=100&post_status=future&orderby=date&order=asc'); ?>
						<?php if ($recent->have_posts()){ ?>
							<?php while($recent->have_posts()) : $recent->the_post(); ?>
								<li class="<?php echo $post->post_name; ?>">
									<?php 
										if ( has_post_thumbnail() ) {
											the_post_thumbnail();
										} 
									?>
									<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
									<div class="thecontent">
										<a href="<?php the_permalink(); ?>" class="city <?php echo $post->post_name; ?>"></a>
										<?php the_content(); ?>
									</div>
									<a href="<?php the_permalink() ?>#form" class="registerbtn right"></a>
									<div class="fix"></div>
								</li>
							<?php endwhile; ?>
						<?php } else { ?>
							<li><p><br/>Sorry, we currently don't have any events scheduled. <br/><br/>Check back soon, or <a href="/contact">Contact Us</a> for more information.</p></li>
						<?php } ?>
					</div>	
				</div>
			<?php endwhile; ?>	
			<div class="fix"></div>
		</div>
	</div>
	<div class="endcap"></div>
<?php endif ?>
<?php get_footer(); ?>
