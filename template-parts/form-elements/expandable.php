<?php
$id = $args['id'] ?? '';
$title = $args['title'] ?? 'Title goes here';
$content = $args['content'] ?? 'Content goes here';
$open = $args['open'] ?? false;
?>

<div class="component-expandable">
  <input type="checkbox" id="<?php echo esc_attr($input_id); ?>" class="expandable-toggle" hidden >

    <div class="expandable-menu">
        <div class="expandable-header">
            <span class="expandable-title"><?php echo esc_html($title); ?></span>
            <span class="expandable-icon">+</span>
        </div>

        <div class="expandable-content">
            <hr />
            <?php echo wp_kses_post($content); ?>
        </div>
    </div>
</div>
