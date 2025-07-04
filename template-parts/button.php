<?php
$icon = $args['icon'] ?? '';
$title = $args['title'] ?? '';
?>

<div class="homepage-header-button">
    <a href="#"><?php echo esc_html($title); ?></a>
    <?php if($icon!=='') : ?>
        <img src="<?php echo esc_html($icon); ?>" />
    <?php endif; ?>
</div>