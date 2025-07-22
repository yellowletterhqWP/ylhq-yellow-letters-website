<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<main id="main" class="site-main">
    <div class="handwritten-page-container-1">
        
        <div class="handwritten-page-container-1-inner checkout-inner-container">
            <div class="handwritten-page-header-image cart-header-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/hero-bg.png" />
            </div>
            
            <div class="handwritten-page-header-title-container checkout-page-header-title-container">
                <div class="handwritten-page-header-title checkout-page-header-title">
                    <span class="handwritten-page-header-title1">Checkout</span>                        
                </div>

                <span class="handwritten-page-header-title3 checkout-template-subtitle">Where Your Information and Orders Meet.
                </span>
            </div>
        </div>  
    </div>

<?php
do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data" aria-label="<?php echo esc_attr__( 'Checkout', 'woocommerce' ); ?>">

	<?php if ( $checkout->get_checkout_fields() ) : ?>
		<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>

	        <div class="handwritten-page-forms checkout-form-container">
				<h2 id="order_review_heading" class="form-heading checkout-form-heading">
					<?php esc_html_e( 'Your Order Details', 'woocommerce' ); ?>
				</h2>

		<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

			<div id="order_review" class="woocommerce-checkout-review-order">
				<?php do_action( 'woocommerce_checkout_order_review' ); ?>
			</div>

		<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

		<?php woocommerce_checkout_coupon_form(); ?>


		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<?php do_action( 'woocommerce_checkout_billing' ); ?>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>

</form>
			</div>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
	</main>
