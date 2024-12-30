<?php
/**
 * X MARG DESTINATION functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package X_MARG_DESTINATION
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function x_marg_destination_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on X MARG DESTINATION, use a find and replace
	 * to change 'x-marg-destination' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('x-marg-destination', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'x-marg-destination'),
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
			'x_marg_destination_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'x_marg_destination_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function x_marg_destination_content_width()
{
	$GLOBALS['content_width'] = apply_filters('x_marg_destination_content_width', 640);
}
add_action('after_setup_theme', 'x_marg_destination_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function x_marg_destination_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'x-marg-destination'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'x-marg-destination'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'x_marg_destination_widgets_init');

/**
 * Enqueue scripts and styles.
 */

function x_marg_destination_scripts()
{
	// Enqueue styles
	wp_enqueue_style('x-marg-destination-animate', get_template_directory_uri() . '/assets/lib/animate/animate.min.css', array(), _S_VERSION);
	wp_enqueue_style('x-marg-destination-owl', get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css', array(), _S_VERSION);
	wp_enqueue_style('x-marg-destination-tempusdominus', get_template_directory_uri() . '/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css', array(), _S_VERSION);
	wp_enqueue_style('x-marg-destination-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style('x-marg-destination-fancybox-style', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), _S_VERSION);
	wp_enqueue_style('x-marg-destination-custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION);

	// Enqueue scripts
	wp_enqueue_script('x-marg-destination-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('x-marg-destination-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('x-marg-destination-wow', get_template_directory_uri() . '/assets/lib/wow/wow.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('x-marg-destination-easing', get_template_directory_uri() . '/assets/lib/easing/easing.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('x-marg-destination-waypoints', get_template_directory_uri() . '/assets/lib/waypoints/waypoints.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('x-marg-destination-owl', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('x-marg-destination-moment', get_template_directory_uri() . '/assets/lib/tempusdominus/js/moment.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('x-marg-destination-moment-timezone', get_template_directory_uri() . '/assets/lib/tempusdominus/js/moment-timezone.min.js', array(), _S_VERSION, true);
	
	wp_enqueue_script('x-marg-destination-tempusdominus-bootstrap-4', get_template_directory_uri() . '/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('x-marg-destination-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('x-marg-destination-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);

	// wp_enqueue_script('x-marg-destination-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	// Enqueue comment-reply script if needed
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'x_marg_destination_scripts');


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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
// Add ACF options page
if (function_exists('acf_add_options_page')) {
	$theme_settings = array(
		'page_title' => 'Theme General Settings',
		'menu_title' => 'Theme Settings',
		'menu_slug' => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect' => false
	);

	$theme_header_settings = array(
		'page_title' => 'Theme Header Settings',
		'menu_title' => 'Header',
		'parent_slug' => 'theme-general-settings',
	);

	$theme_footer_settings = array(
		'page_title' => 'Theme Footer Settings',
		'menu_title' => 'Footer',
		'parent_slug' => 'theme-general-settings',
	);

	$theme_contact_settings = array(
		'page_title' => 'Theme Contact Settings',
		'menu_title' => 'Contact',
		'parent_slug' => 'theme-general-settings',
	);
	
	$theme_social_settings = array(
		'page_title' => 'Theme Social Settings',
		'menu_title' => 'Social',
		'parent_slug' => 'theme-general-settings',
	);
	$theme_footerimg_settings = array(
		'page_title' => 'Theme footerimg Settings',
		'menu_title' => 'footerimg',
		'parent_slug' => 'theme-general-settings',
	);

	acf_add_options_page($theme_settings);
	acf_add_options_sub_page($theme_header_settings);
	acf_add_options_sub_page($theme_footer_settings);
	acf_add_options_sub_page($theme_contact_settings);
	acf_add_options_sub_page($theme_social_settings);
	acf_add_options_sub_page($theme_footerimg_settings);
}

register_nav_menus(array(
	'menu-1' => esc_html__('Primary', 'x_marg_destination'),
	'footer' => esc_html__('Footer menu', 'x_marg_destination'),
	'header' => esc_html__('Header menu', 'x_marg_destination'),
));

class Custom_Nav_Walker extends Walker_Nav_Menu
{
	// Start Level (for dropdown menus)
	function start_lvl(&$output, $depth = 0, $args = null)
	{
		$output .= '<ul class="dropdown-menu">';
	}

	// End Level (closes dropdown menu)
	function end_lvl(&$output, $depth = 0, $args = null)
	{
		$output .= '</ul>';
	}

	// Start element
	function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
	{
		$has_children = in_array('menu-item-has-children', $item->classes);
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($item->classes), $item));
		$class_names = esc_attr($class_names);

		// Add 'active' class if it's the current menu item
		if (in_array('current-menu-item', $item->classes) || in_array('current-menu-ancestor', $item->classes)) {
			$class_names .= ' active';
		}

		// If item is at depth 0 (not in a dropdown)
		if ($depth === 0) {
			if ($has_children) {
				$output .= '<li class="nav-item dropdown">';
				$output .= '<a href="' . esc_attr($item->url) . '" class="nav-link dropdown-toggle ' . $class_names . '" data-bs-toggle="dropdown" aria-expanded="false">';
				$output .= '<span class="pe-2">' . $item->title . '</span>';
				$output .= '</a>';
			} else {
				// Regular menu item (not in dropdown)
				$output .= '<li class="nav-item">';
				$output .= '<a href="' . esc_attr($item->url) . '" class="nav-link ' . $class_names . '">' . $item->title . '</a>';
			}
		} else {
			// If item is inside a dropdown (depth > 0)
			$output .= '<li>';
			$output .= '<a href="' . esc_attr($item->url) . '" class="dropdown-item ' . $class_names . '">' . $item->title . '</a>';
		}
	}

	// End element
	function end_el(&$output, $item, $depth = 0, $args = null)
	{
		$output .= '</li>';
	}
}

function custom_breadcrumbs() {
    // Settings
    $separator = ' / ';
    $home_title = 'Home';
    $home_url = home_url();
    
    // Start the breadcrumb output
    $output = '<nav aria-label="breadcrumb"><ol class="breadcrumb justify-content-center">';
    $output .= '<li class="breadcrumb-item ">
	<a href="' . esc_url($home_url) . '" class="text-info">' . esc_html($home_title) . '</a></li>';

    if (is_single()) {
        // For single posts
        $post_type = get_post_type();
        $post_type_object = get_post_type_object($post_type);
        
        if ($post_type_object) {
            $output .= '<li class="breadcrumb-item"><a href="' . esc_url(get_post_type_archive_link($post_type)) . '" class="text-info">' . esc_html($post_type_object->labels->singular_name) . '</a></li>';
        }
        
        $output .= '<li class="breadcrumb-item text-white active" aria-current="page">' . esc_html(get_the_title()) . '</li>';
    } elseif (is_page() || is_category() || is_tag()) {
        // For pages, categories, and tags
        $output .= '<li class="breadcrumb-item text-white active" aria-current="page">' . esc_html(get_the_title()) . '</li>';
    } elseif (is_search()) {
        // For search results
        $output .= '<li class="breadcrumb-item text-white active" aria-current="page">Search Results for: ' . esc_html(get_search_query()) . '</li>';
    } elseif (is_404()) {
        // For 404 error page
        $output .= '<li class="breadcrumb-item text-white active" aria-current="page">404 Not Found</li>';
    } elseif (is_archive()) {
        // For archive pages
        $output .= '<li class="breadcrumb-item text-white active" aria-current="page">' . esc_html(post_type_archive_title('', false)) . '</li>';
    }

    // Close breadcrumb list
    $output .= '</ol></nav>';
    echo $output; // Output the breadcrumbs
}

