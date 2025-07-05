<?php
$options = $args['options'] ?? [];
$name = $args['name'] ?? 'style_choice';
$name = esc_attr($name);
$selected = $args['selected'] ?? null;
?>

<div class="segmented-radio">
  <?php foreach($options as $index => $opt): 
    $value = esc_attr($opt['value']);
    $label = esc_html($opt['label']);
    $checked = ($selected && $selected == $value) || (!$selected && $index === 0) ? 'checked' : '';
  ?>
    <label class="segment <?php echo $index === 0 ? 'first' : ($index === array_key_last($options) ? 'last' : 'middle'); ?>">
      <input type="radio" name="<?php echo $name; ?>" value="<?php echo $value; ?>" <?php echo $checked; ?>>
      <span><?php echo $label; ?></span>
    </label>
  <?php endforeach; ?>
</div>
