<?php
/* Template Name: Handwritten Cards Iteration 1 */
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
                    <span class="handwritten-page-header-title1">Handwritten</span>                        
                    <span class="handwritten-page-header-title2">Cards</span>                      
                </div>

                <span class="handwritten-page-header-title3">Handwritten cards often double postcard response rates, 
                    allowing you to tell your story and showcase your process. We offer options for every budget, 
                    including windowed envelopes, trifold self-mailers, and invitation envelopes.
                </span>
            </div>
        </div>

        <div class="handwritten-page-radio">
            <?php
                get_template_part( 'template-parts/form-elements/red-label', null, array(
                    'title' => 'Pricing',
                ) );
            
                get_template_part('template-parts/form-elements/table', null, array(
                    'title' => 'Handwritten Cards',
                    'minimum' => '200/minimum',
                    'headers' => array(
                        'Quantity', '200-499', '500-999', '1000-2999', '3000-4999', '5000-9999', '10000-∞'
                    ),
                    'rows' => array(
                        array('Cursive writing - price per mailer', '$1.371', '$1.331', '$1.151', '$1.131', '$1.111', '$1.051'),
                        /* array('Printed message only', '$0.831', '$0.781', '$0.731', '$0.711', '$0.691', '$0.651'), */
                    )
                ));
            
                get_template_part( 'template-parts/form-elements/red-label', null, array(
                    'title' => 'Choose a Product',
                ) );
            ?>
            
            <div class="handwritten-radio1">

                <div class="handwritten-page-radio2 choose-product">
                <?php
                get_template_part( 'template-parts/choose-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/letters-icon.png',
                    'title' => 'Handwritten Greeting Cards',
                    'id'    => 'greeting',
                    'name'  => 'template_choice'
                ) );

                get_template_part( 'template-parts/choose-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/postcards-icon.png',
                    'title' => 'Handwritten Folded Notes',
                    'id'    => 'folded',
                    'name'  => 'template_choice'
                ) );
                ?>
                </div>
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
            
            <div class="handwritten-category-grid category-grid ">
          
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
            <div class="handwritten-page-forms1">
                <?php
                get_template_part('template-parts/segmented-radio', null, [
                    'name' => 'style_choice',
                    'selected' => 'C',
                    'options' => [
                        ['value'=>'A', 'label'=>'Style A'],
                        ['value'=>'B', 'label'=>'Style B'],
                        ['value'=>'C', 'label'=>'Style C'],
                        ['value'=>'D', 'label'=>'Style D'],
                        ['value'=>'E', 'label'=>'Style E'],
                    ]
                ]);
                ?>
            </div>

            <?php
            get_template_part('template-parts/form-elements/textarea', null, [
                'id' => 'message',
                'label' => 'Message',
                'placeholder' => 'Hey (FirstName),I am very interested in (Property Address) and I would like to make you a cash offer. I was hoping you would have time to discuss this as I can be reached anytime at (Phone), Best Name',
                'required' => true
            ]);
            ?>

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
                    get_template_part('template-parts/form-elements/helper', null, [
                        'text' => 'Handwritten products are ready in 5 days after proof approval.'
                    ]);
                    ?>
                </div>
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

            <hr />

            <?php
            get_template_part('template-parts/form-elements/inputbox', null, [
                'id' => 'order_name',
                'label' => 'Your Order Name',
                'placeholder' => 'Enter your order name...',
                'required' => false
            ]);
            ?>

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
