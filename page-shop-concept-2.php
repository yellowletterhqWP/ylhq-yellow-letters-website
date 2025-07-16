<?php
/* Template Name: Shop Concept 2 */
get_header();
?>

<main id="main" class="site-main">
    <div class="register-hero-background"></div>

    <div class="shop-concept-2 global-page-wrapper">        
        
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

        <div class="home-concept2-header-title-container">
            <span class="hero-header-title-blue">Shop</span>
            <span class="hero-header-desc-black">We save your budget and your bandwidth with premium direct mail that drives immediate response.</span>
            
            <?php
                get_template_part( 'template-parts/form-elements/button', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/Vector.svg',
                    'title' => 'See Mail Options',
                ) );
            ?>
        </div>

        <div class="shop-concept-2-budget-friendly">
            <div class="shop-concept-2-budget-friendly-header">
                <?php
                    get_template_part( 'template-parts/form-elements/red-label', null, array(
                        'title' => "Budget-Friendly Upload Tool",
                    ) );
                ?>
                <span class="help-message">Save More, Upload Smarter</span>
            </div>

            <img
                alt="RightImage6672"
                src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/blog-right.png"
                class="register-right-image"
            />
            <img
                alt="LeftImage6672"
                src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/blog-left.png"
                class="register-left-image"
            />

            <div class="shop-concept-2-div">
                <?php
                get_template_part( 'template-parts/box', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/env-icon.svg',
                    'title' => 'List Features',
                    'description' => 'Choose a letter, postcard or greeting card that fits your style'
                ) );
                ?>
                <?php
                    get_template_part( 'template-parts/box', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/list-icon.svg',
                        'title' => 'NCOA / CASS',
                        'description' => 'Choose a letter, postcard or greeting card that fits your style'
                    ) );
                ?>
            </div>
        </div>

        <div class="shop-concept2-pict-your-mailer">
            <div class="shop-concept-2-budget-friendly-header">
                <?php
                    get_template_part( 'template-parts/form-elements/red-label', null, array(
                        'title' => "Pick Your Mailer Type",
                    ) );
                ?>
                <span class="help-message">Marketing made easy for Real Estate Inverstors and Mortage Brokers - Letters,<br />
                Postcards, Real Handwritten Cards and Custom templates</span>
            </div>

            <div class="shop-concept-2-div-product">
                <?php
                    get_template_part( 'template-parts/product-2', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/letters-icon.png',
                        'title' => 'Letters',
                        'price' => '0.723',
                        'link' => site_url('/index.php/letters')
                    ) );
                ?>
                <?php
                    get_template_part( 'template-parts/product-2', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/postcards-icon.png',
                        'title' => 'Postcards',
                        'price' => '0.509',
                        'link' => site_url('/index.php/postcards/')
                    ) );
                ?>
                <?php
                    get_template_part( 'template-parts/product-2', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/handwritten-icon.png',
                        'title' => 'Handwritten Cards',
                        'price' => '1.051',
                        'link' => site_url('/index.php/handwritten-cards')
                    ) );
                ?>
                <?php
                    get_template_part( 'template-parts/product-2', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/custom-icon.png',
                        'title' => 'Custom Templates',
                        'price' => '1.051',
                        'link' => site_url('/index.php/custom-templates')
                    ) );
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
