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
		<ul>
			<li>
				<a href="#services" title="Services">Services</a>
			</li>
			<li>
				<a href="#sectors" title="Sectors">Sectors</a>
			</li>
			<li>
				<a href="#learning" title="Learning">Learning</a>
			</li>
			<li>
				<a href="#about" title="About">About</a>
			</li>
			<li>
				<a href="#news" title="News">News</a>
			</li>
			<li>
				<a href="#contact" title="Contact">Contact</a>
			</li>
		</ul>
		</nav>
	</header>