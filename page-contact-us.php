<?php
/* Template Name: Contact Us */
get_header();
?>

<main id="main" class="site-main">
    <div class="register-hero-background-v2"></div>

    <div class="contact-us global-page-wrapper">        
        
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

        <div class="contact-us-header-title-container">
            <span class="hero-header-title-blue">Contact</span>
            <span class="hero-header-desc-black">We're happy to help with any questions.</span>
            
            <?php
                get_template_part( 'template-parts/form-elements/button', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/Vector.svg',
                    'title' => 'See Mail Options',
                ) );
            ?>
        </div>

        <div class="concact-us-help-message">
            <?php
                get_template_part( 'template-parts/form-elements/red-label', null, array(
                    'title' => "We can't wait to work with you!",
                ) );
            ?>
            <span class="help-message">Drop us a message -- we're here to help!</span>
        </div>

        <div class="handwritten-page-forms">
            
            <div class="handwritten-page-divide2">
                <?php
                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'first_name',
                        'label' => 'First Name',
                        'placeholder' => 'First Name',
                        'required' => false
                    ]);

                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'last',
                        'label' => 'Last Name',
                        'placeholder' => 'Last Name',
                        'required' => false
                    ]);
                ?>
            </div>

            <div class="handwritten-page-divide2">
                <?php
                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'email_address',
                        'label' => 'Email Address',
                        'placeholder' => 'Email Address',
                        'required' => false
                    ]);

                    get_template_part('template-parts/form-elements/inputbox', null, [
                        'id' => 'phone_number',
                        'label' => 'Phone Number',
                        'placeholder' => 'Phone Number',
                        'required' => false
                    ]);
                ?>
            </div>

            <?php
            get_template_part('template-parts/form-elements/textarea', null, [
                'id' => 'message',
                'label' => 'Message',
                'placeholder' => 'Write your message here ...',
                'required' => false
            ]);
            ?>
            <div class="contact-us-message-wrapper">
                <?php
                get_template_part('template-parts/form-elements/checkbox', null, array(
                    'name' => 'subscribe',
                    'label' => 'By checking this box, you agree to receive text updates and offers from YellowLetters. Reply "stop" to unsubscribe.',
                    'checked' => false
                ));
                ?>
                <div class="contact-us-send-message-button">
                    <?php
                    get_template_part( 'template-parts/form-elements/button', null, array(
                        'id' => 'send-message-button',
                        'title' => 'Send Message',
                        'type' => 'submit',
                        'disabled' => true,
                        'icon' => '',
                    ) );
                    ?>
                </div>
            </div>
        </div>

        <div class="concact-us-help-message reach-out-div">
            <?php
                get_template_part( 'template-parts/form-elements/red-label', null, array(
                    'title' => "Reach out to us",
                ) );
            ?>
            <span class="help-message">Connect with us -- we're here to assist you!</span>
        </div>

        <div class="contact-us-footer">
            <div class="footer-contact-social">
                <div class="contact-info">
                    <div class="contact-row">
                    <div class="icon"><img src="<?php echo get_stylesheet_directory_uri() ?>/public/external/phone-icon.svg" alt="Phone"></div>
                    <div class="text">858-412-3370</div>
                    </div>
                    <div class="contact-row">
                    <div class="icon"><img src="<?php echo get_stylesheet_directory_uri() ?>/public/external/email-icon.svg" alt="Email"></div>
                    <div class="text">support@Yellowletterhq.com</div>
                    </div>
                    <div class="contact-row">
                    <div class="icon"><img src="<?php echo get_stylesheet_directory_uri() ?>/public/external/location-icon.svg" alt="Location"></div>
                    <div class="text">45 Broadway Chula Vista,<br>CA 91910</div>
                    </div>
                </div>

                <div class="contact-divider"></div>

                <div class="contact-social-icons">
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/public/external/facebook.svg" alt="Facebook"></a>
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/public/external/linkedin.svg" alt="LinkedIn"></a>
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/public/external/google.svg" alt="Google"></a>
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/public/external/youtube.svg" alt="YouTube"></a>
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/public/external/x.svg" alt="X/Twitter"></a>
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/public/external/instagram.svg" alt="Instagram"></a>
                </div>
            </div>
        </div>

        <div class="maps-footer">
            <img
            alt="Maps"
            src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/maps.png"
            class="maps-image"
        />
        </div>
    </div>
</main>

<?php get_footer(); ?>
