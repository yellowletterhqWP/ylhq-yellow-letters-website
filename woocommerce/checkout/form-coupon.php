<?php
/**
 * Checkout coupon form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-coupon.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.8.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! wc_coupons_enabled() ) { // @codingStandardsIgnoreLine.
	return;
}

?>


<form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none" id="woocommerce-checkout-form-coupon">

    <h2 class="form-heading checkout-form-heading">
        <?php esc_html_e( 'Have a coupon? Click here to enter your code', 'woocommerce' ); ?>
    </h2>

    <p class="coupon-instructions">
        <?php esc_html_e( 'If you have a coupon code, please apply it below.', 'woocommerce' ); ?>
    </p>

    <div class="handwritten-page-last">               

        <div class="form-group inputbox-group">
            <label for="coupon_code" class="inputbox-label screen-reader-text">
                <?php esc_html_e( 'Coupon code', 'woocommerce' ); ?>
            </label>

            <div class="inputbox-container">    
                <input class="inputbox" id="coupon_code" name="coupon_code" type="text" 
                       placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" value="" />
            </div>
        </div>

        <div class="blue-default-button" data-disabled="false">
            <button type="submit" name="apply_coupon">
                <?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?>
            </button>   
        </div>

    </div>

    <div class="clear"></div>
</form>

<hr/>
