<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header class="site-header">
		<div class="container">
			<a href="" alt="Solutions Squared" class="site-header__logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo.svg" />				
			</a>

			<button class="hamburger" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button> 

		</div>


		<nav class="navigation" role="navigation">
			<div class="container">
				<ul class="navigation-list">
					<li class="navigation-list__item">
						<a href="#services" title="Services" class="navigation-list__link">Services</a>
					</li>
					<li class="navigation-list__item">
						<a href="#sectors" title="Sectors" class="navigation-list__link">Sectors</a>
					</li>
					<li class="navigation-list__item">
						<a href="#learning" title="Learning" class="navigation-list__link">Learning</a>
					</li>
					<li class="navigation-list__item">
						<a href="#about" title="About" class="navigation-list__link">About</a>
					</li>
					<li class="navigation-list__item">
						<a href="#news" title="News" class="navigation-list__link">News</a>
					</li>
					<li class="navigation-list__item">
						<a href="#contact" title="Contact" class="navigation-list__link">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>