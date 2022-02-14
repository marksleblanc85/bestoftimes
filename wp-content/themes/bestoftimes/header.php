<!doctype html>
<html>
	<head>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
		<script type="text/javascript" src="js/html5shiv.js"></script>
		<link href="http://fonts.googleapis.com/css?family=BenchNine:400,300,700" rel="stylesheet" type="text/css">
		<?php wp_head(); ?>
	</head> 
	<body id="home">
		<header id="header">
			<div class="width">
				<a href="<?php get_site_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/best-of-times-logo.png" alt="Vintage Flights" class="logo">
				</a>
				<div class="right">
					<p>Travel &amp; Entertainment Programs for Groups</p>
					<h2>1.800.343.8999</h2>
						<?php wp_nav_menu( array('menu' => 'Main Nav' )); ?>
						<!--<a href="<?php get_site_url(); ?>">Home</a>
						<a href="<?php get_site_url(); ?>/day-trips">Day Trips</a>
						<a href="<?php get_site_url(); ?>/overnight-trips">Overnight Trips</a>
						<a href="<?php get_site_url(); ?>/extended-stay-cruises">Extended Stay &amp; Cruises</a>
						<a href="<?php get_site_url(); ?>/contact" class="last">Contact</a>-->
				</div>				
				<div class="fix"></div>
			</div>
		</header>
		
		