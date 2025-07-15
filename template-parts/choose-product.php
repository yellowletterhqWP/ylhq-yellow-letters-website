<?php
$icon = $args['icon'] ?? '';
$title = $args['title'] ?? '';
$id = $args['id'] ?? '';
$name = $args['name'] ?? 'product-radio-box[]';
?>

<label class="product-radio-box product-wrapper">
  <input type="radio" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr($id); ?>">
  <div class="product-radio-box-img product-image">
    <img src="<?php echo esc_html($icon); ?>" alt="<?php echo esc_attr($title); ?>" />
  </div>
  <span class="product-radio-box-title product-title"><?php echo esc_html($title); ?></span>
</label>