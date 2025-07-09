<?php 
/* Template Name: My Account */

get_header();
?>

<main id="main" class="site-main">

  <div class="register-hero-background"></div>

  <div class="custom-register-wrapper">  

    <h1>My Account</h1>
    <span class="register-header-desc">Create an Account and Explore Yellow Letters’ Benefits.</span>
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

    <div class="homepage-grid-header grid-box-3">
        <?php
            get_template_part( 'template-parts/box', null, array(
                'icon' => get_stylesheet_directory_uri() . '/public/external/env-icon.svg',
                'title' => 'My Orders',
                'description' => 'Your Orders, Just a Click Away.'
            ) );
        
            get_template_part( 'template-parts/box', null, array(
                'icon' => get_stylesheet_directory_uri() . '/public/external/list-icon.svg',
                'title' => 'My Account Details',
                'description' => 'Update Your Account Details Anytime'
            ) );
        
            get_template_part( 'template-parts/box', null, array(
                'icon' => get_stylesheet_directory_uri() . '/public/external/flyarrow-icon.svg',
                'title' => 'Support',
                'description' => "Support. That's Fast, Friendly, and Reliable."
            ) );
        
            get_template_part( 'template-parts/box', null, array(
                'icon' => get_stylesheet_directory_uri() . '/public/external/env-icon.svg',
                'title' => 'Create a Zap - Coming Soon!',
                'description' => 'Stay Tuned - Exciting Things Ahead!'
            ) );
        
            get_template_part( 'template-parts/box', null, array(
                'icon' => get_stylesheet_directory_uri() . '/public/external/list-icon.svg',
                'title' => 'Store Credits',
                'description' => 'Use Your Store Credit on Your Next Purchase.'
            ) );
        
            get_template_part( 'template-parts/box', null, array(
                'icon' => get_stylesheet_directory_uri() . '/public/external/flyarrow-icon.svg',
                'title' => 'Other Options',
                'description' => "Explore Other Options Available to You."
            ) );
        ?>
        <div></div>
        <div></div>
        <div class="my-account-logout-button">
        <?php
            get_template_part( 'template-parts/button', null, array(
                'icon' => get_stylesheet_directory_uri() . '/public/external/logout.svg',
                'title' => 'Logout',
            ) );
        ?>
        </div>
    </div>

</main>

<?php get_footer(); ?>
