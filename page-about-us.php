<?php
/* Template Name: About Us */
get_header();
?>

<main id="main" class="site-main">
    <div class="register-hero-background-v2"></div>

    <div class="policy-term-wrapper custom-register-wrapper">        
        
        <h1>About Us</h1>
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

        <div class="privacy-policy-content">
            <?php
            // Fetch and display the content of the Privacy Policy page
            $about_us = get_page_by_path('about-us');
            if ($about_us) {
                echo apply_filters('the_content', $about_us->post_content);
            } else {
                echo '<p>About Us content not found.</p>';
            }
            ?>
        </div>
        
    </div>
</main>

<?php get_footer(); ?>
