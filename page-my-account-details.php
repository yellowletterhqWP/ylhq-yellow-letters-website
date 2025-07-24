<?php
/* Template Name: My Account Details */
get_header();
?>

<main id="main" class="site-main">
    <div class="register-hero-background"></div>

    <div class="my-account-detail-wrapper global-page-wrapper">        
        
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
                    ['label' => 'My Account', 'url' => '/my-account'],
                    ['label' => 'My Account Details']
                ]
                ]);
            ?>

            <span class="my-account-content-title">My Account Details</span>
        </div>

        <div class="my-order-hr-1">
        <hr />

        <div class="handwritten-page-forms account-details-form">
            <span class="social-form-label">Social Login Account</span>
            <div class="handwritten-page-divide2 account-detail-social-mobile">
                <button class="register-socialcontainer">
                    <img alt="Google Icon" src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/google-icon.png" class="vector-sociallink">
                    <span class="register-text40">
                        Login with Google
                    </span>
                    <div class="disconnect-icon">
                        Disconnect
                    </div>
                </button>
                <div class="social-form-login-note-mobile">
                    <span class="social-form-login-label">Login at</span>
                    <span class="social-form-login-lastdate">May 7, 2025 | 7.30am</span>
                </div>
                
                <button class="register-socialcontainer">
                    <img alt="Vector6672" src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/facebook-icon.png" class="vector-sociallink">
                    <span class="register-text41">
                        Login with facebook
                    </span>
                </button>
                <button class="register-socialcontainer">
                    <img alt="Vector6672" src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/facebook-icon.png" class="vector-sociallink">
                    <span class="register-text41">
                        Login with facebook
                    </span>
                </button>
            </div>
            <div class="social-form-login-note">
                <span class="social-form-login-label">Login at</span>
                <span class="social-form-login-lastdate">May 7, 2025 | 7.30am</span>
            </div>

            <hr />

            <span class="social-form-label">Basic Details</span>
            <div class="handwritten-page-divide2">
                
                <?php
                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'fullname',
                        'label' => 'Full Name',
                        'value' => 'John Doe',
                        'required' => false,
                    ]);

                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'displayname',
                        'label' => 'Display Name',
                        'value' => 'Doe',
                        'required' => false,
                    ]);
                ?>
            </div>
            <div class="handwritten-page-divide2">
                
                <?php
                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'emailaddress',
                        'label' => 'Email Address',
                        'value' => 'Doe24@gmail.com',
                        'required' => false,
                    ]);

                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'phonenumber',
                        'label' => 'Phone Number',
                        'value' => '+4432456789',
                        'required' => false,
                    ]);
                ?>
            </div>

            <hr />

            <span class="social-form-label">Basic Details</span>
            <div class="handwritten-page-divide2">
                <?php
                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'currentpassword',
                        'label' => 'Current Password',
                        'placeholder' => '',
                        'type' => 'password',
                        'value' => 'Your Password',
                        'required' => false,
                        'strength' => false
                    ]);
                ?>
            </div>

            <div class="handwritten-page-divide2">
                <?php
                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'newpassword',
                        'label' => 'New Password',
                        'placeholder' => '',
                        'type' => 'password',
                        'required' => false,
                        'strength' => false
                    ]);

                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'confirmnewpassword',
                        'label' => 'Confirm New Password',
                        'placeholder' => '',
                        'type' => 'password',
                        'required' => false,
                        'strength' => false
                    ]);
                ?>
            </div>

            <hr />

            <span class="social-form-label">Others</span>
            <div class="handwritten-page-divide2">
                
                <?php
                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'secondaryemail',
                        'label' => 'Add a secondary email for notifications',
                        'value' => 'Doe24@gmail.com',
                        'required' => false,
                        'extralabel' => '(Optional)'
                    ]);

                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'displayname',
                        'label' => 'Accounting Email',
                        'value' => 'Doe24@gmail.com',
                        'required' => false,
                        'extralabel' => '(Optional)'
                    ]);
                ?>
            </div>

            <hr />

            <?php
                get_template_part('template-parts/form-elements/expandable', 'faq', [
                    'title' => 'Billing Address',
                    'content' => '',
                    'id' => 'billingaddress'
                ]);
            ?>

            <hr />
            <?php
                get_template_part('template-parts/form-elements/expandable', 'faq', [
                    'title' => 'Payment Method',
                    'content' => '',
                    'id' => 'paymentmethod'
                ]);
            ?>

        </div>

    </div>
</main>

<?php get_footer(); ?>
