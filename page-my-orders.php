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
        </div>

    </div>
</main>

<?php get_footer(); ?>
