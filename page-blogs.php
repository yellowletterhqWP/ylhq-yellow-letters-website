<?php
/* Template Name: Blogs */
get_header();
?>

<main id="main" class="site-main">
    <div class="register-hero-background-v2"></div>

    <div class="blog-page global-page-wrapper">        
        
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
            <span class="hero-header-title-blue">Blogs</span>
            <span class="hero-header-desc-black-mini">We save your budget and your bandwidth with premium direct mail that drives immediate response.</span>
            
            <?php
                get_template_part( 'template-parts/form-elements/button', null, array(
                    'icon' => get_stylesheet_directory_uri() . '/public/external/Vector.svg',
                    'title' => 'See Mail Options',
                ) );
            ?>
        </div>

        <div class="blog-list">
            <img
                alt="Blog left mage"
                src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/blog-left.png"
                class="blog-left-image"
            />
            <img
                alt="Blog right mage"
                src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/blog-right.png"
                class="blog-right-image"
            />

            <?php
                get_template_part( 'template-parts/form-elements/red-label', null, array(
                    'title' => "Read Our Blogs",
                ) );
            ?>

            <div class="blog-list-devider">
                <?php

                $recent_posts = new WP_Query([
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'post_status'    => 'publish'
                ]);

                if ($recent_posts->have_posts()) {

                    while ($recent_posts->have_posts()) {

                        $recent_posts->the_post();

                        get_template_part('template-parts/box-blog', null, array(
                            'icon'        => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                            'title'       => get_the_title(),
                            'description' => get_the_excerpt(),
                            'permalink'   => get_permalink(),
                            'date'        => get_the_date()
                        ));
                    }
                    wp_reset_postdata();

                } else {
                    echo '<p>No blog posts found.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
