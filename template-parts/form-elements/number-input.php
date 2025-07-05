<?php
$id = $args['id'] ?? 'numberinput';
$name = $args['name'] ?? $id;
$label = $args['label'] ?? '';
$required = $args['required'] ?? false;
$min = $args['min'] ?? 1;
$max = $args['max'] ?? 10000;
$value = $args['value'] ?? $min;
?>

<div class="form-group">
  <label for="<?php echo esc_attr($id); ?>">
    <?php echo esc_html($label); ?>
    <?php if ($required) : ?><span class="required">(Required)</span><?php endif; ?>
  </label>
  <input type="number"
        id="<?php echo esc_attr($id); ?>"
        name="<?php echo esc_attr($name); ?>"
        min="<?php echo esc_attr($min); ?>"
        max="<?php echo esc_attr($max); ?>"
        value="<?php echo esc_attr($value); ?>"
        <?php echo $required ? 'required' : ''; ?>
        >
</div>
