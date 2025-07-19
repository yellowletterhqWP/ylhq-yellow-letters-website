<?php
$icon = $args['icon'] ?? '';
$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
?>

<div class="header-grid-box">
    <div class="box-header-asset"></div>
    
    <div class="box-content">
        <div class="blog-content-ft-img">
            <img class="box-content-image" src="<?php echo esc_html($icon); ?>" />
        </div>
        <div class="box-content-inner">
            <h3><?php echo esc_html($title); ?></h3>
            <span><?php echo $description; ?></span>
        </div>
    </div>
    <img class="box-cropped-footer" src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/blog-cropped.png" />
</div>