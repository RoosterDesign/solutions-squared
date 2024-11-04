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
			<a href="/" alt="Solutions Squared" class="site-header__logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo.svg" />				
			</a>
			<?php wp_nav_menu( array( 'menu' => 'remote-links', 'container_class' => 'remote-links -desktop' )); ?>
			<button class="hamburger" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button> 
		</div>
		<nav class="navigation" role="navigation">
			<div class="container">
				<?php wp_nav_menu( array( 'menu' => 'main-menu', 'container' => 'ul', )); ?>
				<?php wp_nav_menu( array( 'menu' => 'remote-links', 'container_class' => 'remote-links -mobile' )); ?>
			</div>
		</nav>
	</header>