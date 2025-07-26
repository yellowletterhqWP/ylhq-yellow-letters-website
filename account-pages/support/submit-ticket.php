<?php
/* Template Name: Tickets */
get_header();
?>

<main id="main" class="site-main">
    <div class="register-hero-background"></div>

    <div class="submit-ticket-wrapper global-page-wrapper">        
        
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

        <div class="letters-iteration-page-header-title-container">
            <span class="handwritten-page-header-title1">My Account</span>
            <span class="handwritten-page-header-title3">Where Your Information and Orders Meet.</span>
        </div>

        <div class="my-order-page-content">
            <?php
                get_template_part('template-parts/form-elements/breadcrumb', null, [
                'items' => [
                    ['label' => 'Support', 'url' => site_url('/my-account/?section=support')],
                    ['label' => 'My Tickets', 'url' => site_url('/my-account/?section=tickets')],
                    ['label' => 'Submit Ticket']
                ]
                ]);
            ?>

            <span class="my-account-content-title">Submit Tickets</span>

            <div class="handwritten-page-divide2 header-button-tab">
            <?php
                get_template_part( 'template-parts/form-elements/whitebutton', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/my-ticket-icon2.png',
                    'title' => 'My Tickets',
                    'type' => 'link',
                    'url' => site_url('/my-account/?section=support/tickets'),
                    'set-active' => true
                ) );
                get_template_part( 'template-parts/form-elements/whitebutton', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/privacy-icon.png',
                    'title' => 'Privacy',
                    'type' => 'link',
                    'url' => site_url('/my-account/?section=privacy')
                ) );
            ?>
            </div>
        </div>

        <hr />

        <div class="handwritten-page-forms submit-ticket-form">
            <?php
                get_template_part('template-parts/form-elements/inputbox', null, [
                    'id' => 'subject',
                    'label' => 'Subject',
                    'value' => 'Enter Subject',
                    'required' => false,
                ]);

                get_template_part('template-parts/form-elements/textarea', null, [
                    'id' => 'description',
                    'label' => 'Description',
                    'required' => false,
                    'version' => 'blue-header'
                ]);
            ?>

            <div class="handwritten-page-divide2">
                <?php
                    get_template_part('template-parts/form-elements/selectbox', null, [
                        'id' => 'department',
                        'label' => 'Department',
                        'required' => false,
                        'placeholder' => 'Select Department',
                        'options' => [
                            ['value'=>'dep1', 'label'=>'Department 1'],
                            ['value'=>'dep2', 'label'=>'Department 2'],
                        ]
                    ]);

                    get_template_part('template-parts/form-elements/selectbox', null, [
                        'id' => 'public_private',
                        'label' => 'Public / Private',
                        'required' => false,
                        'placeholder' => 'Select',
                        'options' => [
                            ['value'=>'public', 'label'=>'Public'],
                            ['value'=>'private', 'label'=>'Private'],
                        ]
                    ]);
                ?>
            </div>

            <?php
                get_template_part('template-parts/form-elements/upload-box', null, [
                    'label' => 'Drag and drop your files here',
                    'placeholder' => 'You can upload up to 2 files (Max 2MB each)',
                    'ext_list' => '.jpg, .jpeg, .png, .gif, .pdf, .doc, .docx, .ppt, .pptx, .pps, .ppsx, .odt, .xls, .xlsx, .mp3, .m4a, .ogg, .wav, .mp4, .m4v, .mov, .wmv, .avi, .mpg, .ogv, .3gp, .3g2, .zip, .csv',
                    'type' => 'white',
                ]);
            ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>
