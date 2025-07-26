<?php
/* Template Name: Tickets */
get_header();
?>

<main id="main" class="site-main">
    <div class="register-hero-background"></div>

    <div class="other-options-wrapper global-page-wrapper">
        
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
                    ['label' => 'My Account', 'url' => site_url('/my-account')],
                    ['label' => 'Other Options']
                ]
                ]);
            ?>

            <span class="my-account-content-title">Other Options</span>
            <span class="empty-space"></span>

        </div>

        <hr />

        <div class="handwritten-page-forms other-options-form">

            <div class="handwritten-page-divide2 other-options-div">
                <span class="my-account-content-title">Subscriptions</span>
                <?php
                    get_template_part( 'template-parts/form-elements/button', null, array(
                        'icon' => get_stylesheet_directory_uri() . '/public/external/Vector.svg',
                        'title' => 'Browse Mail Options',
                    ) );
                ?>
            </div>
            <span class="subscriptions-message">You don't have any active subscriptions.</span>

            <hr />

            <div class="calendar-container">
                <div class="calendar-header">
                    <span class="my-account-content-title">YellowLetters Calendar</span>
                    <div class="calendar-controls">
                    <button id="prev-month">&lt; <span id="month-label"></span></button>
                    <button class="google-sync">
                        <img src="https://www.google.com/favicon.ico" alt="Google" />
                        Sync with Google
                    </button>
                    </div>
                </div>

                <table class="calendar-table">
                    <thead>
                    <tr>
                        <th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th>
                        <th>Thu</th><th>Fri</th><th>Sat</th>
                    </tr>
                    </thead>
                    <tbody id="calendar-body">
                    <!-- JS will fill in -->
                    </tbody>
                </table>
            </div>

            <hr />
            <span class="my-account-content-title">Custom Headers Name</span>

            <div class="handwritten-page-divide2">
            <?php
                get_template_part('template-parts/form-elements/inputbox', null, [
                    'id' => 'fullname',
                    'label' => 'Full Name',
                    'placeholder' => 'Full Name',
                    'required' => false,
                ]);

                get_template_part('template-parts/form-elements/inputbox', null, [
                    'id' => 'propertyaddress',
                    'label' => 'Property Address',
                    'placeholder' => 'Property Address',
                    'required' => false,
                ]);
            ?>
            </div>

            <div class="handwritten-page-divide2">
                <?php
                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'propertycity',
                        'label' => 'Property City',
                        'placeholder' => 'Property City',
                        'required' => false,
                    ]);

                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'propertystate',
                        'label' => 'Property State',
                        'placeholder' => 'Property State',
                        'required' => false,
                    ]);
                ?>
            </div>

            <div class="handwritten-page-divide2">
                <?php
                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'propertyzip',
                        'label' => 'Property Zip',
                        'placeholder' => 'Property Zip',
                        'required' => false,
                    ]);

                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'mailingaddress',
                        'label' => 'Mailing Address',
                        'placeholder' => 'Mailing Address',
                        'required' => false,
                    ]);
                ?>
            </div>

            <div class="handwritten-page-divide2">
                <?php
                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'mailingaddress2',
                        'label' => 'Mailing Address 2',
                        'placeholder' => 'Mailing Address 2',
                        'required' => false,
                    ]);

                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'mailingcity',
                        'label' => 'Mailing City',
                        'placeholder' => 'Mailing City',
                        'required' => false,
                    ]);
                ?>
            </div>

            <div class="handwritten-page-divide2">
                <?php
                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'mailingstate',
                        'label' => 'Mailing State',
                        'placeholder' => 'Mailing State',
                        'required' => false,
                    ]);

                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'mailingzip',
                        'label' => 'Mailing Zip',
                        'placeholder' => 'Mailing Zip',
                        'required' => false,
                    ]);
                ?>
            </div>

            <div class="handwritten-page-divide2 other-options-custom-header-name">
            <?php
                get_template_part( 'template-parts/form-elements/button', null, array(
                    'title' => 'Discard Changes',
                    'disabled' => true,
                ) );

                get_template_part( 'template-parts/form-elements/button', null, array(
                    'title' => 'Save Changes',
                    'type' => 'submit',
                ) );
            ?>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
