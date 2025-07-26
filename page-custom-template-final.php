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
                    <span class="handwritten-page-header-title1">Custom Template</span>                        
                </div>

                <span class="handwritten-page-header-title3 custom-template-subtitle">Ready to create your custom template? Use this page to prepare for future orders.
                </span>
            </div>
        </div>

        <div class="handwritten-page-radio">
            <?php
                // get_template_part( 'template-parts/form-elements/red-label', null, array(
                //     'title' => 'Pricing',
                // ) );
            
                // get_template_part('template-parts/form-elements/table', null, array(
                //     'title' => 'Letters',
                //     'minimum' => '200/minimum',
                //     'headers' => array(
                //         'Quantity', '200-499', '500-999', '1000-2499', '2500-9999', '10000-∞'
                //     ),
                //     'rows' => array(
                //         array('Price', '$1.033', '$0.923', '$0.733', '$0.713', '$0.613'),
                //     )
                // ));
            
                get_template_part( 'template-parts/form-elements/red-label', null, array(
                    'title' => 'Choose a Product',
                ) );
            ?>
            
           <h2 class="product-subtitle">Have your list? Go to our <a href="<?php echo get_site_url();?>/shop" target="_blank">Shop Page</a> now </h2>
            <div class="letters-product-radio">
                <?php
                get_template_part( 'template-parts/choose-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/first-class.png',
                    'title' => 'Letter',
                    'id'    => 'letter',
                    'name'  => 'template_product_choice'
                ) );

                get_template_part( 'template-parts/choose-product', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/first-class-half-page.png',
                    'title' => 'Postcard',
                    'id'    => 'postcard',
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
            <h2 class="form-heading">Create your Custom Template</h2>

 <?php
                    get_template_part('template-parts/form-elements/selectbox', null, [
                        'id' => 'letter',
                        'label' => 'Letter',
                        'required' => false,
                        'placeholder' => 'Choose a Letter type',
                        'selected' => 'yes',
                        'options' => [
                            ['value'=>'yes', 'label'=>'Yes ($49)'],
                            ['value'=>'no', 'label'=>'No'],
                        ]
                    ]);
                ?>
            <hr />

            <div class="handwritten-page-divide2">
                <div class="handwritten-page-form-mail-info">
                <?php
                    get_template_part('template-parts/form-elements/selectbox', null, [
                        'id' => 'template',
                        'label' => 'Template',
                        'required' => false,
                        'placeholder' => 'Choose a template',
                        'selected' => 'asap',
                        'options' => [
                            ['value'=>'asap', 'label'=>'ASAP'],
                        ]
                    ]);
                    ?>
                </div>
                <?php
                    get_template_part('template-parts/form-elements/selectbox', null, [
                        'id' => 'font',
                        'label' => 'Font',
                        'required' => false,
                        'placeholder' => 'Choose a font',
                        'selected' => 'arial',
                         'options' => [
                            ['value'=>'arial', 'label'=>'Arial'],
                        ]
                    ]);
                ?>
            </div>

            <hr />

            <div class="handwritten-page-divide2">
                <div class="handwritten-page-form-mail-info">
                    <?php
                        get_template_part('template-parts/form-elements/selectbox', null, [
                            'id' => 'font_color',
                            'label' => 'Font Color',
                            'required' => false,
                            'placeholder' => 'Choose a font color',
                            'selected' => 'blue',
                            'options' => [
                                ['value'=>'blue', 'label'=>'Blue'],
                                ['value'=>'yellow', 'label'=>'Yellow'],
                            ]
                        ]);
                    ?>
                </div>

                <?php
                        get_template_part('template-parts/form-elements/selectbox', null, [
                            'id' => 'background',
                            'label' => 'Background',
                            'required' => false,
                            'placeholder' => 'Choose a background',
                            'selected' => 'blue',
                            'options' => [
                                ['value'=>'blue', 'label'=>'Blue'],
                                ['value'=>'yellow', 'label'=>'Yellow'],
                            ]
                        ]);
                    ?>
            </div>

            
             <?php
                get_template_part('template-parts/form-elements/inputbox', null, [
                    'id' => 'template_name',
                    'label' => 'Template Name',
                    'placeholder' => 'What is your Template Name?',
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
            
            <div class="handwritten-page-last custom-tenplate-last">
            <?php
            // get_template_part( 'template-parts/form-elements/button', null, array(
            //     'icon' => '',
            //     'title' => 'Discard Changes',
            // ) );

            get_template_part( 'template-parts/form-elements/button', null, array(
                'icon' => '',
                'title' => 'Add to Cart',
            ) );
            ?>
            </div>

        </div>
    </div>

</main>

<?php get_footer(); ?>
