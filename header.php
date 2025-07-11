<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package YLHQ-Yellow-Letter-Website
 */

?>
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ylhq-yellow-letter-website' ); ?></a>

	<div class="login-hero-section">
		<div class="login-navbar">
			<div class="login-logo">
			<img
				alt="Logoicon6672"
				src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/logoicon6672-dq1t-200h.png"
				class="login-logoicon"
			/>
			<img
				alt="Logoimage6672"
				src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/logoimage6672-p89e-200h.png"
				class="login-logoimage"
			/>
			</div>
			<button class="menu-toggle" onclick="toggleMenu()">
			☰
			</button>

			<div class="login-navigations">
				<div class="wrapper"><a href="<?php echo site_url(); ?>"><span>Home</span></a></div>
				<div class="wrapper"><a href="<?php echo site_url('/shop'); ?>"><span>Shop</span></a></div>
				<div class="wrapper"><a href="<?php echo site_url('/my-orders'); ?>"><span>My Orders</span></a></div>
				<div class="wrapper"><a href="<?php echo site_url('/faq'); ?>"><span>FAQ</span></a></div>
				<div class="wrapper"><a href="<?php echo site_url('/contact-us'); ?>"><span>Contact us</span></a></div>
			</div>

		</div>
	</div>
