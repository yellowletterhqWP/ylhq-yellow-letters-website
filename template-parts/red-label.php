<?php
$title = $args['title'] ?? '';
?>

<div class="box-red-label">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/external/red-label.svg" />
    <span><?php echo esc_html($title); ?></span>
</div>