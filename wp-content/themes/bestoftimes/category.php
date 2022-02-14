<?php get_header(); ?>
	<section id="primary" class="content-area inner">

		<div id="content" class="content site-content width" role="main">
			<div id="sidebar" class="left">
				<h1 class="pagetitle"><?php the_category(); ?></h1>
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
				<?php $recent_posts = get_posts('posts_per_page=10'); ?>
				<?php foreach($recent_posts as $post) :
					setup_postdata($post); ?>
				<div class="post">
					<a href="">
						
					</a>
					<?php 
						if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} 
					?>
					<div class="meta">
						<div class="left">
							<h2 class="left"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><br>
							<p class="body"><?php the_content(); ?></p>
						</div>
						<a href="<?php the_permalink(); ?>" class="more">MORE</a>
						<div class="fix"></div>
					</div>
					
				</div>
				<?php endforeach; ?>
			</div>
			<div class="fix"></div>
		</div>
	</section>

<?php
get_footer();
