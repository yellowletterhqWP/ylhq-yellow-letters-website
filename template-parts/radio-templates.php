<?php
$icon = $args['icon'] ?? '';
$title = $args['title'] ?? '';
$id = $args['id'] ?? '';
$name = $args['name'] ?? 'product-radio-box[]';
?>

<label class="radio-templates-image-box">
  <input type="radio" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr($id); ?>">
  <!-- <div class="radio-templates-image-content">
      <img src="<?php //echo esc_html($icon); ?>" alt="<?php //echo esc_attr($title); ?>" />
  </div> -->
  <div class="radio-templates-title-wrapper">
    <span class="radio-templates-title"><?php echo esc_html($title); ?></span>
    <span class="radio-templates-checkmark">&#10003;</span>
  </div>
</label>
