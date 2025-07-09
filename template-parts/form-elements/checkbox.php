<?php
$name = $args['name'] ?? 'checkbox_option';
$id = $args['id'] ?? $name;
$label = $args['label'] ?? 'Checkbox Label';
$checked = !empty($args['checked']) ? 'checked' : '';
?>

<label class="custom-checkbox-wrapper">
  <input type="checkbox" name="<?php echo esc_attr($name); ?>" id="<?php echo esc_attr($id); ?>" <?php echo $checked; ?>>
  <span class="custom-checkbox-label"><?php echo esc_html($label); ?></span>
</label>
