<?php get_header(); ?>
	<section id="primary" class="content-area inner">

		<div id="content" class="content site-content width" role="main">
			<div id="sidebar" class="left">
				<h2 class="pagetitle"><?php the_category(); ?></h2>
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
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="singlepost">
					<?php 
						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} 
					?>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<br>
					<p class="body"><?php the_content(); ?></p>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="fix"></div>
		</div>
	</div>

<?php
get_footer();
 ?>