<?php
/* Template Name: Shop Concept 2 */
get_header();
?>

<main id="main" class="site-main">
    <div class="register-hero-background"></div>

    <div class="home-concept-2 global-page-wrapper">        
        
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
            <div class="frontpage-header-title">
                <span class="homepage-header-title1">Shop</span>                        
            </div>                
            <span class="homepage-header-title4">We save your budget and your bandwidth with premium direct mail that drives immediate response.</span>
            
            <?php
                get_template_part( 'template-parts/form-elements/button', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/Vector.svg',
                    'title' => 'See Mail Options',
                ) );
            ?>
        </div>

        <div class="shop-budget-friendly-tool">
            <img
                alt="Blog left mage"
                src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/blog-left.png"
                class="blog-left-image"
            />
            <img
                alt="Blog right mage"
                src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/blog-right.png"
                class="blog-right-image"
            />

            <?php
                get_template_part( 'template-parts/form-elements/red-label', null, array(
                    'title' => 'Our Prices Will Not Be Beat Upload Tool',
                ) );
            ?>

            <span>See More, Upload Smarter</span>

            <div class="homepage-grid-header-effrortlessmail shop-wrapper">
                <?php
                    get_template_part( 'template-parts/box', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/list-features.png',
                        'title' => 'LIST FEATURES',
                        'description' => 
                            '<ul class="box-list">
                                <li>Bulk Mail Savings</li>
                                <li>Merge Multiple Lists into a Single Campaign</li>
                                <li>Auto-Match List Headers</li>
                                <li>Assign Unique Tracking Numbers to Each List</li>
                                <li>Personalize Trust Names (e.g., "Ontiveros Trust 1997" to "Ontiveros Family")</li>
                            </ul>'
                    ) );
                ?>
                <?php
                    get_template_part( 'template-parts/box', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/ncoa-cass.png',
                        'title' => 'NCOA / CASS',
                        'description' => 
                            '<ul class="box-list">
                                <li>Standardizes mailing addresses</li>
                                <li>Verifies forwarding addresses</li>
                                <li>Ensures address accuracy and deliverability</li>
                                <li>Cleans up undeliverable records</li>
                                <li>Eliminates duplicate property addresses</li>
                            </ul>'
                    ) );
                ?>
            </div>
        </div>

        <div class="shop-campaign2">
            <?php
                get_template_part( 'template-parts/form-elements/red-label', null, array(
                    'title' => 'Pick your mailer',
                ) );
            ?>
            <p>
                Marketing made easy for Real Estate Inverstors and Mortage Brokers - Letters,<br />
                Postcards, Real Handwritten Cards and Custom templates
            </p>

            <div class="homepage-grid-product">
                <?php
                    get_template_part( 'template-parts/product-2', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/sealed_letter_and_paper.png',
                        'title' => 'Letters',
                        'price' => '0.723',
                        'link' => site_url('/index.php/letters')
                    ) );
                ?>
                <?php
                    get_template_part( 'template-parts/product-2', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/82450680_9969987.png',
                        'title' => 'Postcards',
                        'price' => '0.509',
                        'link' => site_url('/index.php/postcards/')
                    ) );
                ?>
                <?php
                    get_template_part( 'template-parts/product-2', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/envelope_on_table.png',
                        'title' => 'Handwritten Cards',
                        'price' => '1.051',
                        'link' => site_url('/index.php/handwritten-cards')
                    ) );
                ?>
                <?php
                    get_template_part( 'template-parts/product-2', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/envelope_and_stationery.png',
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
