<?php
$id = $args['id'] ?? '';
$title = $args['title'] ?? 'Title goes here';
$content = $args['content'] ?? 'Content goes here';
$open = $args['open'] ?? false;
?>

<div class="component-dropdown">
  <input type="checkbox" id="<?php echo esc_attr($input_id); ?>" class="dropdown-toggle" hidden >

    <div class="dropdown-menu">
        <div class="component-header">
            <span class="component-title"><?php echo esc_html($title); ?></span>
            <span class="component-icon">+</span>
        </div>

        <div class="component-content">
            <hr />
            <?php echo wp_kses_post($content); ?>
        </div>
    </div>
</div>
