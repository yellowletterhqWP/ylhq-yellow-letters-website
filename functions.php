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

function enqueue_datepicker_assets() {
    wp_enqueue_style('flatpickr-css', 'https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css');
    wp_enqueue_script('flatpickr-js', 'https://cdn.jsdelivr.net/npm/flatpickr', [], null, true);

    wp_add_inline_script('flatpickr-js', "
        document.addEventListener('DOMContentLoaded', function() {
            flatpickr('.datepicker', {
                dateFormat: 'Y-m-d'
            });
        });
    ");
}
add_action('wp_enqueue_scripts', 'enqueue_datepicker_assets');

function custom_excerpt_more($more) {
    global $post;
    return '... <a class="read-more-link" href="' . get_permalink($post->ID) . '">Read more</a>';
}
add_filter('excerpt_more', 'custom_excerpt_more');

add_action( 'after_setup_theme', 'setup_woocommerce_support' );

 function setup_woocommerce_support()
{
  add_theme_support('woocommerce');
}

add_filter('woocommerce_form_field', 'custom_modify_billing_address_2_label_output', 10, 4);
function custom_modify_billing_address_2_label_output($field, $key, $args, $value) {
    if ($key === 'billing_address_2') {
        // Replace entire label tag
        $custom_label = '<label for="billing_address_2" class="inputbox-label">Other Address</label>';

        // Replace the label portion in the generated field HTML
        $field = preg_replace('/<label[^>]*>.*?<\/label>/', $custom_label, $field);
    }
    return $field;
}

add_filter('woocommerce_checkout_fields', 'remove_name_fields_and_add_full_name');

function remove_name_fields_and_add_full_name($fields) {
    // Remove default first and last name fields
    unset($fields['billing']['billing_first_name']);
    unset($fields['billing']['billing_last_name']);

    // Add custom full name field
    $fields['billing']['billing_full_name'] = array(
        'label'       => 'Full Name',
        'required'    => true,
        'class'       => array('form-row-wide'),
        'clear'       => true,
        'priority'    => 10
    );

    return $fields;
}

add_action('woocommerce_checkout_create_order', 'split_full_name_into_parts', 10, 2);

function split_full_name_into_parts($order, $data) {
    if (!empty($data['billing_full_name'])) {
        $full_name = trim($data['billing_full_name']);
        $parts = explode(' ', $full_name, 2);

        $first_name = $parts[0];
        $last_name = isset($parts[1]) ? $parts[1] : '';

        $order->set_billing_first_name($first_name);
        $order->set_billing_last_name($last_name);
    }
}

add_action('woocommerce_checkout_update_customer', 'save_split_name_to_customer', 10, 2);

function save_split_name_to_customer($customer, $data) {
    if (!empty($data['billing_full_name'])) {
        $full_name = trim($data['billing_full_name']);
        $parts = explode(' ', $full_name, 2);

        $customer->set_billing_first_name($parts[0]);
        $customer->set_billing_last_name(isset($parts[1]) ? $parts[1] : '');
    }
}

add_filter('woocommerce_order_formatted_billing_address', 'show_full_name_in_billing_address', 10, 2);

function show_full_name_in_billing_address($address, $order) {
    $address['first_name'] = $order->get_billing_first_name() . ' ' . $order->get_billing_last_name();
    $address['last_name'] = ''; // clear to prevent duplication
    return $address;
}

remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
add_action( 'woocommerce_after_checkout_form', 'woocommerce_checkout_payment', 10 );

remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );

add_filter( 'woocommerce_default_address_fields', 'change_fname_field' );
function change_fname_field( $fields ) {
	
	// $fields[ 'first_name' ][ 'label' ] = 'Full Name';
	$fields[ 'postcode' ][ 'placeholder' ] = 'Postcode / Zip';

	return $fields;	
}

add_filter('woocommerce_billing_fields', 'custom_billing_fields');
function custom_billing_fields($fields) {
    $fields['billing_phone']['label'] = 'Phone';
    $fields['billing_phone']['placeholder'] = 'Phone Number';
    return $fields;
}

add_filter('woocommerce_billing_fields', 'enable_company_field');
function enable_company_field($fields) {
    $fields['billing_company'] = array(
        'label'       => 'Company Name',
        'placeholder' => 'Company (Optional)',
        'required'    => false,
        'class'       => array('form-row-wide'),
        'priority'    => 25,
    );
    return $fields;
}

function ylhq_redirect_non_logged_users() {
    if ( is_page() && !is_user_logged_in() ) {
        // Daftar halaman yang tetap bisa diakses meski belum login
        $allowed_pages = array( '
            index', 'handwritten-cards', 'about', 'forgot-password', 'contact-us', 'login', 
            'register', 'privacy-policy', 'home-concept-2', 'shop-2', 'faq', 'blogs', 'terms-conditions',
            'letters-iteration-1', 'handwritten-cards-final', 'postcard-final', 'custom-template-final'
        );

        if ( !is_page( $allowed_pages ) ) {
            wp_redirect( wp_login_url() ); // Atau redirect ke halaman custom login kamu
            exit;
        }
    }
}
add_action( 'template_redirect', 'ylhq_redirect_non_logged_users' );

// 1. Register Custom Post Type
function register_support_ticket_cpt() {
    register_post_type('support_ticket', [
        'label' => 'Support Tickets',
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'supports' => ['title', 'editor'],
        'menu_icon' => 'dashicons-tickets-alt',
    ]);
}
add_action('init', 'register_support_ticket_cpt');

// 2. Add Meta Box
function add_ticket_meta_boxes() {
    add_meta_box(
        'ticket_meta_box',
        'Ticket Details',
        'render_ticket_meta_box',
        'support_ticket',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'add_ticket_meta_boxes');

// 3. Render Meta Box Fields
function render_ticket_meta_box($post) {
    $department = get_post_meta($post->ID, 'department', true);
    $visibility = get_post_meta($post->ID, 'visibility', true);
    $attachments = get_post_meta($post->ID, 'attachments', true) ?: [];

    wp_nonce_field('save_ticket_meta_box', 'ticket_meta_box_nonce');
    ?>
    <p>
        <label for="ticket_department">Department</label><br>
        <select name="ticket_department" id="ticket_department">
            <?php
            $options = ['letter', 'handwritten', 'postcard', 'custom'];
            foreach ($options as $opt) {
                echo '<option value="' . esc_attr($opt) . '"' . selected($department, $opt, false) . '>' . ucfirst($opt) . '</option>';
            }
            ?>
        </select>
    </p>

    <p>
        <label>Visibility</label><br>
        <label><input type="radio" name="ticket_visibility" value="public" <?php checked($visibility, 'public'); ?>> Public</label>
        <label><input type="radio" name="ticket_visibility" value="private" <?php checked($visibility, 'private'); ?>> Private</label>
    </p>

    <p>
        <label for="ticket_attachments">Upload Attachments</label><br>
        <input type="file" name="ticket_attachments[]" multiple><br>
        <?php if (!empty($attachments)) : ?>
            <ul>
                <?php foreach ($attachments as $file) : ?>
                    <li><a href="<?php echo esc_url($file); ?>" target="_blank"><?php echo esc_html(basename($file)); ?></a></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </p>
    <?php
}

// 4. Save Meta Box Data
function save_ticket_meta_box($post_id) {
    if (!isset($_POST['ticket_meta_box_nonce']) || !wp_verify_nonce($_POST['ticket_meta_box_nonce'], 'save_ticket_meta_box')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['ticket_department'])) {
        update_post_meta($post_id, 'department', sanitize_text_field($_POST['ticket_department']));
    }
    if (isset($_POST['ticket_visibility'])) {
        update_post_meta($post_id, 'visibility', sanitize_text_field($_POST['ticket_visibility']));
    }

    if (!empty($_FILES['ticket_attachments']['name'][0])) {
        $uploaded = [];
        $files = $_FILES['ticket_attachments'];
        for ($i = 0; $i < count($files['name']); $i++) {
            $file = [
                'name'     => $files['name'][$i],
                'type'     => $files['type'][$i],
                'tmp_name' => $files['tmp_name'][$i],
                'error'    => $files['error'][$i],
                'size'     => $files['size'][$i]
            ];
            $upload = wp_handle_upload($file, ['test_form' => false]);
            if (!isset($upload['error'])) {
                $uploaded[] = $upload['url'];
            }
        }
        update_post_meta($post_id, 'attachments', $uploaded);
    }
}
add_action('save_post_support_ticket', 'save_ticket_meta_box');

// 5. Handle Form Submit (Frontend)
add_action('admin_post_nopriv_submit_support_ticket', 'handle_submit_ticket');
add_action('admin_post_submit_support_ticket', 'handle_submit_ticket');

function handle_submit_ticket() {
    if (!is_user_logged_in()) wp_die('Please login first.');

    $subject     = sanitize_text_field($_POST['subject']);
    $description = wp_kses_post($_POST['description']);
    $department  = sanitize_text_field($_POST['department']);
    $visibility  = sanitize_text_field($_POST['visibility']);

    $uploaded_files = [];
    if (!empty($_FILES['attachments']['name'][0])) {
        $allowed_types = ['image/jpeg','image/png','image/gif','application/pdf','application/msword','application/zip','application/vnd.ms-excel','text/csv'];
        $count = count($_FILES['attachments']['name']);
        if ($count > 2) wp_die('Max 2 files only.');
        for ($i = 0; $i < $count; $i++) {
            if ($_FILES['attachments']['size'][$i] > 2 * 1024 * 1024) wp_die('Each file must be under 2MB.');
            if (!in_array($_FILES['attachments']['type'][$i], $allowed_types)) wp_die('Invalid file type: ' . $_FILES['attachments']['name'][$i]);
            $_file = [
                'name'     => $_FILES['attachments']['name'][$i],
                'type'     => $_FILES['attachments']['type'][$i],
                'tmp_name' => $_FILES['attachments']['tmp_name'][$i],
                'error'    => $_FILES['attachments']['error'][$i],
                'size'     => $_FILES['attachments']['size'][$i]
            ];
            $upload = wp_handle_upload($_file, ['test_form' => false]);
            if (!isset($upload['error'])) {
                $uploaded_files[] = $upload['url'];
            }
        }
    }

    $post_id = wp_insert_post([
        'post_title'   => $subject,
        'post_content' => $description,
        'post_type'    => 'support_ticket',
        'post_status'  => 'publish',
        'post_author'  => get_current_user_id(),
        'meta_input'   => [
            'department'  => $department,
            'visibility'  => $visibility,
            'attachments' => $uploaded_files
        ]
    ]);

    wp_redirect(home_url('/thank-you'));
    exit;
}

// 6. Batasi User Lihat Tiket Sendiri di Admin
function restrict_ticket_list_to_author($query) {
    global $pagenow;
    if (!is_admin() || $pagenow !== 'edit.php') return;
    if ($query->get('post_type') === 'support_ticket' && !current_user_can('manage_options')) {
        $query->set('author', get_current_user_id());
    }
}
add_action('pre_get_posts', 'restrict_ticket_list_to_author');

// 7. Sembunyikan Kolom Author untuk User Biasa
function remove_author_column_for_tickets($columns) {
    if (!current_user_can('manage_options')) {
        unset($columns['author']);
    }
    return $columns;
}
add_filter('manage_support_ticket_posts_columns', 'remove_author_column_for_tickets');



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

