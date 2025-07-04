<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="handwritten-page-container-1">
        
        <div class="handwritten-page-container-1-inner">
            <div class="handwritten-page-header-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/header-image.png" />
            </div>
            
            <div class="handwritten-page-header-title">
                <span class="handwritten-page-header-title1">Handwritten</span>                        
                <span class="handwritten-page-header-title2">Cards</span>                      
            </div>

            <span class="handwritten-page-header-title3">Handwritten cards often double postcard response rates, 
                allowing you to tell your story and showcase your process. We offer options for every budget, 
                including windowed envelopes, trifold self-mailers, and invitation envelopes.
            </span>
        </div>

        <div class="handwritten-page-campaign">
            <?php
                get_template_part( 'template-parts/red-label', null, array(
                    'title' => 'Pricing',
                ) );
            ?>
            <?php
                get_template_part( 'template-parts/table', null, array(
                    'title' => 'Pricing',
                ) );
            ?>
            <?php
                get_template_part( 'template-parts/red-label', null, array(
                    'title' => 'Choose a Product',
                ) );
            ?>


            <div class="handwritten-page-grid-product">
                <?php
                    get_template_part( 'template-parts/product', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/letters-icon.svg',
                        'title' => 'Letters',
                        'price' => '0.723',
                        'link' => site_url('/index.php/letters')
                    ) );
                ?>
                <?php
                    get_template_part( 'template-parts/product', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/postcards-icon.svg',
                        'title' => 'Postcards',
                        'price' => '0.509',
                        'link' => site_url('/index.php/postcards/')
                    ) );
                ?>
                <?php
                    get_template_part( 'template-parts/product', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/handwritten-icon.svg',
                        'title' => 'Handwritten Cards',
                        'price' => '1.051',
                        'link' => site_url('/index.php/handwritten-cards')
                    ) );
                ?>
                <?php
                    get_template_part( 'template-parts/product', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/custom-icon.svg',
                        'title' => 'Custom Templates',
                        'price' => '1.051',
                        'link' => site_url('/index.php/custom-templates')
                    ) );
                ?>
            </div>
        </div>

        <div class="handwritten-page-container-1-inner inner2">
            <div class="handwritten-page-header-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/header2.svg" />
            </div>
            
            <span class="handwritten-page-header-title2b">Start Your Campaign Today</span>
            <span class="handwritten-page-header-title4">Yellow Letters makes direct mail marketing quic and easy</span>
            
            <?php
                get_template_part( 'template-parts/button', null, array(
                    'icon' => '',
                    'title' => 'Get Started',
                ) );
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
