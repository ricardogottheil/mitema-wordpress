<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html  <?php language_attributes(); ?> > 
	<head>
		<title><?php bloginfo('name'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
		<?php wp_head(); ?>
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header">

						<!-- Logo -->
							<h1><a href="<?php home_url(); ?>"><?php bloginfo('name'); ?></a></h1>


						<!-- Nav -->
							<?php 
								   /**
									* Displays a navigation menu
									* @param array $args Arguments
									*/
									$args = array(
										'theme_location' => 'principal',
										'container' => 'nav',
										'container_id' => 'nav',						
									);
								
									wp_nav_menu( $args );
							?>


						<!-- Banner -->
							<section class="banner-slide">
								<?php 
								    echo do_shortcode("[metaslider id=58]"); 
								?>
							</section>

						<!-- Intro -->
							<section id="intro" class="container">
								<div class="row">
									<div class="4u 12u(mobile)">
										<section class="first">
											<i class="icon featured fa-cog"></i>
											<header>
												<h2>Ipsum consequat</h2>
											</header>
											<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
										</section>
									</div>
									<div class="4u 12u(mobile)">
										<section class="middle">
											<i class="icon featured alt fa-flash"></i>
											<header>
												<h2>Magna etiam dolor</h2>
											</header>
											<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
										</section>
									</div>
									<div class="4u 12u(mobile)">
										<section class="last">
											<i class="icon featured alt2 fa-star"></i>
											<header>
												<h2>Tempus adipiscing</h2>
											</header>
											<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
										</section>
									</div>
								</div>
								<footer>
									<ul class="actions">
										<li><a href="#" class="button big">Get Started</a></li>
										<li><a href="#" class="button alt big">Learn More</a></li>
									</ul>
								</footer>
							</section>

					</div>
				</div>