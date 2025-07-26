<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

if ( wc_get_page_id( 'shop' ) > 0 ) : 
?>
<?php if ( is_cart() ) : ?>

    <div class="cart-empty-container-1-inner">
        <div class="handwritten-page-header-image cart-header-image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/hero-bg.png" />
        </div>

        <div class="handwritten-page-header-title-container cart-title-container">
            <div class="handwritten-page-header-title cart-page-header-title">
                <span class="handwritten-page-header-title1">Cart</span>                        
            </div>

            <span class="handwritten-page-header-title3 cart-page-header-subtitle">
               Where Your Information and Orders Meet.
            </span>
        </div>
    </div>
<?php endif; ?>

<div class="custom-register-wrapper"> 
  <h2 class="custom-account-heading">My Cart</h2>

  <hr class="template-selection">
	<?php
/*
 * @hooked wc_empty_cart_message - 10
 */
do_action( 'woocommerce_cart_is_empty' );
?>

	<div class="register-button">
		<div id="forgot-password-button" class="blue-default-button return-to-shop-button">

			<a class="wc-backward<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
				<?php
				/**
				 * Filter "Return To Shop" text.
				 *
				 * @since 4.6.0
				 * @param string $default_text Default text.
				 */
				echo esc_html( apply_filters( 'woocommerce_return_to_shop_text', __( 'Return to Shop', 'woocommerce' ) ) );
			?>
			</a>
    	</div>
	</div>
</div>

<?php endif; ?>
