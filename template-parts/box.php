<?php
$icon = $args['icon'] ?? '';
$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
?>

<div class="header-grid-box">
    <div class="box-asset13"></div>
    
    <div class="box-content">
        <img src="<?php echo esc_html($icon); ?>" />
        <div class="box-content-inner">
            <h3><?php echo esc_html($title); ?></h3>
            <span><?php echo esc_html($description); ?></span>
        </div>
    </div>
    <?php
        get_template_part( 'template-parts/croped-footer');
    ?>
</div>