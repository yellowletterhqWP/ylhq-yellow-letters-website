<?php
get_header();
?>

<main id="main" class="site-main">
    <div class="handwritten-page-container-1">
        
        <div class="handwritten-page-container-1-inner">
            <div class="handwritten-page-header-image cart-header-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/hero-bg.png" />
            </div>
            
            <div class="handwritten-page-header-title-container">
                <div class="handwritten-page-header-title">
                    <span class="handwritten-page-header-title1">Letters</span>                        
                </div>

                <span class="handwritten-page-header-title3">At Yellow Letters, we offer a variety of options to suit every budget, including windowed envelopes, trifold self-mailers, street view full window letters, unique envelopes, and invitation-style envelopes.
                </span>
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
                        'Quantity', '200-499', '500-999', '1000-2499', '2500-9999', '10000-∞'
                    ),
                    'rows' => array(
                        array('Price', '$1.033', '$0.923', '$0.733', '$0.713', '$0.613'),
                    )
                ));
            
                get_template_part( 'template-parts/form-elements/red-label', null, array(
                    'title' => 'Choose a Product',
                ) );
            ?>
            
            <div class="letters-product-radio">
                <?php
                get_template_part( 'template-parts/choose-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/check-letter.png',
                    'title' => 'Check Letter',
                    'id'    => 'check_letter',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/choose-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/letter-inside.png',
                    'title' => 'Letter Inside #10 Envelope',
                    'id'    => 'letter-inside',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/choose-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/envelope-letter.png',
                    'title' => 'A6 Envelope Letter - Invitation',
                    'id'    => 'a6-envelope-letter',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/choose-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/letter-inside-2.png',
                    'title' => 'Letter Inside Windowed Envelope',
                    'id'    => 'letter-inside-windowed-envelope',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/choose-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/postcards-icon.png',
                    'title' => 'Full View Letter',
                    'id'    => 'full-view-letter',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/choose-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/tri-fold.png',
                    'title' => 'Tri - Fold Letter',
                    'id'    => 'tir-fold-letter',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/choose-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/digital-greeting.png',
                    'title' => 'Digital Greeting Cards',
                    'id'    => 'digital-greeting-card',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/choose-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/digital-folded.png',
                    'title' => 'Digital Folded Notes',
                    'id'    => 'digital-folded-notes',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/choose-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/digital-folded.png',
                    'title' => 'Jumbo Letter',
                    'id'    => 'jumbo-letter',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/choose-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/letters-icon.png',
                    'title' => 'Sealed Letter',
                    'id'    => 'sealed-letter',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/choose-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/custom-icon.png',
                    'title' => 'All Templates',
                    'id'    => 'all-templates',
                    'name'  => 'template_product_choice'
                ) );
                ?>
            </div>

            <?php
            get_template_part( 'template-parts/form-elements/red-label', null, array(
                'title' => 'Choose By Template',
            ) );
            ?>
        <div class="category-browse">
            <div class="handwritten-page-radio1">
                <?php
                get_template_part( 'template-parts/form-elements/template-select', null, array(
                    'title' => 'Template Categories',
                    'id'    => 'template-categories',
                    'name'  => 'template_choice'
                ) );
                ?>
            </div>

            <hr>
            
            <div class="handwritten-category-grid category-grid">
          
                <?php
                    get_template_part( 'template-parts/form-elements/template-select', null, array(
                        'title' => 'All',
                        'id'    => 'category-all',
                        'name'  => 'category_choice',
                          'checked' => true
                    ) );

                    get_template_part( 'template-parts/form-elements/template-select', null, array(
                        'title' => 'Custom / Business',
                        'id'    => 'category-custom-business',
                        'name'  => 'category_choice'
                    ) );

                    get_template_part( 'template-parts/form-elements/template-select', null, array(
                        'title' => 'General Greetings',
                        'id'    => 'category-general-greetings',
                        'name'  => 'category_choice'
                    ) );

                    get_template_part( 'template-parts/form-elements/template-select', null, array(
                        'title' => 'Holiday / Seasonal',
                        'id'    => 'category-holiday-seasonal',
                        'name'  => 'category_choice'
                    ) );

                    get_template_part( 'template-parts/form-elements/template-select', null, array(
                        'title' => 'Christmas - Specific',
                        'id'    => 'category-christmas-specific',
                        'name'  => 'category_choice'
                    ) );
                ?>
            </div>

  <!-- Template Section -->
             <div class="handwritten-page-radio3 select-template-wrapper">
                    <div class="handwritten-page-radio1 template-select">
                        <?php
                        get_template_part('template-parts/form-elements/template-select', null, array(
                            'title' => 'Select Template',
                            'id'    => 'select-template',
                            'name'  => 'select_template'
                        ));
                        ?>
                  </div>

                <hr class="template-selection">

                <div class="template-options template-greeting" data-show-for="category-all,category-custom-business">
                    <?php
                    get_template_part('template-parts/selected-template', null, array(
                        'title' => 'New Custom Design Postcard ($65)',
                        'id'    => 'greeting',
                        'name'  => 'template_choice'
                    ));
                    ?>
                </div>

                <div class="template-options template-letter" data-show-for="category-all,category-general-greetings">
                    <?php
                    get_template_part('template-parts/selected-template', null, array(
                        'title' => 'Letter on File',
                        'id'    => 'folded',
                        'name'  => 'template_choice'
                    ));
                    ?>
                </div>
            </div>
       
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
                'description' => 'Please make sure the file format is CSV (XLS and XLSX are not accepted)*'
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
