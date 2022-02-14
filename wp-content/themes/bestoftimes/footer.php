<footer id="footer">
			<div class="width">
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/best-of-times-logo-footer.png" alt="">
				</div>
				<div class="socials">
					<h5>Let's Socialize</h5>
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.png" border="0"></a>
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/icon-twitter.png" border="0"></a>
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/icon-youtube.png" border="0"></a>
				</div>
				<div>
					<h5>Contact Us Today!</h5>
					<h4>404.791.6903</h4>
					<h5><a href="mailto:info@bestoftimestravelc.com">info@bestoftimestravelc.com</a></h5>
				</div>
				<div class="last">
					<h5>Join Our Newsletter</h5>
					<form action="" id="newsletter-signup">
						<input type="text" class="text">
						<input type="submit" class="submit">
					</form>
				</div>
				
			</div>
		</footer>
		<nav id="footernav">
			<div class="width">
				<a href="<?php get_site_url(); ?>">Home</a>
				<a href="<?php get_site_url(); ?>/day-trips">Day Trips</a>
				<a href="<?php get_site_url(); ?>/overnight-trips">Overnight Trips</a>
				<a href="<?php get_site_url(); ?>/extended-stay-cruises">Extended Stay &amp; Cruises</a>
				<a href="<?php get_site_url(); ?>/contact" class="last">Contact</a>
			</div>
		</nav>
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.0.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle.all.js"></script>
		<script type="text/javascript">
			$(function(){
				$('#slideshow').cycle({
					prev: '#pager-left',
					next: '#pager-right',
					speed: 500
				});
			});
		</script>
		<?php wp_footer(); ?>
	</body>
</html>