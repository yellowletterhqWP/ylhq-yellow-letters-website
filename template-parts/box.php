<?php
$icon = $args['icon'] ?? '';
$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
?>

<div class="header-gird-box">
    <div class="box-asset13"></div>
    <div class="box-content">
        <img src="<?php echo esc_html($icon); ?>" />
        <div class="box-content-inner">
            <h3><?php echo esc_html($title); ?></h3>
            <span><?php echo esc_html($description); ?></span>
        </div>
    </div>
    <div class="box-croped-footer">
        <div class="box-helper"></div>
        <img decoding="async" alt="FooterLogoImage6672" src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/croped.svg" class="login-footer-croped-image">
    </div>
</div>