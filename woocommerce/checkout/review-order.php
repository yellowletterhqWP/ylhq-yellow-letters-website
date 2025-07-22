<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined( 'ABSPATH' ) || exit;
?>


<!-- Custom Order Review Tables -->
<div class="woocommerce-checkout-review-order-table">

    <!-- Product Details -->
    <table class="order-details-table">
        <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
            $_product   = $cart_item['data'];
            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 ) :
                $product_name = $_product->get_name();
                $quantity     = $cart_item['quantity'];
                $product_meta = wc_get_formatted_cart_item_data( $cart_item );
        ?>
        <tr>
            <td class="label">Product</td>
            <td class="value"><?php echo esc_html( $product_name ) . ' × ' . $quantity; ?></td>
        </tr>

		 <tr>
            <td class="label">Products:</td>
            <td class="value">TBD</td>
        </tr>

		 <tr>
            <td class="label">Templates:</td>
            <td class="value">TBD</td>
        </tr>

		 <tr>
            <td class="label">Font Selection:</td>
            <td class="value">TBD</td>
        </tr>

		 <tr>
            <td class="label">Font Color</td>
            <td class="value">TBD</td>
        </tr>

		 <tr>
            <td class="label">Paper Color</td>
            <td class="value">TBD</td>
        </tr>

        <?php if ( ! empty( $product_meta ) ) : ?>
            <tr>
                <td class="label">Details:</td>
                <td class="value"><?php echo $product_meta; ?></td>
            </tr>
        <?php endif; ?>


        <?php endif; endforeach; ?>
    </table>

    <hr />

    <!-- Subtotal -->
    <table class="order-details-table">
        <tr>
            <td class="label">Subtotal :</td>
            <td class="value"><?php wc_cart_totals_subtotal_html(); ?></td>
        </tr>
    </table>

    <hr />

    <!-- Additional Fees -->
    <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
    <table class="order-details-table">
        <tr>
            <td class="label"><?php echo esc_html( $fee->name ); ?> :</td>
            <td class="value"><?php wc_cart_totals_fee_html( $fee ); ?></td>
        </tr>
    </table>
    <hr />
    <?php endforeach; ?>

    <!-- Taxes -->
    <?php if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) : ?>
        <?php if ( WC()->cart->get_tax_totals() ) : ?>
            <?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
            <table class="order-details-table">
                <tr>
                    <td class="label"><?php echo esc_html( $tax->label ); ?> :</td>
                    <td class="value"><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
                </tr>
            </table>
            <hr />
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endif; ?>

    <!-- Shipping -->
    <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>
        <?php wc_cart_totals_shipping_html(); ?>
    <?php endif; ?>

    <!-- Total -->
    <table class="order-details-table">
        <tr>
            <td class="label">Total :</td>
            <td class="value"><?php wc_cart_totals_order_total_html(); ?></td>
        </tr>
    </table>

    <hr />
</div>

