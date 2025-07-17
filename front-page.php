<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="homepage-container-1 global-page-wrapper">
        
        <div class="homepage-container-1-inner">
            <div class="homepage-header-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/header-image.png" />
            </div>
            
            <div class="frontpage-header-title-container-hero">
                <span class="homepage-header1">Tired of ineffective real estate campaigns? we've been there too</span>
                
                <div class="frontpage-header-title">
                    <span class="homepage-header-title1">Premium,&nbsp;</span>
                    <span class="homepage-header-title2">cost-effective marketing&nbsp;</span>
                    <span class="homepage-header-title3">direct to sellers.</span>              
                </div>
                    
                <span class="homepage-header-title4">We save your budget and your bandwidth with premium direct mail that drives immediate response.</span>
                
                <?php
                    get_template_part( 'template-parts/form-elements/button', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/Vector.svg',
                        'title' => 'See Mail Options',
                    ) );
                ?>
            </div>
        </div>

        <div class="homepage-grid-header">
            <?php
                get_template_part( 'template-parts/box', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/env-icon.svg',
                    'title' => 'Pick Your Mailer',
                    'description' => 'Choose a letter, postcard or greeting card that fits your style'
                ) );
            ?>
            <?php
                get_template_part( 'template-parts/box', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/list-icon.svg',
                    'title' => 'Upload Your List',
                    'description' => 'Easily upload a CSV or Excel file with your contacts.'
                ) );
            ?>
            <?php
                get_template_part( 'template-parts/box', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/flyarrow-icon.svg',
                    'title' => 'Send Your Campaign',
                    'description' => 'Hit send and we take care of the rest — printing to postage.'
                ) );
            ?>
        </div>

        <div class="homepage-campaign">
            <?php
                get_template_part( 'template-parts/form-elements/red-label', null, array(
                    'title' => 'Pick Your Mailer Type',
                ) );
            ?>
            <p>
                Marketing made easy for Real Estate Inverstors and Mortage Brokers - Letters,<br />
                Postcards, Real Handwritten Cards and Custom templates
            </p>

            <div class="homepage-grid-product">
                <?php
                    get_template_part( 'template-parts/product', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/letters-icon.png',
                        'title' => 'Letters',
                        'price' => '0.723',
                        'link' => site_url('/index.php/letters')
                    ) );
                ?>
                <?php
                    get_template_part( 'template-parts/product', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/postcards-icon.png',
                        'title' => 'Postcards',
                        'price' => '0.509',
                        'link' => site_url('/index.php/postcards/')
                    ) );
                ?>
                <?php
                    get_template_part( 'template-parts/product', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/handwritten-icon.png',
                        'title' => 'Handwritten Cards',
                        'price' => '1.051',
                        'link' => site_url('/index.php/handwritten-cards')
                    ) );
                ?>
                <?php
                    get_template_part( 'template-parts/product', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/custom-icon.png',
                        'title' => 'Custom Templates',
                        'price' => '1.051',
                        'link' => site_url('/index.php/custom-templates')
                    ) );
                ?>
            </div>
        </div>

        <div class="homepage-effortlessmail">
            <?php
                get_template_part( 'template-parts/form-elements/red-label', null, array(
                    'title' => 'Effortless Mail. Real Results.',
                ) );
            ?>

            <p>
                A smooth process that saves time and money.
            </p>

            <div class="homepage-grid-header-effrortlessmail">
                <?php
                    get_template_part( 'template-parts/box', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/env-icon.svg',
                        'title' => 'Budget-Friendly',
                        'description' => 'Yellow Letters offers top-quality direct mail at prices that fit your budget.'
                    ) );
                ?>
                <?php
                    get_template_part( 'template-parts/box', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/list-icon.svg',
                        'title' => 'Fast Dispatch',
                        'description' => 'Forget long waits - your mail goes out in 2-3 days.'
                    ) );
                ?>
                <?php
                    get_template_part( 'template-parts/box', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/flyarrow-icon.svg',
                        'title' => 'Consistent Communication',
                        'description' => 'We keep you in the loop from order to dispatch.'
                    ) );
                ?>
            </div>
        </div>

        <!-- <div class="homepage-container-1-inner inner2">
            <div class="homepage-header-image">
                <img src="<?php /* echo get_stylesheet_directory_uri(); */ ?>/public/external/header2.svg" />
            </div>
            
            <span class="homepage-header-title2b">Start Your Campaign Today</span>
            <span class="homepage-header-title4">Yellow Letters makes direct mail marketing quic and easy</span>
            
            <?php
                /* get_template_part( 'template-parts/form-elements/button', null, array(
                    'icon' => '',
                    'title' => 'Get Started',
                ) ); */
            ?>
        </div> -->

        <div class="homepage-concept1-header-image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/header2.svg" />
            <div class="campaign-wrapper">
                <span class="campaign-header-1">Start Your Campaign Today</span>
                <span class="campaign-header-2">Yellow Letters makes direct mail marketing quic and easy</span>
                
                <?php
                    get_template_part( 'template-parts/form-elements/button', null, array(
                        'icon' => '',
                        'title' => 'Get Started',
                    ) );
                ?>
            </div>
        </div>

        <div class="homepage-campaign homepage-testimony-div">
            <?php
                get_template_part( 'template-parts/form-elements/button', null, array(
                    'icon' => '',
                    'title' => 'Rate us',
                ) );
            ?>
            <?php
                get_template_part( 'template-parts/form-elements/red-label', null, array(
                    'title' => 'Smilling Customers',
                ) );
            ?>
            <div class="rating">
                <span class="rating-score">5.0</span>
                <span class="stars">★★★★★</span>
                <span class="divider">|</span>
                <span class="review-count">195 reviews</span>
            </div>
            <?php
                get_template_part( 'template-parts/testimonial', null, array(
                    'title' => 'Smilling Customers',
                ) );
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
