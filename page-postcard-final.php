<?php
get_header();
?>

<main id="main" class="site-main">
    <div class="handwritten-page-container-1">
        
        <div class="handwritten-page-container-1-inner">
            <div class="handwritten-page-header-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/hero-bg.png" />
            </div>
            
            <div class="handwritten-page-header-title-container">
                <div class="handwritten-page-header-title">
                    <span class="handwritten-page-header-title1">Postcards</span>                        
                </div>

                <span class="handwritten-page-header-title3">Postcards are a cost-effective way to share your message! Choose a template, upload your list, and add details in the order notes. Need something custom? We’ll recreate it. You’ll get a proof within 24 hours to approve before we mail.
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
                    'icon' => get_stylesheet_directory_uri() . '/public/external/first-class.png',
                    'title' => 'First Class Postcard (4.25 x 5.5)',
                    'id'    => 'first_class',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/choose-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/first-class-half-page.png',
                    'title' => 'First Class Half Page Postcard (8.5 x 5.5)',
                    'id'    => 'first-class-half-page',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/choose-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/handwritten-half-page.png',
                    'title' => 'Handwritten Half Page Postcard (8.5 x 5.5)',
                    'id'    => 'handwritten-half-page',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/choose-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/all-templates.png',
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
                        'title' => 'Bulk Mailing',
                        'id'    => 'category-custom-business',
                        'name'  => 'category_choice'
                    ) );

                    get_template_part( 'template-parts/form-elements/template-select', null, array(
                        'title' => 'Fresh Listing',
                        'id'    => 'category-general-greetings',
                        'name'  => 'category_choice'
                    ) );

                    get_template_part( 'template-parts/form-elements/template-select', null, array(
                        'title' => 'Urgent Mailers',
                        'id'    => 'category-holiday-seasonal',
                        'name'  => 'category_choice'
                    ) );

                    get_template_part( 'template-parts/form-elements/template-select', null, array(
                        'title' => 'Seasonal Greetings',
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
