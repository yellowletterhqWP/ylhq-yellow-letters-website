<?php
/* Template Name: My Orders */
get_header();
?>

<main id="main" class="site-main">
    <div class="register-hero-background"></div>

    <div class="my-orders-page-wrapper global-page-wrapper">        
        
        <img
        alt="RightImage6672"
        src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/rightimage6672-cck6-300w.png"
        class="register-right-image"
        />
        <img
        alt="LeftImage6672"
        src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/leftimage6672-vfcz-300w.png"
        class="register-left-image"
        />

        <div class="letters-iteration-page-header-title-container">
            <span class="handwritten-page-header-title1">My Account</span>
            <span class="handwritten-page-header-title3">Where Your Information and Orders Meet.</span>
        </div>

        <div class="my-order-page-content">
            <?php
                get_template_part('template-parts/form-elements/breadcrumb', null, [
                'items' => [
                    ['label' => 'My Account', 'url' => '/my-account'],
                    ['label' => 'My Orders']
                ]
                ]);
            ?>

            <span class="my-account-content-title">My Orders</span>

            <?php
                get_template_part( 'template-parts/form-elements/button', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/logout.svg',
                    'title' => 'Logout',
                ) );
            ?>
        </div>

        <div class="my-order-hr-1">
        <hr />

        <?php
            get_template_part('template-parts/form-elements/inputbox', null, [
                'id' => 'coupon',
                'label' => '',
                'placeholder' => '	Search by Order ID/Name',
                'required' => false,
                'icon' => get_stylesheet_directory_uri() . '/public/external/search-icon.svg',
            ]);
        ?>

        <?php
        $current_user_id = get_current_user_id();

        $customer_orders = wc_get_orders( array(
            'customer' => $current_user_id,
            'limit'    => -1, // ambil semua order
            'orderby'  => 'date',
            'order'    => 'DESC',
        ) );
        ?>

        <?php if ( ! empty( $customer_orders ) ) : ?>
            <?php
            $rows = [];
            foreach ( $customer_orders as $order ) {
                $rows[] = array(
                    '#' . $order->get_id(),
                    $order->get_date_created()->date('F j, Y'),
                    wc_get_order_status_name( $order->get_status() ),
                    '<a class="order-status" href="' . esc_url( $order->get_view_order_url() ) . '">View</a>',
                );

            }

            get_template_part('template-parts/form-elements/table', null, array(
                'headers' => array(
                    'ID', 'Date', 'Status', 'View'
                ),
                'rows' => $rows
            ));
            ?>
        <?php else : ?>
            <span class="my-order-no-order">
                Your orders will appear here once placed
            </span>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
