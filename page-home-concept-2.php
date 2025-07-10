<?php
/* Template Name: Home Concept 2 */
get_header();
?>

<main id="main" class="site-main">
    <div class="register-hero-background"></div>

    <div class="home-concept-2 letters-page-page-template">        
        
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
            <span class="home-concept2-header1">Tired of ineffective real estate campaigns? we've been there too</span>
            <div class="homepage-header-title-group">
                <div class="homepage-header-title">
                    <span class="homepage-header-title1">Premium,</span>                        
                    <span class="homepage-header-title2">cost-effective marketing</span>                      
                </div>
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

        <div class="homepage-concept2-grid-header">
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
                    'title' => 'Pick Your Mailer',
                    'description' => 'Choose a letter, postcard or greeting card that fits your style'
                ) );
            ?>
            <?php
                get_template_part( 'template-parts/box', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/flyarrow-icon.svg',
                    'title' => 'Pick Your Mailer',
                    'description' => 'Choose a letter, postcard or greeting card that fits your style'
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

        <div class="handwritten-page-radio">
            <?php
                get_template_part( 'template-parts/form-elements/red-label', null, array(
                    'title' => 'Pricing',
                ) );
            
                get_template_part('template-parts/form-elements/table', null, array(
                    'title' => 'Letters',
                    'minimum' => '200/minimum',
                    'headers' => array(
                        'Quantity', '200-499', '500-999', '1000-2999', '2500-9999', '10000-∞'
                    ),
                    'rows' => array(
                        array('Price', '$1.033', '$0.923', '$0.733', '$0.713', '$0.633'),
                        /* array('Printed message only', '$0.831', '$0.781', '$0.731', '$0.711', '$0.691', '$0.651'), */
                    )
                ));
            
                get_template_part( 'template-parts/form-elements/red-label', null, array(
                    'title' => 'Choose a Product',
                ) );
            ?>
            
            <div class="letters-product-radio">
                <?php
                get_template_part( 'template-parts/radio-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/check-letter.png',
                    'title' => 'Check Letter',
                    'id'    => 'check_letter',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/radio-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/letter-inside.png',
                    'title' => 'Letter Inside #10 Envelope',
                    'id'    => 'letter-inside',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/radio-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/envelope-letter.png',
                    'title' => 'A6 Envelope Letter - Invitation',
                    'id'    => 'a6-envelope-letter',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/radio-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/letter-inside-2.png',
                    'title' => 'Letter Inside Windowed Envelope',
                    'id'    => 'letter-inside-windowed-envelope',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/radio-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/postcards-icon.png',
                    'title' => 'Full View Letter',
                    'id'    => 'full-view-letter',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/radio-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/tri-fold.png',
                    'title' => 'Tri - Fold Letter',
                    'id'    => 'tir-fold-letter',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/radio-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/digital-greeting.png',
                    'title' => 'Digital Greeting Cards',
                    'id'    => 'digital-greeting-card',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/radio-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/digital-folded.png',
                    'title' => 'Digital Folded Notes',
                    'id'    => 'digital-folded-notes',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/radio-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/digital-folded.png',
                    'title' => 'Jumbo Letter',
                    'id'    => 'jumbo-letter',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/radio-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/letters-icon.png',
                    'title' => 'Sealed Letter',
                    'id'    => 'sealed-letter',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/radio-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/custom-icon.png',
                    'title' => 'All Templates',
                    'id'    => 'all-templates',
                    'name'  => 'template_product_choice'
                ) );
                ?>
            </div>

            <span class="blue-simple-title">Template Categories</span>

            <?php
            get_template_part('template-parts/form-elements/softblue-radio-group', null, array(
                'id' => 'category-choice',
                'name' => 'category_choice',
                'selected' => 'custom',
                'options' => array(
                    'all' => 'All',
                    'custom' => 'Custom / Business',
                    'greetings' => 'General Greetings',
                    'holiday' => 'Holiday / Seasonal',
                    'christmas' => 'Christmas - Specific'
                )
            ));
            ?>

            <span class="blue-simple-title">Select Templates</span>

            <hr />

            <div class="handwritten-page-radio3">
                    <?php
                    get_template_part( 'template-parts/radio-templates-simple', null, array(
                        'icon' => '',
                        'title' => 'New Custom Design Postcard ($65)',
                        'id'    => 'greeting',
                        'name'  => 'template_product_choice'
                    ) );

                    get_template_part( 'template-parts/radio-templates-simple', null, array(
                        'icon' => '',
                        'title' => 'Letter on File',
                        'id'    => 'folded',
                        'name'  => 'template_product_choice'
                    ) );
                    ?>
                </div>
        </div>

        <div class="handwritten-page-forms">
            <div class="letters-iteration-page-divide-left">
                <div class="handwritten-page-form-mail-info">
                <?php
                    get_template_part('template-parts/form-elements/selectbox', null, [
                        'id' => 'easy-offer-system',
                        'label' => 'Easy Offer System?',
                        'required' => true,
                        'placeholder' => '',
                        'selected' => 'yes',
                        'options' => [
                            ['value'=>'yes', 'label'=>'Yes (add 3 cents each)'],
                            ['value'=>'no', 'label'=>'No'],
                        ]
                    ]);
                ?>
                </div>

                <?php
                    get_template_part('template-parts/form-elements/checkbox', null, array(
                        'name' => 'only_land',
                        'label' => 'Only Land',
                        'checked' => false
                    ));

                    get_template_part('template-parts/form-elements/checkbox', null, array(
                        'name' => 'show_percentages',
                        'label' => 'I want to see all the percentages',
                        'checked' => true
                    ));

                    get_template_part('template-parts/form-elements/checkbox', null, array(
                        'name' => 'my_own_offer_ammount',
                        'label' => 'I have my own offer amounts',
                        'checked' => false
                    ));

                    get_template_part('template-parts/form-elements/checkbox', null, array(
                        'name' => 'already_know_my_percentage',
                        'label' => 'I already know my percentage',
                        'checked' => true
                    ));
                ?>
            </div>

            <hr />

            <div class="handwritten-page-divide2">
                <div class="handwritten-page-form-mail-info">
                <?php
                    get_template_part('template-parts/form-elements/selectbox', null, [
                        'id' => 'list_undelivered',
                        'label' => 'Receive a list of undelivered mail (pre-return)',
                        'required' => false,
                        'placeholder' => '',
                        'selected' => 'yes',
                        'options' => [
                            ['value'=>'yes', 'label'=>'Yes ($19)'],
                            ['value'=>'no', 'label'=>'No'],
                        ]
                    ]);

                    get_template_part('template-parts/form-elements/info-icon', null, [
                        'text' => 'We send your mail to the post office on this day.'
                    ]);
                ?>
                </div>

                <?php
                    get_template_part('template-parts/form-elements/selectbox', null, [
                        'id' => 'mail_return',
                        'label' => 'Get your return mail list automatically in 7 days?',
                        'required' => false,
                        'placeholder' => '',
                        'selected' => 'yes',
                        'options' => [
                            ['value'=>'yes', 'label'=>'Yes ($49)'],
                            ['value'=>'no', 'label'=>'No'],
                        ]
                    ]);
                ?>
            </div>

            <hr />

            <div class="handwritten-page-divide2">
                <div class="handwritten-page-form-mail-info">
                <?php
                    get_template_part('template-parts/form-elements/selectbox', null, [
                        'id' => 'mail_pick_day',
                        'label' => 'Pick a day for your mail delivery to the post office.',
                        'required' => true,
                        'placeholder' => '',
                        'selected' => 'asap',
                        'options' => [
                            ['value'=>'asap', 'label'=>'ASAP'],
                        ]
                    ]);
                    ?>
                </div>
                <?php
                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'date_begin',
                        'label' => 'Pick d date for your campaign to begin',
                        'placeholder' => '05/07/2025',
                        'required' => true,
                        'extra_class' => 'date'
                    ]);
                ?>
            </div>

            <hr />

            <div class="handwritten-page-divide2">
                <div class="handwritten-page-form-mail-info">
                    <?php
                        get_template_part('template-parts/form-elements/selectbox', null, [
                            'id' => 'mail_to_send',
                            'label' => 'How much mail do you want to send out?',
                            'required' => true,
                            'placeholder' => '',
                            'selected' => 'mail_at_once',
                            'options' => [
                                ['value'=>'mail_at_once', 'label'=>'Mail at once'],
                                ['value'=>'mail_per_week', 'label'=>'Mail per week'],
                            ]
                        ]);
                    ?>
                </div>

                <?php
                get_template_part('template-parts/form-elements/inputbox', null, [
                    'id' => 'order_name',
                    'label' => 'Your Order Name',
                    'placeholder' => 'Enter your order name...',
                    'required' => false
                ]);
                ?>
            </div>

            <hr />
            
            <?php
            get_template_part('template-parts/form-elements/textarea', null, [
                'id' => 'order_notes',
                'label' => 'Order Notes',
                'placeholder' => 'Please include all special instructions for your order here, if special requests are not included, it can take another 24hrs to get a proof to you.',
                'required' => true
            ]);

            get_template_part('template-parts/form-elements/upload-box', null, [
                'label' => 'Drag and drop your files needed: list, picture, logo or example of a preferred mail piece',
            ]);
            ?>

            <hr />
            
            <div class="handwritten-page-last">
            <?php
            get_template_part('template-parts/form-elements/number-input', null, [
                'id' => 'pieces',
                'label' => 'How many pieces?',
                'required' => true,
                'min' => 200,
                'max' => 10000,
                'value' => 200
            ]);
            get_template_part( 'template-parts/form-elements/button', null, array(
                'icon' => '',
                'title' => 'Add to cart',
            ) );
            ?>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>
