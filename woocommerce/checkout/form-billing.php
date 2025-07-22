<?php
/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 * @global WC_Checkout $checkout
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="woocommerce-billing-fields">
	<?php if ( wc_ship_to_billing_address_only() && WC()->cart->needs_shipping() ) : ?>

		<h3><?php esc_html_e( 'Billing &amp; Shipping', 'woocommerce' ); ?></h3>

	<?php else : ?>
            <h2 class="form-heading checkout-form-heading"><?php esc_html_e( 'Billing Address', 'woocommerce' ); ?></h2>

	<?php endif; ?>

	<?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>

	<?php
$billing_fields = $checkout->get_checkout_fields( 'billing' );

// echo '<pre>';
// print_r( array_keys( $billing_fields ) );
// echo '</pre>';

// Define field groups as pairs for two-column layout
$field_groups = [
    ['billing_full_name', 'billing_email'],
    ['billing_country', 'billing_state'],
    ['billing_city', 'billing_address_1'],
    ['billing_address_2', 'billing_postcode'],
    ['billing_phone', 'billing_company']
];

foreach ( $field_groups as $group ) : ?>
    <div class="handwritten-page-divide2">
        <?php foreach ( $group as $key ) :
    if ( ! isset( $billing_fields[ $key ] ) ) continue;


    $field = $billing_fields[ $key ];

    // Add custom wrapper classes
    $field['class'][] = 'form-group';
    $field['class'][] = 'inputbox-group';

    // Remove WooCommerce's default input class
    if ( isset( $field['input_class'] ) && is_array( $field['input_class'] ) ) {
        $field['input_class'] = array_diff( $field['input_class'], ['input-text'] );
    } else {
        $field['input_class'] = [];
    }

    // Add custom input and label classes
    $field['input_class'][] = 'inputbox';
    $field['label_class'][] = 'inputbox-label';
?>
    <div class="handwritten-page-form-mail-info">
        <?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>
    </div>

        <?php endforeach; ?>
    </div>
<?php endforeach; ?>


	<?php do_action( 'woocommerce_after_checkout_billing_form', $checkout ); ?>
</div>

<?php if ( ! is_user_logged_in() && $checkout->is_registration_enabled() ) : ?>
	<div class="woocommerce-account-fields">
		<?php if ( ! $checkout->is_registration_required() ) : ?>

			<p class="form-row form-row-wide create-account">
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" id="createaccount" <?php checked( ( true === $checkout->get_value( 'createaccount' ) || ( true === apply_filters( 'woocommerce_create_account_default_checked', false ) ) ), true ); ?> type="checkbox" name="createaccount" value="1" /> <span><?php esc_html_e( 'Create an account?', 'woocommerce' ); ?></span>
				</label>
			</p>

		<?php endif; ?>

		<?php do_action( 'woocommerce_before_checkout_registration_form', $checkout ); ?>

		<?php if ( $checkout->get_checkout_fields( 'account' ) ) : ?>

			<div class="create-account">
				<?php foreach ( $checkout->get_checkout_fields( 'account' ) as $key => $field ) : ?>
					<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>
				<?php endforeach; ?>
				<div class="clear"></div>
			</div>

		<?php endif; ?>

		<?php do_action( 'woocommerce_after_checkout_registration_form', $checkout ); ?>
	</div>
<?php endif; ?>

<hr/>