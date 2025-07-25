<?php
/* Template Name: Store Credits */
get_header();
?>

<main id="main" class="site-main">
    <div class="register-hero-background"></div>

    <div class="page-store-credits-wrapper global-page-wrapper">        
        
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
                    ['label' => 'Support']
                ]
                ]);
            ?>

            <span class="my-account-content-title">Store Credits</span>

            <?php
                get_template_part( 'template-parts/form-elements/whitebutton', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/my-ticket-icon.png',
                    'title' => 'My Tickets',
                ) );
            ?>
        </div>

        <hr />

        <span class="my-order-no-order">
            No credits available at this time
        </span>

    </div>
</main>

<?php get_footer(); ?>
