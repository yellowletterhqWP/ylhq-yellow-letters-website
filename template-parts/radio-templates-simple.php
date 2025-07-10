<?php
$icon = $args['icon'] ?? '';
$title = $args['title'] ?? '';
$id = $args['id'] ?? '';
$name = $args['name'] ?? 'product-radio-box-simple[]';
?>

<label class="radio-templates-image-box-simple">
  <input type="radio" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr($id); ?>">
  
  <div class="radio-templates-title-wrapper-simple">
    <div class="radio-templates-image-content-simple">
      <img src="<?php echo esc_html($icon); ?>" alt="<?php echo esc_attr($title); ?>" />
    </div>

    <span class="radio-templates-title-simple"><?php echo esc_html($title); ?></span>
    <span class="radio-templates-checkmark-simple">&#10003;</span>
  </div>
</label>
