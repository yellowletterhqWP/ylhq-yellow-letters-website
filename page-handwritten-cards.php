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

        <div class="handwritten-page-radio">
            <?php
                get_template_part( 'template-parts/red-label', null, array(
                    'title' => 'Pricing',
                ) );
            
                get_template_part( 'template-parts/table', null, array(
                    //'title' => 'Pricing',
                ) );
            
                get_template_part( 'template-parts/red-label', null, array(
                    'title' => 'Choose a Product',
                ) );
            ?>
            
            <div class="handwritten-radio1">
                <div class="handwritten-page-radio1">
                <?php
                get_template_part( 'template-parts/softblue-radio', null, array(
                    'title' => 'Choose All Templates',
                    'id'    => 'choose-all-templates',
                    'name'  => 'template_choice'
                ) );
                ?>
                </div>

                <div class="handwritten-page-radio2">
                <?php
                get_template_part( 'template-parts/radio-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/letters-icon.svg',
                    'title' => 'Handwritten Greeting Cards',
                    'id'    => 'greeting',
                    'name'  => 'template_choice'
                ) );

                get_template_part( 'template-parts/radio-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/postcards-icon.svg',
                    'title' => 'Handwritten Folded Notes',
                    'id'    => 'folded',
                    'name'  => 'template_choice'
                ) );
                ?>
                </div>
            </div>

            <?php
            get_template_part( 'template-parts/red-label', null, array(
                'title' => 'Choose a Category',
            ) );
            ?>

            <div class="handwritten-category-grid">
                <?php
                    get_template_part( 'template-parts/softblue-radio', null, array(
                        'title' => 'All',
                        'id'    => 'category-all',
                        'name'  => 'category_choice'
                    ) );

                    get_template_part( 'template-parts/softblue-radio', null, array(
                        'title' => 'Custom / Business',
                        'id'    => 'category-custom-business',
                        'name'  => 'category_choice'
                    ) );

                    get_template_part( 'template-parts/softblue-radio', null, array(
                        'title' => 'General Greetings',
                        'id'    => 'category-general-greetings',
                        'name'  => 'category_choice'
                    ) );

                    get_template_part( 'template-parts/softblue-radio', null, array(
                        'title' => 'Holiday / Seasonal',
                        'id'    => 'category-holiday-seasonal',
                        'name'  => 'category_choice'
                    ) );

                    get_template_part( 'template-parts/softblue-radio', null, array(
                        'title' => 'Christmas - Specific',
                        'id'    => 'category-christmas-specific',
                        'name'  => 'category_choice'
                    ) );
                ?>
            </div>

            <?php
            get_template_part( 'template-parts/red-label', null, array(
                'title' => 'Choose a Template',
            ) );
            ?>
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
