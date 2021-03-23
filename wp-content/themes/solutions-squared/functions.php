<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'wp_vanilla_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wp_vanilla_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Solutions Squared, use a find and replace
		 * to change 'solutions-squared' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'solutions-squared', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'solutions-squared' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'wp_vanilla_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'wp_vanilla_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_vanilla_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_vanilla_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp_vanilla_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_vanilla_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'solutions-squared' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'solutions-squared' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wp_vanilla_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wp_vanilla_scripts() {
	wp_enqueue_style( 'solutions-squared-style', get_template_directory_uri() . '/dist/css/styles.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'solutions-squared-scripts', get_template_directory_uri() . '/dist/js/scripts.js', array(), '1.0.0', true );
	/*wp_enqueue_script( 'solutions-squared-scripts', get_template_directory_uri() . '/dist/js/scripts.js', array('jquery'), '1.0.0', true );*/
	/*wp_enqueue_style( 'solutions-squared-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'solutions-squared-style', 'rtl', 'replace' );	
	wp_enqueue_script( 'solutions-squared-navigation', get_template_directory_uri() . '/src/js/navigation.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}*/

		/* Google Fonts */	
		wp_enqueue_style( 'add_google_fonts', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap', false );

		/* jQuery */
		wp_enqueue_script( 'solutions-squared-jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), _S_VERSION, true );
	
}
add_action( 'wp_enqueue_scripts', 'wp_vanilla_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/* ================================ */
/* ======  CUSTOM FUNCTIONS ======  */
/* ================================ */

/* ================================ */
/* Limit number of words in post exceprt */

function get_excerpt($limit){
	$excerpt = get_the_excerpt();
	$excerpt = preg_replace(" ([.*?])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, $limit);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	$excerpt = $excerpt.'...';
	/*$excerpt = $excerpt.'... <a href="'.get_the_permalink().'">more</a>';*/
	return $excerpt;
	}


/* ================================ */
	/* Blog post thumbnails */
	if ( function_exists( 'add_theme_support' ) ) {
		set_post_thumbnail_size( 360, 240, true ); // default Featured Image dimensions (cropped)

		// additional image sizes
		add_image_size( 'post-img', 650, 9999 );
		add_image_size( 'featured-post-thumb', 785, 530 );
		add_image_size( 'home-carousel', 1200, 500, true );
		add_image_size( 'home-intro', 650, 9999 );
		add_image_size( 'team-photo', 545, 545 );
		add_image_size( 'masthead-bg', 1920, 500, true );
	}

/* ================================ */
/* Sitewide Options Page */

add_action('admin_menu', 'awesome_page_create');
function awesome_page_create() {
    $page_title = 'Sitewide Settings';
    $menu_title = 'Sitewide Settings';
    $capability = 'edit_posts';
    $menu_slug = 'sitewide_settings';
    $function = 'sitewide_settings_display';
    $icon_url = '';
    $position = 30;

    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );

		function sitewide_settings_display() {
			
			/* Site Logo */
			if (isset($_POST['site_logo'])) {
				$site_logo = $_POST['site_logo'];
				update_option('site_logo', $site_logo);
			}
			$site_logo = get_option('site_logo', '');				
		?>

		<style>.settingsGroup{align-items:center;display:flex;margin-bottom:30px}.settingsGroup label{margin:0;width:150px}.settingsGroup input,.settingsGroup textarea{width:400px}.settingsGroup textarea{height:100px}</style>
		<h1>Sitewide Settings Page</h1>
		<br>
		<form method="POST">

			<h2>Branding</h2>
			<p>Upload to media library first and add link below.</p>
			<div class="settingsGroup">
				<label for="site_logo">Logo</label><br>
				<input type="text" name="site_logo" id="site_logo" value="<?php echo $site_logo; ?>">
			</div>	

			<hr />


				<input type="submit" value="Save" class="button button-primary button-large">
		</form>

	<?php }

}


/* Remove P tags from media images */
/*
Plugin Name: Image P tag remover
Description: Plugin to remove p tags from around images in content outputting, after WP autop filter has added them. (oh the irony)
Version: 1.0
Author: Fublo Ltd
Author URI: http://fublo.net/
*/

function filter_ptags_on_images($content)
{
    // do a regular expression replace...
    // find all p tags that have just
    // <p>maybe some white space<img all stuff up to /> then maybe whitespace </p>
    // replace it with just the image tag...
    return preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content);
}

// we want it to be run after the autop stuff... 10 is default.
add_filter('the_content', 'filter_ptags_on_images');