<?php
$icon = $args['icon'] ?? '';
$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
$permalink = $args['permalink'] ?? '';
$date = $args['date'] ?? '';
?>

<div class="header-grid-box-blog">
    <div class="box-blog-header-asset"></div>
    
    <div class="box-content-blog">
        <div class="blog-content-ft-img">
            <img class="box-blog-content-image" src="<?php echo esc_html($icon); ?>" />
        </div>
        <div class="box-content-inner-blog">
            <h3><?php echo esc_html($title); ?></h3>
            <span><?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?>
                <a class="read-more-link" href="<?php echo esc_url($permalink); ?>">Read more</a>
            </span>
        </div>
        <div class="date-post">
            <?php echo esc_html($date); ?>
        </div>
    </div>
    <img class="box-blog-cropped-footer" src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/blog-cropped.png" />
</div>