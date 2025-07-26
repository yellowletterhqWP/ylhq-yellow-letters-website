<?php
/* Template Name: Tickets */
get_header();
?>

<main id="main" class="site-main">
    <div class="register-hero-background"></div>

    <div class="page-support-wrapper global-page-wrapper">        
        
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
                    ['label' => 'Support', 'url' => site_url('/my-account/?section=support')],
                    ['label' => 'My Tickets']
                ]
                ]);
            ?>

            <span class="my-account-content-title">My Tickets</span>

            <div class="handwritten-page-divide2">
            <?php
                get_template_part( 'template-parts/form-elements/button', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/my-ticket-icon2.png',
                    'title' => 'My Tickets',
                    'type' => 'link',
                    'url' => site_url('/my-account/?section=support/tickets')
                ) );
                get_template_part( 'template-parts/form-elements/whitebutton', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/privacy-icon.png',
                    'title' => 'Privacy',
                    'type' => 'link',
                    'url' => site_url('/my-account/?section=privacy')
                ) );
            ?>
            </div>
        </div>

        <hr />

        <span class="my-order-no-order">
            You haven’t submitted a ticket yet.&nbsp;
            <a href="<?php echo site_url('/my-account/?section=support/submit-ticket'); ?>">Click here to submit your first ticket.</a>
        </span>

    </div>
</main>

<?php get_footer(); ?>
