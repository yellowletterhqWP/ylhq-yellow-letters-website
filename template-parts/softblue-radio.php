<?php
$title = $args['title'] ?? '';
$id    = $args['id'] ?? '';
$name  = $args['name'] ?? 'softblue-radio-box[]';
?>

<label class="button-radio">
  <input type="radio" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_attr($id); ?>">
  <span class="button-style"><?php echo esc_html($title); ?></span>
</label>
