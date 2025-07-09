<?php
/**
 * YLHQ-Yellow-Letter-Website functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package YLHQ-Yellow-Letter-Website
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ylhq_yellow_letter_website_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on YLHQ-Yellow-Letter-Website, use a find and replace
		* to change 'ylhq-yellow-letter-website' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ylhq-yellow-letter-website', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'ylhq-yellow-letter-website' ),
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
			'ylhq_yellow_letter_website_custom_background_args',
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
add_action( 'after_setup_theme', 'ylhq_yellow_letter_website_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ylhq_yellow_letter_website_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ylhq_yellow_letter_website_content_width', 640 );
}
add_action( 'after_setup_theme', 'ylhq_yellow_letter_website_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ylhq_yellow_letter_website_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ylhq-yellow-letter-website' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ylhq-yellow-letter-website' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ylhq_yellow_letter_website_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ylhq_yellow_letter_website_scripts() {
	wp_enqueue_style( 'ylhq-yellow-letter-website-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ylhq-yellow-letter-website-style', 'rtl', 'replace' );

	// ambil semua CSS di assets/css
    $css_dir = get_template_directory() . '/assets/css';
    $css_uri = get_template_directory_uri() . '/assets/css';

    if ( is_dir( $css_dir ) ) {
        foreach ( glob( $css_dir . '/*.css' ) as $css_file ) {
            $handle = basename( $css_file, '.css' );
            wp_enqueue_style( $handle, $css_uri . '/' . basename($css_file), array('ylhq-yellow-letter-website-style') );
        }
    }
	
	// ambil semua JS di /js
    $js_dir = get_template_directory() . '/js';
    $js_uri = get_template_directory_uri() . '/js';

    if ( is_dir( $js_dir ) ) {
        foreach ( glob( $js_dir . '/*.js' ) as $js_file ) {
            $handle = basename( $js_file, '.js' );
            wp_enqueue_script(
                $handle,
                $js_uri . '/' . basename($js_file),
                array(),
                _S_VERSION,
                true
            );
        }
    }

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ylhq_yellow_letter_website_scripts' );

function ylhq_handle_custom_login() {
    $login    = sanitize_text_field($_POST['log'] ?? '');
    $password = $_POST['pwd'] ?? '';

    // Coba dapatkan user dari email atau username
    $user = get_user_by('email', $login);
    if (!$user) {
        $user = get_user_by('login', $login);
    }

    if (!$user) {
        wp_redirect(home_url('/login/?login=failed'));
        exit;
    }

    $creds = array(
        'user_login'    => $user->user_login, // pastikan ini username
        'user_password' => $password,
        'remember'      => true,
    );

    $user = wp_signon($creds, false);

    if (is_wp_error($user)) {
        // Redirect back with error
        wp_redirect(get_permalink(get_page_by_path('login')) . '?login=failed');
        exit;
    }

    // Login success
    wp_redirect(home_url());
    exit;
}
add_action('admin_post_nopriv_custom_user_login', 'ylhq_handle_custom_login');
add_action('admin_post_custom_user_login', 'ylhq_handle_custom_login'); // Optional: if login page accessed from logged in user

function redirect_logged_in_users_from_login_page() {
    if (is_user_logged_in() && is_page('login')) {
        wp_redirect(home_url());
        exit;
    }
}
add_action('template_redirect', 'redirect_logged_in_users_from_login_page');

function ylhq_handle_forgot_password() {
    if ( empty($_POST['user_email']) || ! is_email($_POST['user_email']) ) {
        wp_redirect( home_url('/index.php/forgot-password?reset=invalid') );
        exit;
    }

    $user_data = get_user_by( 'email', sanitize_email($_POST['user_email']) );

    if ( ! $user_data ) {
        wp_redirect( home_url('/index.php/forgot-password?reset=notfound') );
        exit;
    }

    // Generate reset key and URL
    $reset_key = get_password_reset_key( $user_data );
    $reset_url = network_site_url("wp-login.php?action=rp&key=$reset_key&login=" . rawurlencode($user_data->user_login), 'login');

    // Send email manually
    $to = $user_data->user_email;
    $subject = 'Password Reset Request';
    $message = "Hi " . $user_data->display_name . ",\n\n";
    $message .= "Click the link below to reset your password:\n";
    $message .= $reset_url . "\n\n";
    $message .= "If you didn't request this, please ignore this email.";

    wp_mail( $to, $subject, $message );

    wp_redirect( home_url('/index.php/forgot-password?reset=success') );
    exit;
}
add_action('admin_post_nopriv_ylhq_forgot_password', 'ylhq_handle_forgot_password');

function ylhq_handle_reset_password() {
    $login       = sanitize_text_field($_POST['login'] ?? '');
    $reset_key   = sanitize_text_field($_POST['reset_key'] ?? '');
    $new_pass    = $_POST['new_password'] ?? '';
    $confirm     = $_POST['confirm_password'] ?? '';

    if (empty($new_pass) || empty($confirm)) {
        wp_redirect(home_url('/index.php/reset-password?reset=empty'));
        exit;
    }

    if ($new_pass !== $confirm) {
        wp_redirect(home_url('/index.php/reset-password?reset=nomatch'));
        exit;
    }

    $user = check_password_reset_key($reset_key, $login);

    if (is_wp_error($user)) {
        wp_redirect(home_url('/index.php/reset-password?reset=invalid'));
        exit;
    }

    reset_password($user, $new_pass);

    wp_redirect(home_url('/index.php/login?reset=success'));
    exit;
}
add_action('admin_post_nopriv_ylhq_reset_password', 'ylhq_handle_reset_password');


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

